<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\FaqCategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FaqController extends Controller
{
    public function index(): View
    {
        return view('admin.pages.faq.index', [
            'faqs' => Faq::with('category')->orderBy('id', 'desc')->get()
        ]);
    }


    public function create(): View
    {
        return view('admin.pages.faq.create', [
            'categories' => FaqCategory::orderBy('id', 'desc')->select('id', 'name')->get()
        ]);
    }


    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'question' => 'required',
            'category' => 'required',
            'answer' => 'required'
        ]);

        Faq::create([
            'question' => $request->question,
            'faq_category_id' => $request->category,
            'answer'   => $request->answer
        ]);

        return back()
            ->with('message', 'Faq added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $faq)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $faq)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {
        //
    }
}
