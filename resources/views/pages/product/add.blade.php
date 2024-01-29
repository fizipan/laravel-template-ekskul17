@extends('layouts.app')

@section('content')
    <h1>Add product</h1>

    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <div class="my-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan Title">
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="my-3">
            <label for="code" class="form-label">Product Code</label>
            <input type="number" class="form-control" id="code" name="code" placeholder="Masukkan Product Code">
            @error('code')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" rows="3" name="description" placeholder="Masukkan Description"></textarea>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mt-3">
            <button type="submit" class="btn btn-success">Add Product</button>
            <a href="/product" class="btn btn-danger">Cancel</a>
        </div>
    </form>
@endsection
