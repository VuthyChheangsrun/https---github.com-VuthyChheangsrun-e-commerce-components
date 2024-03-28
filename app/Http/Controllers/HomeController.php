<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    //
    public function renderHome () {
        $category =  Category::all();
        $product = Product::all();

        return view('home', compact('category', 'product'));
    }
}
