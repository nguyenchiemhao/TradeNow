<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class HomePageController extends Controller
{
  public function index()
  {

    $allProducts = Product::where([
      ['is_checked', Product::IS_CENSORED],
      ['active', Product::ACTIVE],
    ])->get()->count();

    $hotDealProduct = Product::where([
      ['is_checked', Product::IS_CENSORED],
      ['active', Product::ACTIVE],
    ])
      ->inRandomOrder()
      ->simplePaginate(6);

    $randomProducts = Product::where([
      ['is_checked', Product::IS_CENSORED],
      ['active', Product::ACTIVE],
    ])
      ->inRandomOrder()
      ->simplePaginate(6);
    return view('clients.homepage', compact('hotDealProduct', 'randomProducts'));
  }

  public function fulltext(Request $request)
  {

    $category_id = $request->category_id;
    $search = $request->search;

    $products = null;

    if ($category_id != 0) {
      $products = Product::search($search)->where('category_id', $category_id)->get();
    } else {
      $products = Product::search($search)->get();
    }
    return view('clients.products.search', compact('products'));
  }
}
