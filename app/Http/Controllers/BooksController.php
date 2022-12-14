<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Support\Facades\Session;

class BooksController extends Controller
{
    public function __construct()
    {
        $this->data = [];
    }

    public function index()
    {
        $this->data['books'] = Book::all();

        return view('books.index', $this->data);
    }

    public function create()
    {
        $this->data['book'] = new Book;

        return view('books.create', $this->data);
    }

    public function store()
    {
        request()->validate($this->getValidationRules());

        $data = request()->all();

        Book::create($data);

        Session::flash('message', 'Book created successfully!');

        return redirect()->route('books.index');
    }

    public function edit(Book $book)
    {
        $this->data['book'] = $book;

        return view('books.edit', $this->data);
    }

    public function update(Book $book)
    {
        request()->validate($this->getValidationRules());

        $book->update(request()->all());

        Session::flash('message', 'Book updated successfully!');

        return redirect()->route('books.index');
    }

    public function confirmDelete(Book $book)
    {
        $this->data['book'] = $book;

        return view('books.confirm-delete', $this->data);
    }

    public function destroy(Book $book)
    {
        $book->delete();

        Session::flash('message', 'Book deleted successfully!');

        return redirect()->route('books.index');
    }

    protected function getValidationRules()
    {
        return [
            'name' => 'required|max:255',
            'author' => 'required|max:255',
            'quantity' => 'required|integer|min:0',
            'price' => 'required|numeric',
        ];
    }
}
