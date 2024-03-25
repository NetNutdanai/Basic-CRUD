<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index() {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function create(){
        return view('product.create');
    }

    public function store(Request $request){
        $validatedData = $request->validate({
            'name' => 'required',
            'price' -> 'required|numeric'
            
        });

        $product = new Product;
    }
}