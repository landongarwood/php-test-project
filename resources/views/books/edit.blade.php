@extends('layouts.app')

@section('content')
    <form role="form" action="{{ route('books.update', $book) }}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        @csrf

        <div class="card">
            <div class="card-header">
                Edit Book
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name', $book->name) }}">
                </div>
                <div class="form-group">
                    <label>Author</label>
                    <input type="text" class="form-control" name="author" value="{{ old('author', $book->author) }}">
                </div>
                <div class="form-group">
                    <label>Quantity</label>
                    <input type="number" class="form-control" name="quantity" value="{{ old('quantity', $book->quantity) }}">
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="text" class="form-control" name="price" value="{{ old('price', $book->price) }}">
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary float-right">Confirm</button>
            </div>
        </div>
    </form>
@stop
