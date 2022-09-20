<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;


class BackofficeController extends Controller
{

    public function index()
    {
        $products = Product::orderBy('name')->get();
        return view('/backoffice', ['products' => $products,]);
    }


    public function editproducts($id)
    {
        $products = Product::find($id);
        return view('/backoffice-edit', ['products' => $products,]);
    }

    public function deleteproducts($id)
    {
        $products = Product::find($id);
        $products->delete();
        return redirect()->route('/backoffice');
    }

    public function addproducts()
    {
        return view('/backoffice-add');
    }

    public function create(Request $request)
    {
        $product = new Product();
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->image = $request->input('image');
        $product->save();
        return redirect()->route('/backoffice');
    }

}
