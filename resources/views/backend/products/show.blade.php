@extends('layouts.app')

@section('title', $product->title)

@section('content')
    <p>{{ $product->title }}</p>
    <form method="post" action="{{ route('backend.products.update', $product->id) }}">
        @method('PUT')
        @csrf
        <input name="title" type="text" value="{{ $product->title }}">
        <textarea name="description">{{ $product->description }}</textarea>
        <input type="submit" value="Update">
    </form>
@endsection

