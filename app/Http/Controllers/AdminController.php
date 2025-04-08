<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Product;
use App\Http\Controllers\categories;
use App\Models\Product as ModelsProduct;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function products()
    {
        // Haal alle producten op
        $products = ModelsProduct::with('categories')->get();

        // Stuur de producten naar de view
        return view('admin.products', compact('products'));
    }
    public function categories()
    {
        return view('admin.categories');
    }

    public function tickets()
    {
        return view('admin.tickets');
    }
}
