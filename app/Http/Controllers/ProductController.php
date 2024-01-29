<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('pages.product.index', compact('products'));
    }

    public function create()
    {
        return view('pages.product.add');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|min:3|max:255',
            'code' => 'required|numeric',
            'description' => 'required|min:3|max:10000',
        ]);

        Product::create($data);

        return redirect()->route('product.index');
    }

    public function edit(Product $product)
    {
        $product = Product::findOrFail($product->id);
        return view('pages.product.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->all();

        $product = Product::findOrFail($product->id);
        $product->update($data);

        return redirect()->route('product.index');
    }

    public function destroy(Product $product)
    {
        $product = Product::findOrFail($product->id);
        $product->delete();

        return redirect()->route('product.index');
    }
}
