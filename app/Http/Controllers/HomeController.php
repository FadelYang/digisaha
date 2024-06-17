<?php

namespace App\Http\Controllers;

use App\DataTables\ProductRegistrationAdminDataTable;
use App\DataTables\ProductRegistrationDataTable;
use App\Interfaces\ProductAndServiceInterface;
use App\Interfaces\UserInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    private $userInterface;
    private $productAndServiceInterface;

    public function __construct(UserInterface $userInterface, ProductAndServiceInterface $productAndServiceInterface)
    {
        $this->middleware('auth');
        $this->userInterface = $userInterface;
        $this->productAndServiceInterface = $productAndServiceInterface;
    }

    public function index(ProductRegistrationDataTable $commonTable, ProductRegistrationAdminDataTable $adminDatatable)
    {
        if (Auth::user()->is_admin == true) {
            $allRegistrationData = $this->productAndServiceInterface->getAllRegistration();
            $dataTable = $adminDatatable;
        } else { 
            $allRegistrationData = $this->productAndServiceInterface->getAllRegistrationByLoggedUser();
            $dataTable = $commonTable;
        }
        

        $loggedUserInformation = $this->userInterface->getLoggedUserInfo();
        $finishRegistrationData = $this->productAndServiceInterface->getFinishRegistration($allRegistrationData);
        $pendingRegistrationData = $this->productAndServiceInterface->getPendingRegistration($allRegistrationData);

        $data  = [
            'userInfo' => $loggedUserInformation,
            'allRegistrationData' => $allRegistrationData,
            'finishRegistrationData' => $finishRegistrationData,
            'pendingRegistrationData' => $pendingRegistrationData,
        ];

        return $dataTable->render('home', $data);
    }
}
