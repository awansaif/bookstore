<?php

namespace App\Http\Livewire\Pages;

use App\Models\News;
use App\Models\NewsComment;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class SingleNewsPage extends Component
{
    public $slug;
    public $new_id;
    public $news_id;
    public $name;
    public $email;
    public $message;

    public function mount($slug)
    {
        $this->slug = $slug;
        $news = News::where('slug', $slug)->first();
        $this->new_id = $news->id;
    }
    public function addComment($news_id)
    {
        NewsComment::create([
            'news_id' => $news_id,
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ]);

        $this->reset();
        $news = News::find($news_id);
        $this->slug = $news->slug;
        $this->new_id = $news_id;
    }
    public function render()
    {
        return view('livewire.pages.single-news-page', [
            'news' => News::where('slug', $this->slug)->first(),
            'comments' => NewsComment::where('news_id', $this->new_id)->orderBy('id', 'DESC')->get(),
        ])
            ->extends('web.layout.web');
    }
}
