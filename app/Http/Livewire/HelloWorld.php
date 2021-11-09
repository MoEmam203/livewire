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


    // LifeCycle Hooks
    
    // constructor livewire method
    public function mount($name){
        // $this->name = "Test";
        $this->name = $name;
    }

    // when anything changed
    // public $hydratedName;
    // public function hydrate(){
    //     $this->hydratedName = "hydrated";
    // }

    // when something updated
    // public function updated(){
    //     $this->name = "updated@";
    // }

    // change name when name updated
    public function updatedName(){
        $this->name = "Name Updated";
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
