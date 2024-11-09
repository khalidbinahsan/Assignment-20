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
    function showProduct(){

    }
    function editProduct(){

    }
    function updateProduct(){

    }
    function deleteProduct(Request $request){
        $result = Product::where('id', $request->id)->delete();
        return redirect('/products')->with('success', 'Product deleted successfully!');
    }
}
