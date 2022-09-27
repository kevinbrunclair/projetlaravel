<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\product;
use Illuminate\Http\Request;

class BackofficeController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index() // Afficher tous les produits
    {
        $products = Product::orderBy('name')->get();
        return view('backoffice', ['products' => $products,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create() // Formulaire d'ajout de produit
    {
        return view('/backoffice-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function store(StorePostRequest $request) // Créer un produit en db
    {
        $product = new Product();

        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->image = $request->input('image');
        $product->quantity = $request->input('quantity');
        $product->save();
        return redirect()->route('backoffice');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) // Afficher un produit
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id) // Formulaire d'édition de produit
    {
        $product = Product::find($id);
        return view('/backoffice-edit', ['product' => $product]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */

    public function destroy($id) // Supprimer un produit en DB
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('backoffice');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id) // Mettre à jour un produit en DB
    {
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->image = $request->input('image');
        $product->save();
        return redirect()->route('backoffice');
    }

}
