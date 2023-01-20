<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProductRequest;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Log;
use Throwable;

class ProductController extends Controller
{

    public function index()
    {
        return view('products.index')->with('products', Product::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create')
            ->with('categories', Category::all());
    }

    public function store(SaveProductRequest $request)
    {
        try{
            $product = new Product();
            $product->name = $request->name;
            $product->price = $request->price;
            $product->category_id = $request->category_id;
            $product->description = $request->description;
            $product->save();

            return redirect()->route('products.show', ['product' => $product]);
        }catch(Throwable $e){
            Log::error($e);
        }
    }

    public function show($id)
    {
        try {
            
            $product = Product::findOrFail($id);
            return view('products.show')->with('product', $product);

        } catch (ModelNotFoundException $e) {
            return back();
        }
    }

    public function edit($id)
    {
        try {
            
            $product = Product::findOrFail($id);
            return view('products.edit')->with('product', $product)->with('categories', Category::all());

        } catch (ModelNotFoundException $e) {
            return back();
        }
    }

    public function update(SaveProductRequest $request, $id)
    {
        try{
            $product = Product::findOrFail($id);
            $product->name = $request->name;
            $product->price = $request->price;
            $product->category_id = $request->category_id;
            $product->description = $request->description;
            $product->save();

            return redirect()->route('products.show', ['product' => $product]);
        }catch(Throwable $e){
            Log::error($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
