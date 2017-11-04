<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('pages.products_list', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'nazwa' => 'required',
            'opis' => 'required',
            'cena' => 'required'
        ]);
        $products = new Product;
        $products->nazwa_produktu = $request->input('nazwa');
        $products->opis_produktu = $request->input('opis');
        $products->ceny_produktu = $request->input('cena');
        $products->save();
        return redirect("/")->with('info', 'Produkt został pomyślnie zapisany!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $this->validate($request, [
            'nazwa' => 'required',
            'opis' => 'required',
            'cena' => 'required'
        ]);

        $data = array(
            'nazwa_produktu' => $request->input('nazwa'),
            'opis_produktu' => $request->input('opis'),
            'ceny_produktu' => $request->input('cena')
        );
        Product::where('id', $id)
        ->update($data);

        return redirect("/")->with('info', 'Produkt został pomyślnie edytowany!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $products = Product::find($id);
        return view('pages.update_product', ['products' => $products]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
       Product::where('id', $id)
           ->delete();
        return redirect("/")->with('info', 'Produkt został pomyślnie usunięty!');
    }
}
