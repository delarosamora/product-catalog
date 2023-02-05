<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProductRequest;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Log;
use Storage;
use Throwable;

class ProductController extends Controller
{

    public function index()
    {
        #region SEO
        $seoTitle = "Inicio";
        $separator = config('seo.separator');
        $appName = config('app.name');
        $seoImage = config('seo.image_site');
        $appUrl = config('app.url');
        seo()->title("$seoTitle $separator $appName");
        seo()->image("$appUrl/storage/$seoImage");
        #endregion
        return view('products.index')
        ->with('products', Product::all())
        ->with('categories', Category::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        #region SEO
        $seoTitle = "Crear producto";
        $separator = config('seo.separator');
        $appName = config('app.name');
        seo()->title("$seoTitle $separator $appName");
        #endregion
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
            if ($request->hasFile('image')){
                Storage::putFileAs('public/products', $request->file('image'), $product->code_tag . '.' . $request->file('image')->extension());
                $product->image = $product->code_tag . '.' . $request->file('image')->extension();
                $product->save();
            }

            return redirect()
            ->route('products.show', ['product' => $product])->with('notification', ['status' => 'success', 'title' => $product->name, 'text' => 'Producto creado correctamente']);
        }catch(Throwable $e){
            Log::error($e);
        }
    }

    public function show($id)
    {
        try {
            
            $product = Product::findOrFail($id);
            #region SEO
            $seoTitle = $product->name;
            $seoDescription = $product->description;
            $separator = config('seo.separator');
            $appName = config('app.name');
            $seoImage = $product->safe_image;
            $appUrl = config('app.url');
            seo()->title("$seoTitle $separator $appName");
            seo()->description($seoDescription);
            seo()->image("$appUrl/storage/products/$seoImage");
            #endregion
            return view('products.show')->with('product', $product);

        } catch (ModelNotFoundException $e) {
            return back();
        }
    }

    public function edit($id)
    {
        try {
            
            $product = Product::findOrFail($id);
            #region SEO
            $seoTitle = "Editar " . $product->name;
            $seoDescription = $product->description;
            $separator = config('seo.separator');
            $appName = config('app.name');
            $seoImage = $product->safe_image;
            $appUrl = config('app.url');
            seo()->title("$seoTitle $separator $appName");
            seo()->description($seoDescription);
            seo()->image("$appUrl/storage/products/$seoImage");
            #endregion
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
            if ($request->hasFile('image')){
                Storage::putFileAs('public/products', $request->file('image'), $product->code_tag . '.' . $request->file('image')->extension());
                $product->image = $product->code_tag . '.' . $request->file('image')->extension();
            }
            $product->save();

            return redirect()
            ->route('products.show', ['product' => $product])
            ->with('notification', ['status' => 'success', 'title' => $product->name, 'text' => 'Producto actualizado correctamente']);
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
        try{
            $product = Product::findOrFail($id);
            $product->delete();
            return redirect()
            ->route('products.index')->with('notification', ['status' => 'success', 'title' => $product->name, 'text' => 'Producto eliminado']);
        }catch(Throwable $e){
            Log::error($e);
        }
    }
}
