<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;

class CategoriesController extends Controller
{
    public function indexAction()
    {
        $categories = Categories::latest()->get();
        
        return view('categories.index', compact('categories'));
    }

    public function detailAction(Categories $category)
    {        
        return view('categories.detail', compact('category'));
    }
}
