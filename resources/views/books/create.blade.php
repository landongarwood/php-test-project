@extends('layouts.app')

@section('content')
    <form role="form" action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header">
                Add Book
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                </div>
                <div class="form-group">
                    <label>Author</label>
                    <input type="text" class="form-control" name="author" value="{{ old('author') }}">
                </div>
                <div class="form-group">
                    <label>Quantity</label>
                    <input type="number" class="form-control" name="quantity" value="{{ old('quantity') }}">
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="text" class="form-control" name="price" value="{{ old('price') }}">
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary float-right">Confirm</button>
            </div>
        </div>
    </form>
@stop
