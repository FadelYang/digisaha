<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductAndServiceController extends Controller
{
    public function index()
    {
        return view('pages.product-and-service.product-and-service');
    }

    public function getRegisterPage()
    {
        return view('pages.product-and-service.register-page');
    }
}
