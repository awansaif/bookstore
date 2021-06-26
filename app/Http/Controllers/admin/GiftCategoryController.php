<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\GiftCategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Str;

class GiftCategoryController extends Controller
{
    public function index(): View
    {
        return view('admin.pages.gift.category.index', [
            'categories' => GiftCategory::orderBy('id', 'DESC')->get()
        ]);
    }

    public function create(): View
    {
        return view('admin.pages.gift.category.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'unique:gift_categories,name']
        ]);

        GiftCategory::Create([
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);
        return back()
            ->with(['message' => 'Gift Category added successfully']);
    }

    public function show(GiftCategory $giftCategory)
    {
        //
    }

    public function edit(GiftCategory $giftCategory): View
    {
        return view('admin.pages.gift.category.edit', [
            'category' => $giftCategory
        ]);
    }

    public function update(Request $request, GiftCategory $giftCategory): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'unique:gift_categories,name,' . $giftCategory->id]
        ]);

        $giftCategory->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);

        return back()
            ->with(['message' => 'Gift category updated successfully']);
    }


    public function destroy(GiftCategory $giftCategory): RedirectResponse
    {
        $giftCategory->delete();
        return back()
            ->with(['message' => 'Gift category removed successfully']);
    }
}
