<?php

use Livewire\Component;

new class extends Component
{
    //
    public $myName="Mahtab";
    public $date=0;
    public $greeting="";

      public function getValue($value){
                  $this->myName=$value;
      }


    public function mount(){
        date_default_timezone_set("Asia/kabul");
        $this->date=date("H");  
        if($this->date>=18){
          $this->greeting="Good Evening";

        }
        elseif ($this->date>= 12) {
        $this->greeting="Good Afternoon";
        }
        else {
             $this->greeting= "Good Morning";
        }
    }
};
?>

<div class="w-full max-w-6xl mx-auto bg-gray-700 rounded-b-xl backdrop-blur-3xl flex justify-between p-5 ">
    <h1 class=" text-text-color text-2xl font-bold">Hi There {{ $myName }}, {{ $greeting }} </h1>
    <input wire:input="getValue($event.target.value)" type="text" class="ring-2 ring-text-color text-gray-300 py-1.5 px-2 rounded-md focus:outline-0 p-2" placeholder="Enter your name">
    {{-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead --}}
</div>