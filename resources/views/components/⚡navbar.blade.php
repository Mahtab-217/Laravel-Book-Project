<?php

use Livewire\Component;

new class extends Component
{
    //
    public $myName="Ali";
    public $date=0;
    public $greeting="";
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

<div class="w-full flex justify-between p-5 ">
    <h1 class="text-gray-300 text-3xl font-bold">Hi there, {{ $myName }} {{ $greeting }} </h1>
    <input type="text" class="border h=3 border-gray-200 text-gray-300 py-1.5 rounded-md focus:outline-0">
    {{-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead --}}
</div>