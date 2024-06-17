<?php

namespace App\Http\Controllers;

use App\Interfaces\UserInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $userInterface;

    public function __construct(UserInterface $userInterface)
    {
        $this->middleware('auth');
        $this->userInterface = $userInterface;
    }

    public function index()
    {
        $loggedUserInformation = $this->userInterface->getLoggedUserInfo();

        return view('home')->with([
            'userInfo' => $loggedUserInformation
        ]);
    }
}
