<?php

use Livewire\Component;

new class extends Component
{
    //
    public $myName="Mahtab";
};
?>

<div>
    <h1>Hi I am {{$myName}}</h1>
    <h1>Hi there i'm coming from booklist component</h1>
    {{-- No surplus words or unnecessary actions. - Marcus Aurelius --}}
</div>