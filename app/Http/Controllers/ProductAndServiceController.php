<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductAndServiceController extends Controller
{
    public function index()
    {
        return view('product-and-service');
    }
}
