@extends('layouts.app')

@section('content')
    <h1>Edit product</h1>

    <form action="{{ route('product.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="my-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $product->title }}" placeholder="Masukkan Title">
        </div>
        <div class="my-3">
            <label for="code" class="form-label">Product Code</label>
            <input type="number" class="form-control" id="code" name="code" value="{{ $product->code }}" placeholder="Masukkan Product Code">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" rows="3" name="description" placeholder="Masukkan Description">{{ $product->description }}</textarea>
        </div>

        <div class="mt-3">
            <button type="submit" class="btn btn-success">Edit Product</button>
            <a href="/product" class="btn btn-danger">Cancel</a>
        </div>
    </form>
@endsection
