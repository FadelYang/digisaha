<?php

namespace App\Repositories;

use App\Interfaces\UserInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class UserRepository implements UserInterface
{
    public function getLoggedUserInfo()
    {
        try {
            Log::Info('Trying to get logged user info');
            $user = Auth::user();

            return $user;
        } catch (\Throwable $th) {
            Log::error("Failed to get logged user information: " . $th->getMessage());
        }
    }
}