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

<div class="max-w-6xl mx-auto grid grid-cols-1 md-grid-col-2 gap-3 ">
     @foreach ($books as $book)
         <div>
            <i></i>
            <h1>{{$book->title}}</h1>
         </div>
     @endforeach
    {{-- No surplus words or unnecessary actions. - Marcus Aurelius --}}
</div>