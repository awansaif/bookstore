<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\FaqCategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Str;

class FaqCategoryController extends Controller
{
    public function index(): View
    {
        return view('admin.pages.faq.category.index', [
            'categories' => FaqCategory::orderBy('id', 'DESC')->get()
        ]);
    }


    public function create(): View
    {
        return view('admin.pages.faq.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        FaqCategory::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-')
        ]);

        return back()
            ->with('message', 'Faq Category added successfully');
    }

    public function show(FaqCategory $faqCategory)
    {
    }


    public function edit(FaqCategory $faqCategory): View
    {
        return view('admin.pages.faq.category.edit', [
            'category' => $faqCategory
        ]);
    }

    public function update(Request $request, FaqCategory $faqCategory): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
        ]);

        $faqCategory->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-')
        ]);

        return back()
            ->with('message', 'Faq Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FaqCategory  $faqCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(FaqCategory $faqCategory)
    {
        $faqCategory->delete();
        return back()
            ->with('message', 'Faq Category removed successfully');
    }
}
