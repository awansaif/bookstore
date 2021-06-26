<?php

namespace App\Http\Livewire;

use App\Models\FaqCategory;
use Livewire\Component;

class Faq extends Component
{
    public function like()
    {
        $this->post->addLikeBy(auth()->user());
    }
    public function render()
    {
        return view('livewire.faq', [
            'categories' => FaqCategory::orderBy('id', 'DESC')->get()
        ]);
    }
}
