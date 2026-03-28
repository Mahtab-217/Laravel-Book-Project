<?php

use Livewire\Component;

new class extends Component
{
    //
    public getBookProperty(){
        return Book::all();
    }

};
?>

<div class="border p-5 ">
    @foreach ($book as $book )
    <input wire:input.getTitle{$this.event.value} class="border" type="text"   placeholder="Please Enter book name">
    <input wire:input.getAuthor{$this.event.value} class="border" type="text"   placeholder="Please Enter book author">
    <input wire:input.getRating{$this.evnet.value} class="border" type="number" placeholder="Please Enter book rating">
    <input class="w-1/2 pt-3 bg-orange-400 text-gray-200" type="submit">
     @endforeach
    {{-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh --}}
</div>