<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateRequest;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function create(){
        
        return view('product/create');
    }
    public function store(Request $request){
        
        Auth::user()->products()->create(
            [
                'title'=>$request->input('title'),
                'author'=>$request->input('author'),
                'description'=>$request->input('description'),
                'year'=>$request->input('year'),
                'price'=>$request->input('price'),
                'category_id'=>$request->input('category_id')
            ]
        );
        return redirect()->route('product.index');
    }
    public function index(){
        $products = Product::all();
        return view('product/index', compact('products'));
    }
    public function show(Product $product){
        return view('product/show', compact('product'));
    }
    public function update(Product $product){
        return view('product/update', compact('product'));
    }
    public function edit(UpdateRequest $request, Product $product){
        
        $product->title = $request->title;
        $product->author = $request->author;
        $product->description = $request->description;
        $product->year = $request->year;
        $product->price = $request->price;
        $product->save();
        return redirect()->route('product.show', compact('product'));
    }
    public function delete(Product $product){
        $product->delete();
        return redirect()->route('product.index');
    }
}
