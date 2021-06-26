<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Gift;
use App\Models\GiftCategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GiftController extends Controller
{
    public function index(): View
    {
        return view('admin.pages.gift.index', [
            'gifts' => Gift::with('category')
                ->orderBy('id', 'DESC')
                ->get()
        ]);
    }

    public function create(): View
    {
        return view('admin.pages.gift.create', [
            'categories' => GiftCategory::orderBy('name', 'ASC')->get()
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => ['required'],
            'price' => ['required'],
            'stock' => ['required'],
            'category' => ['required', 'exists:gift_categories,id'],
            'image' => ['required', 'image'],
            'description' => ['required'],
        ]);


        Gift::create([
            'gift_category_id' => $request->category,
            'title' => $request->title,
            'image' => $this->fileUpload('images/', $request->File('image')),
            'price' => $request->price,
            'stock' => $request->stock,
            'description' => $request->description,
        ]);

        return back()
            ->with(['message' => 'Gift item added successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gift  $gift
     * @return \Illuminate\Http\Response
     */
    public function show(Gift $gift)
    {
        //
    }

    public function edit(Gift $gift): View
    {
        return view('admin.pages.gift.edit', [
            'gift' => $gift,
            'categories' => GiftCategory::orderBy('name', 'ASC')->get()
        ]);
    }


    public function update(Request $request, Gift $gift): RedirectResponse
    {
        $request->validate([
            'title' => ['required'],
            'price' => ['required'],
            'stock' => ['required'],
            'category' => ['required', 'exists:gift_categories,id'],
            'image' => ['nullable', 'image'],
            'description' => ['required'],
        ]);

        $gift->update([
            'gift_category_id' => $request->category,
            'title' => $request->title,
            'image' => $request->file('image') ? $this->fileUpload('images/', $request->File('image')) : $gift->image,
            'price' => $request->price,
            'stock' => $request->stock,
            'description' => $request->description,
        ]);

        return back()
            ->with(['message' => 'Gift item updated successfully.']);
    }

    public function destroy(Gift $gift): RedirectResponse
    {
        $gift->delete();
        return back()
            ->with(['message' => 'Gift item removed successfully.']);
    }
}
