<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    public function index(): View
    {
        return view('index');
    }

    public function categories(): View
    {
        return view('categories', );
    }

    public function category(string $category): View
    {
        return view('category', compact('category'));
    }

    public function product(?string $product = null): View
    {
        return view('product', ['product' => $product]);
    }

}
