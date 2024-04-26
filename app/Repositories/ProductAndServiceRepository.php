<?php

namespace App\Repositories;

use App\Interfaces\ProductAndServiceInterface;
use App\Models\ProductRegistration;

class ProductAndServiceRepository implements ProductAndServiceInterface
{
    public function createRegistration(array $data)
    {
        ProductRegistration::create($data);
    }
}
