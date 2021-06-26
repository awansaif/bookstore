<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Str;

class NewsController extends Controller
{

    public function index(): View
    {
        return view('admin.pages.news.index', [
            'news' => News::orderBy('id', 'DESC')->get()
        ]);
    }

    public function create(): View
    {
        return view('admin.pages.news.create');
    }


    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image',
            'author' => 'required',
            'short_description' => 'required',
            'editor1' => 'required',
        ]);

        News::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'image' => $this->fileUpload('images/', $request->file('image')),
            'author' => $request->author,
            'short_description' => $request->short_description,
            'detail_description' => $request->editor1,
        ]);

        return back()
            ->with('message', 'News added successfully.');
    }


    public function show(News $news)
    {
        //
    }

    public function edit(News $news): View
    {
        return view('admin.pages.news.edit', [
            'news' => $news
        ]);
    }


    public function update(Request $request, News $news): RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'image' => 'nullable|image',
            'author' => 'required',
            'short_description' => 'required',
            'editor1' => 'required',
        ]);

        $news->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'image' => $request->file('image') ? $this->fileUpload('images/', $request->file('image')) : $news->image,
            'author' => $request->author,
            'short_description' => $request->short_description,
            'detail_description' => $request->editor1,
        ]);

        return back()
            ->with('message', 'News updated successfully.');
    }


    public function destroy(News $news): RedirectResponse
    {
        $news->delete();
        return back()
            ->with('message', 'News removed successfully.');
    }
}
