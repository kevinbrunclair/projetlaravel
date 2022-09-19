<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('name')->get();
        return view('product-list', ['products' => $products,]);
    }

    public function productprice()
    {
        $products = Product::orderBy('price', 'asc')->get();
        return view('product-price', ['products' => $products,]);
    }

    public function show($id)
    {
        $product = DB::select('select * from products where id = ?', [$id]);
        return view('product-details', ['product' => $product[0]]);
    }

    public function productspecial()
    {
        $products = Product::where('price', '>', 90)->get();
        return view('product-special', ['products' => $products]);

    }

}
