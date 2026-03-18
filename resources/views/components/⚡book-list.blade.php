<?php

use Livewire\Component;
use App\Models\Book;
new class extends Component
{
    //
    public $books;

   public function mount(){
    $this->books = Book::all();
   }
};
?>

<div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-3 my-4 ">
     @foreach ($books as $book)
         <div class="flex w-full bg-gray-500 px-4 py-5 flex-col gap-3 rounded-md text-gray-200">
            <div class=" text-2xl font-bold ">
            <i class="fa-solid fa-book-open text-text-color "></i>
            </div>
            <h1 class="text-gray-200">{{$book->title}}</h1>
            <h1>Author:{{$book->author}}</h1>
            <div class="flex justify-between items-center">
            <span>Rating:{{$book->rating}}</span>
            <button class="bg-red-700 text-gray-200 rounded-md py-2 px-4 ">Delete</button>
            </div>
         </div>
     @endforeach
    {{-- No surplus words or unnecessary actions. - Marcus Aurelius --}}
</div>