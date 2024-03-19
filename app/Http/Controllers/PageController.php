<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

use App\Models\Product;

class PageController extends Controller
{
  public function index()
  {
    $featured_products = Product::where('featured', 1)->orderBy('price')->limit(5)->get();
    $categories = Category::all();
    return view('home', compact('featured_products', "categories"));
  }

  public function show(Product $product)
  {
    $categories = Category::all();
    return view("admin.events.show", compact("event", "tags"));
  }
}
