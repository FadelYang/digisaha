<?php

namespace App\Repositories;

use App\Interfaces\ProductAndServiceInterface;
use App\Models\ProductRegistration;
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
}
