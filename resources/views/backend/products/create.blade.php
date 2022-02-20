@extends('layouts.app')

@section('title', 'Add Product')

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
            <form method="post" action="{{ route('backend.products.store') }}">
                @csrf
                <div class="form-group">
                    <input type="text" name="title" class="form-control" placeholder="Product name">
                </div>
                <div class="form-group">
                    <textarea name="description" class="form-control" placeholder="Product description goes here..."></textarea>
                </div>
                <input class="d-none d-sm-inline-block btn btn-primary shadow-sm" type="submit" value="Save">
            </form>
        </div>
    </div>
@endsection

