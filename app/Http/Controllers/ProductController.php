<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {         
        return view('products.index');
    }

    public function create()
    {
        return view('products.create');
    }

    public function store()
    {
        return to_route('products.index');
    }

    public function show()
    {     
        return view('products.show');
    }

    public function edit()
    {
        return view('products.edit');
    }

    public function update()
    {
        return to_route('products.index');
    }

    public function destroy($postId)
    {
        return to_route('products.index');
    }
}
