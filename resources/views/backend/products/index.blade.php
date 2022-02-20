@extends('layouts.app')

@section('title', 'Products Manager')

@section('content')
<div class="row">

</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Products</h6>
    </div>
    <div class="card-body">
        <a href="{{ route('backend.products.create') }}" class="d-inline-block btn btn-primary shadow-sm">Add</a>
        <div class="table-responsive mt-2">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                        <thead>
                            <tr>
                                <th rowspan="1" colspan="1">Id</th>
                                <th rowspan="1" colspan="1">Title</th>
                                <th rowspan="1" colspan="1">Description</th>
                                <th rowspan="1" colspan="1">Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th rowspan="1" colspan="1">Id</th>
                                <th rowspan="1" colspan="1">Title</th>
                                <th rowspan="1" colspan="1">Description</th>
                                <th rowspan="1" colspan="1">Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($products as $product)
                                <tr class="odd">
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->title }}</td>
                                    <td>{{ Str::limit($product->description, 60, '...') }}</td>
                                    <td>
                                        <a href="{{ route('backend.products.show', $product->id) }}" class="btn btn-sm btn-primary btn-inline-block">
                                            Edit
                                        </a>
                                        <form class="d-inline-block" action="{{ route('backend.products.destroy', $product->id) }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-xs btn-danger btn-inline-block">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row mt-2 float-right">
                        <div class="col-12">
                            @if ($products->previousPageUrl())
                            <a href="{{ $products->previousPageUrl() }}" class="btn btn-sm btn-primary btn-inline-block">
                                Previous
                            </a>
                            @endif
                            @if ($products->nextPageUrl())
                                <a href="{{ $products->nextPageUrl() }}" class="btn btn-sm btn-primary btn-inline-block">
                                    Next
                                </a>
                            @endif

                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection

