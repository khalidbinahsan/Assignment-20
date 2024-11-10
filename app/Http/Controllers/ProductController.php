<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
        $products = Product::orderBy('id', 'desc')->get();
        return view('index', ['products'=>$products]);
    }
    function create(){
        return view('create');
    }
    function insert(Request $request){
        $result = Product::create($request->input());
        return redirect('/products')->with('success', 'Product added successfully!');
    }
    function showProduct(Request $request){
            $product = Product::where('id', $request->id)->first();
            return view('show', ['item'=>$product]);
    }
    function editProduct(Request $request){
        $product = Product::where('id', $request->id)->first();
        return view('edit', ['item'=>$product]);
    }
    function updateProduct(Request $request){
        Product::where('id', $request->id)->update($request->only(['name', 'description', 'product_id', 'price', 'stock', 'image']));
        return redirect('/products')->with('success', 'Product updated successfully!');
    }
    function deleteProduct(Request $request){
        $result = Product::where('id', $request->id)->delete();
        return redirect('/products')->with('success', 'Product deleted successfully!');
    }
}
