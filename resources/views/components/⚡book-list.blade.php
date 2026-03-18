<?php

use Livewire\Component;
use App\Models\Book;
new class extends Component
{
    //
    public $books;
    public $isModalOpen=false;
    public $bookId=null;
   public function mount(){
    $this->books = Book::all();
   }

    

   public function deleteBook($id){
    $this->bookId= $id;
    $this->isModelOpen=true;

   }

function cancel(){
    $this->bookId=null;
    $this->isModalOpen=false;
   }
   public function deleteBtn(){
    Book::findOrFail($this->bookId);
    $book->delete();
    $this->books=Book::all();
    $this->isModalOpen = false;
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
            <button wire:click="deleteBook({{ $book->id }})" class="bg-red-700 text-gray-200 rounded-md py-2 px-4 ">Delete</button>
            </div>
         </div>
     @endforeach
     @if ($isModalOpen)
    <div class="absolute top-1/2 left-1/2 bg-black/75 -translate-1/2 rounded-md">
    <div class="fles flex-col text-white p-5 rounded-md ">
        <span class="font-bold ">Delete a book</span>
        <h1 class="font-bold ">Are you sure you want to delete this book?</h1>
    </div>
    <div class="flex my-4 justify-between p-2 items-center">
       <button wire:click="cancel" class="bg-white px-3 py-2   rounded-md">Cancel</button>
       <button wire:click="deleteBtn" class="bg-red-700 px-3 py-2 rounded-md">Delete</button>
    </div>
</div>         
     @endif
    {{-- No surplus words or unnecessary actions. - Marcus Aurelius --}}
</div>