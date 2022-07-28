@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Books

            <a href="{{ route('books.create') }}" class="btn btn-primary float-right">Add Book</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Author</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th width="200"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <th scope="row">{{ $book->id }}</th>
                            <td>{{ $book->name }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->quantity }}</td>
                            <td>{{ number_format($book->price, 2, '.', "") }}</td>
                            <td>
                                <a href="{{ route('books.edit', $book) }}" class="btn btn-outline-primary">Edit</a>
                                <a href="{{ route('books.confirm-delete', $book) }}" class="btn btn-outline-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
  </div>
@stop
