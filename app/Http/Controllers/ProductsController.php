<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
	
	public function search(Request $request){
		$search = $request->input('search');
		$products = Product::query()
			->where('title', 'LIKE', "%{$search}%")
			->orWhere('language', 'LIKE', "%{$search}%")
			->get();
		return view('search', compact('products'));
	}
    
}
