<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index(){
        $categories = Category::withCount('products')->latest()->get(6);

        $product_best_sellers = Product::all()->map(function ($product) {
            $product->discount_percent = ($product->price > 0 && $product->sale_price > 0)
                ? round((($product->price - $product->sale_price) / $product->price) * 100)
                : 0;
            return $product;
        });
        return view('frontend.home.index', compact('categories','product_best_sellers'));
    }
}
