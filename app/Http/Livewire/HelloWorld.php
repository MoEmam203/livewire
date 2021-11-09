<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name = "Mustafa";
    public $loud = false;
    // public $greeting = "Hello";
    public $greeting = ["Hello"];

    // Without parameters
    // public function resetName(){

    // with parameter
    // public function resetName($name="Ahmed"){
    //     $this->name = $name;
    // }


    public function render()
    {
        return view('livewire.hello-world');
    }
}
