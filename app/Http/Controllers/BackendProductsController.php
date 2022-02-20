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
        $products = Product::orderBy('title')->paginate(10);

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

        $request->session()->flash('success', 'Product saved successfully!');

        return redirect()->route('backend.products.index');
    }

    public function create()
    {
        return view('backend.products.create');
    }

    public function store(ProductUpdateRequest $request)
    {
        $validated = $request->validated();

        $product = new Product();
        $product->title = $validated['title'];
        $product->description = $validated['description'];
        $product->save();

        $request->session()->flash('success', 'Product added successfully!');

        return redirect()->route('backend.products.index');
    }

    public function destroy(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        $request->session()->flash('success', 'Product removed successfully!');

        return redirect()->route('backend.products.index');
    }
}
