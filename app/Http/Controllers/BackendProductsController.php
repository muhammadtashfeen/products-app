<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Requests\Backend\ProductUpdateRequest;

class BackendProductsController extends Controller
{
    public function index(): View
    {
        $products = Product::all();

        return view('backend.products.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('backend.products.show', compact('product'));
    }

    public function update(ProductUpdateRequest $request, $id)
    {
        $product = Product::findOrFail($id);
        
        $validated = $request->validated();

        $product->title = $validated['title'];
        $product->description = $validated['description'];
        $product->save();


        return redirect()->route('backend.products.index');
    }
}
