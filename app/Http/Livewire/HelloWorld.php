<?php

namespace App\Http\Livewire;

Use Illuminate\Http\Request;
use Livewire\Component;

class HelloWorld extends Component
{

    public $name = "default";

    public function render() {
        return view('livewire.hello-world');
    }
    
    /* public $name = 'Carlos';

    public $loud = false;

    public $greeting = ['Hello']; */

    

    /* public function resetName($name = 'Chico') {
        $this->name = $name;
    } */

    /* public function mount(Request $request, $name) {
        $this->name = $request->input('name', $name);
    } */

    /* public function mount($name) {
        $this->name = $name;
    } */

    /* public function hydrate() {
        $this->name = 'hydrated@';
    } */

    /* public function updated() {
        $this->name = strtoupper($this->name);
    } */
    
    /* public function updatedName() {
        $this->name = strtoupper($this->name);
    } */
    
}
