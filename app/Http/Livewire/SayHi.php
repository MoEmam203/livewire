<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class SayHi extends Component
{

    public $contact;

    public function mount(Contact $contact){
        $this->contact = $contact;
    }

    // Refresh Child from Parent 
    // protected $listeners = ['refreshChildren' => 'refreshMe'];
    protected $listeners = ['refreshChildren' => '$refresh'];

    // public function refreshMe(){

    // } 

    

    public function render()
    {
        return view('livewire.say-hi');
    }
}
