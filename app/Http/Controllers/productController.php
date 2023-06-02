<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\features;

class ProductController extends Controller
{
    public function index()
    {
        $productes = Product::all();

        return view('product.index', compact('productes'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $data = $request->only(['name', 'type']);
        Product::create($data);

        return redirect()->route('product.index');
    }
}
