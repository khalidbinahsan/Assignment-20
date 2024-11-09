<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
        $products = Product::all();
        return view('index', ['products'=>$products]);
    }
    function create(){
        return view('create');
    }
    function insert(){

    }
    function showProduct(){

    }
    function editProduct(){

    }
    function updateProduct(){

    }
    function deleteProduct(){

    }
}
