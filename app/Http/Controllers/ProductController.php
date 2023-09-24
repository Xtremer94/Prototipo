<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        //
        $products = Product::all();
        return view('product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        //
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request): RedirectResponse
    {
        //
        Product::create($request->all());

        return redirect()->route('product.index')->with('success', 'product created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product):view
    {
        //
        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product):view
    {
        //
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product): RedirectResponse
    {
        //
        $product->update($request->all());
        return redirect()->route('product.index')->with('success','Client updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product):RedirectResponse
    {
        //
        $product->delete();
        return redirect()->route('product.index')->with('danger','product deleted');
    }
}
