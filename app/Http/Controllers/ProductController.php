<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(5);

        return view('product.product', compact('products'), [
            'title' => 'Product'
        ]);
    }

    public function create()
    {
        return view('product.create', [
            'title' => 'Product'
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'type'  => 'required|min:5',
            'quantity'  => 'required|min:1',
            'price'  => 'required|min:5',
        ]);

        $image = $request->file('image');
        $image->storeAs('public/products', $image->hashName());

        Product::create([
            'image' => $image->hashName(),
            'type'  => $request->type,
            'quantity'  => $request->quantity,
            'price'  => $request->price,
        ]);

        return redirect('/product')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(Product $product)
    {
        return view('product.edit', compact('product'), [
            'title' => 'Product'
        ]);
    }

    public function update(Request $request, Product $product)
    {
        $this->validate($request, [
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'type'  => 'required|min:5',
            'quantity'  => 'required|min:1',
            'price'  => 'required|min:5',
        ]);

        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/products', $image->hashName());

            //delete old image
            Storage::delete('public/products/' . $product->image);

            //update post with new image
            $product->update([
                'image' => $image->hashName(),
                'type'  => $request->type,
                'quantity'  => $request->quantity,
                'price'  => $request->price,
            ]);
        } else {

            //update post without image
            $product->update([
                'type'  => $request->type,
                'quantity'  => $request->quantity,
                'price'  => $request->price,
            ]);
        }

        return redirect('/product')->with(['success' => 'Update success']);
    }

    public function destroy(Product $product)
    {
        Storage::delete('public/products/' . $product->image);

        $product->delete();

        return redirect('/product')->with(['success' => 'Delete success']);
    }
}
