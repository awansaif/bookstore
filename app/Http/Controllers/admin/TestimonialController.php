<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TestimonialController extends Controller
{

    public function index(): View
    {
        return view('admin.pages.testimonial.index', [
            'testimonials' => Testimonial::orderBy('id', 'DESC')->get()
        ]);
    }


    public function create(): View
    {
        return view('admin.pages.testimonial.create');
    }


    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'image' => 'required|image',
            'rating' => 'required',
            'editor1' => 'required',
        ]);


        Testimonial::create([
            'name'       => $request->name,
            'designation' => $request->designation,
            'image'    => $this->fileUpload('images/', $request->file('image')),
            'rating'     =>  $request->rating,
            'message'      =>  $request->editor1,
        ]);

        return back()
            ->With('message', 'Testimonial saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    public function edit(Testimonial $testimonial): View
    {
        return view('admin.pages.testimonial.edit', [
            'testimonial' => $testimonial
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'image' => 'nullable|image',
            'rating' => 'required',
            'editor1' => 'required',
        ]);


        $testimonial->update([
            'name'       => $request->name,
            'designation' => $request->designation,
            'image'    => $request->file('image') ? $this->fileUpload('images/', $request->file('image')) : $testimonial->image,
            'rating'     =>  $request->rating,
            'message'      =>  $request->editor1,
        ]);

        return back()
            ->With('message', 'Testimonial updated successfully');
    }

    public function destroy(Testimonial $testimonial): RedirectResponse
    {
        $testimonial->delete();
        return back()
            ->With('message', 'Testimonial removed successfully');
    }
}
