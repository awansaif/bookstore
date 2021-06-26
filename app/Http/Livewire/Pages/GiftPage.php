<?php

namespace App\Http\Livewire\Pages;

use App\Models\Gift;
use App\Models\GiftCategory;
use Livewire\Component;

class GiftPage extends Component
{
    public $categories  = [];
    public $gifts  = [];

    public function mounted()
    {
        $this->gifts = Gift::orderBy('title', 'ASC')->get();
        $this->categories = GiftCategory::withCount('gifts')->orderBy('name', 'ASC')->get();
    }
    public function render()
    {
        return view('livewire.pages.gift-page');
    }
}
