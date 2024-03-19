<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

use App\Models\Product;
use Symfony\Component\VarDumper\VarDumper;

class PageController extends Controller
{
  public function index()
  {
    $featured_products = Product::where('featured', 1)->orderBy('price')->limit(5)->get();
    $categories = Category::all();
    return view('home', compact('featured_products', "categories"));
  }

  public function show($id)
  {
    $product = Product::find($id);
    $categories = Category::all();
    return view("show", compact("product", "categories"));
  }
}
