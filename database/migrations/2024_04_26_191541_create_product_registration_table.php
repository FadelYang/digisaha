<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_registrations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('registrant_id');
            $table->string('company_owner');
            $table->string('company_email');
            $table->string('company_phone');
            $table->text('company_address');
            $table->string('company_business_sector');
            $table->string('company_business_sector_detail');
            $table->integer('num_of_employees');
            $table->text('monthly_income');
            $table->boolean('status');
            $table->boolean('isCancel');

            $table->foreign('registrant_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_registration');
    }
};
