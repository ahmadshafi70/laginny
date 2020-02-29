<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsCategoryController extends Controller
{
    public function index () {

    	return view('admin.ProductsCategory.AddProCategory');
    }

    public function showcategory () {

    	return view('admin.ProductsCategory.AddProCategory');
    }
}

