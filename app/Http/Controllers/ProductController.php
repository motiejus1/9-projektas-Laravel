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
        return view("product.index",["products"=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("product.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $product = new Product;

        $productsCount = count($request->productTitle); // 3

        for ($i = 0; $i<$productsCount; $i++ ) {
            $product = new Product;
            //$i
            $product->title = $request->productTitle[$i];
            $product->price = $request->productPrice[$i];
            $product->excerpt = $request->productExcerpt[$i];
            $product->description = $request->productDescription[$i];
            $product->save();
        }

        // $request->productTitle - masyvas

        // foreach($request->productTitle as $productTitle ) {
//
        // }

//      productTitle = masyvas; ["Product1","Product2", "Product3"]
//      productPrice = masyvas; ["10","11", "12"]
//      productExcerpt = masyvas
//      productDescription = masyvas
        // $product->title = $request->productTitle;
        // $product->price = $request->productPrice;
        // $product->excerpt = $request->productExcerpt;
        // $product->description = $request->productDescription;

        // $product1->title = $request->productTitle1;
        // $product1->price = $request->productPrice1;
        // $product1->excerpt = $request->productExcerpt1;
        // $product1->description = $request->productDescription1;

        // $product->save();
        // $product1->save();

        return redirect()->route("product.index");
        // return $productsCount;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
