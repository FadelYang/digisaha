<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;

class ProductRegistration extends Model
{
    use HasFactory;

    protected $fillable = [
        'registrant_id',
        'company_owner',
        'company_email',
        'company_phone',
        'company_address',
        'company_business_sector',
        'company_business_sector_detail',
        'num_of_employees',
        'monthly_income',
    ];

    protected static function booted()
    {
        static::creating(function ($model) {
            $model->registrant_id = Auth::id();
        });
    }

    public function registrant(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
