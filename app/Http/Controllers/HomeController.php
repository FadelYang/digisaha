<?php

namespace App\Http\Controllers;

use App\DataTables\ProductRegistrationDataTable;
use App\Interfaces\ProductAndServiceInterface;
use App\Interfaces\UserInterface;
use Illuminate\Http\Request;

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

    public function index(ProductRegistrationDataTable $dataTable)
    {
        $loggedUserInformation = $this->userInterface->getLoggedUserInfo();
        $allRegistrationData = $this->productAndServiceInterface->getAllRegistrationByLoggedUser();
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
