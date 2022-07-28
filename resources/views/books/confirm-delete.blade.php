
@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Delete Book: {{ $book->name }}
        </div>
        <div class="card-body">
            <form action="{{ route('books.destroy', $book) }}" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                @csrf

                <p>Are you sure you want to delete this book?</p>

                <div class="form-group">
                    <button type="submit" class="btn btn-danger float-right">Delete</button>
                </div>
            </form>
        </div>
    </div>
@stop
