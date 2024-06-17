<?php

namespace App\Repositories;

use App\Interfaces\ProductAndServiceInterface;
use App\Models\ProductRegistration;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProductAndServiceRepository implements ProductAndServiceInterface
{
    public function createRegistration(array $data)
    {
        DB::beginTransaction();
        try {
            Log::info('Attempting to create product registration');
            ProductRegistration::create($data);

            DB::commit();
            return [
                'redirectTo' => 'home',
                'status' => 'success',
                'message' => 'Sukses mendaftarkan usaha dan memesan website'
            ];
        } catch (\Throwable $th) {
            DB::rollBack();

            Log::error('Failed to register business and order website: ' . $th->getMessage());

            return [
                'redirectTo' => 'product-and-service.register-page',
                'status' => 'danger',
                'message' => 'Gagal mendaftarkan usaha dan memesan website'
            ];
        }
    }

    public function getAllRegistration()
    {
        try {
            Log::info('Attempting to get all registration data');
            $registrationData = ProductRegistration::all();

            return $registrationData;
        } catch (\Throwable $th) {
            Log::error('Failed to get all registration data: ' . $th->getMessage());
        }
    }

    public function getAllRegistrationByLoggedUser()
    {
        try {
            Log::info('Attempting to get all registration data');
            $registrationData = ProductRegistration::where("registrant_id", Auth::user()->id)->get();

            return $registrationData;
        } catch (\Throwable $th) {
            Log::error('Failed to get all registration data: ' . $th->getMessage());
        }
    }

    public function getFinishRegistration($registrationData)
    {
        try {
            Log::info('Attempting to get finished registration data');
            $finishedRegistrationData = $registrationData->where("status", true);

            return $finishedRegistrationData;
        } catch (\Throwable $th) {
            Log::error('Failed to get finished registration data: ' . $th->getMessage());
        }
    }

    public function getPendingRegistration($registrationData)
    {
        try {
            Log::info('Attempting to get unfinished registration data');
            $unFinishedRegistrationData = $registrationData->where("status", false);

            return $unFinishedRegistrationData;
        } catch (\Throwable $th) {
            Log::error('Failed to get unfinished registration data: ' . $th->getMessage());
        }  
    }
}
