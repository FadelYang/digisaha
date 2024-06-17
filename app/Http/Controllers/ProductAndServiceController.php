<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRegistrationRequest;
use App\Interfaces\ProductAndServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductAndServiceController extends Controller
{
    private ProductAndServiceInterface $productAndServiceInterface;

    public function __construct(ProductAndServiceInterface $productAndServiceInterface)
    {
        $this->productAndServiceInterface = $productAndServiceInterface;    
    }

    public function index()
    {
        return view('pages.product-and-service.product-and-service');
    }

    public function getRegisterPage()
    {
        return view('pages.product-and-service.register-page');
    }

    public function createRegistration(CreateProductRegistrationRequest $request)
    {
        // dd($request->validated());
        $data = $request->validated();

        $result = $this->productAndServiceInterface->createRegistration($data);

        return redirect()->route($result['redirectTo'])->with([
            'alert-type' => $result['status'],
            'message' => $result['message']
        ]);
    }
}
