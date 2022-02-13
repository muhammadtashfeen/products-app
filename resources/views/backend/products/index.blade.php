@extends('layouts.app')

@section('title', 'Products Manager')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Products</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
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
                                        <a href="{{ route('backend.products.show', $product->id) }}" class="btn btn-primary btn-circle">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-circle">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
@endsection

