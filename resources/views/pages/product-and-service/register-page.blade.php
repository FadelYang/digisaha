@extends('layouts.app')

@section('content')
    <div class="container">
        <x-header-breadcrumb pageTitle="Register To A Product"></x-header-breadcrumb>
        <section>
            <p>Mohon baca <a href="#">ketentuan dan syarat</a> sebelum mengisi form ini</p>

            <form action="#" class="row">
                <x-form-input
                    classAttribute="col-md-6"
                    inputName="company_owner"
                    inputType="text"
                    inputText="Nama Lengkap Pemilik"
                    placeholder="Masukkan nama lengkap pemilik usaha..."
                ></x-form-input>
                <x-form-input
                    classAttribute="col-md-6"
                    inputName="company_name"
                    inputType="text"
                    inputText="Nama Tempat Usaha"
                    placeholder="Masukkan naman tempat usaha anda..."
                ></x-form-input>
                <x-form-input
                    classAttribute="col-md-6"
                    inputName="company_email"
                    inputType="email"
                    inputText="Alamat email"
                    placeholder="contoh: akunaku@gmail.com"
                ></x-form-input>
                <x-form-input
                    classAttribute="col-md-6"
                    inputName="company_phone"
                    inputType="text"
                    inputText="Nomor Telepon"
                    placeholder="Contoh: 081241244123"
                ></x-form-input>
                <x-form-textarea
                    classAttribute="col-md-12"
                    inputName="company_address"
                    inputType="text"
                    inputText="Alamat Tempat Usaha"
                    placeholder="Masukkan alamat tempat usaha anda..."
                ></x-form-textarea>
                <fieldset class="col-md-3">
                    <label class="form-label fw-bolder">Bidang usaha</label>
                    <div class="">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="company_business_sector" id="company_business_sector1" value="Kuliner" checked>
                        <label class="form-check-label" for="company_business_sector1">
                            Kuliner
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="company_business_sector" id="company_business_sector2" value="Jasa">
                        <label class="form-check-label" for="company_business_sector2">
                            Jasa
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="company_business_sector" id="company_business_sector2" value="Retail">
                        <label class="form-check-label" for="company_business_sector2">
                            Retail
                        </label>
                      </div>
                    </div>
                </fieldset>
                <x-form-input
                    classAttribute="col-md-3"
                    inputName="company_business_sector_detail"
                    inputType="text"
                    inputText="Detail bidang usaha"
                    placeholder="contoh: Jasa penyewaan kendaraan"
                ></x-form-input>
                <x-form-input
                    classAttribute="col-md-3"
                    inputName="number_of_employees"
                    inputType="number"
                    inputText="Jumlah karyawan"
                    placeholder="contoh: 50 (masukkan dalam angka)"
                ></x-form-input>
                <x-form-input
                    classAttribute="col-md-3"
                    inputName="monthly_income"
                    inputType="text"
                    inputText="Omset bulanan"
                    placeholder="contoh: 5000000"
                ></x-form-input>
                <div class="mt-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checklist" required>
                        <label class="form-check-label" for="checklist">
                          Saya sudah membaca <a href="#">Syarat dan ketentuan</a>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Isi Formulir</button>
                </div>
            </form>
        </section>
    </div>
@endsection