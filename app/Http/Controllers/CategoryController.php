<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category.show');
    }

    public function show($category)
    {
        return view('category.show', compact('category'));
    }
}
