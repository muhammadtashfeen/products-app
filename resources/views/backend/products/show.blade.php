@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
    @if (count($errors))
        <div class="card bg-danger text-white shadow">
            <div class="card-body">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    <div class="card mt-2">
        <div class="card-body">
            <form method="post" action="{{ route('backend.products.update', $product->id) }}">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <input type="text" name="title" class="form-control" placeholder="Product name" value="{{ $product->title }}">
                </div>
                <div class="form-group">
                    <textarea name="description" class="form-control">{{ $product->description }}</textarea>
                </div>
                <input class="btn btn-primary shadow-sm" type="submit" value="Update">
            </form>
        </div>
    </div>
@endsection

