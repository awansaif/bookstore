<?php

namespace App\Http\Livewire;

use App\Models\PublicMessage;
use Livewire\Component;

class ContactUS extends Component
{

    public $name;
    public $email;
    public $message;
    protected $rules = [
        'name'    => 'required',
        'email'   => 'required',
        'message' => 'required',
    ];
    public function savePublicMessage()
    {
        $this->validate();
        PublicMessage::create([
            'name'    => $this->name,
            'email'   => $this->email,
            'message' => $this->message
        ]);

        session()->flash('message', 'Thanks for reaching us.');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.contact-u-s');
    }
}
