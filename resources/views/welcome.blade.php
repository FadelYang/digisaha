@extends('layouts.app')

@section('content')
    <div class="container">
        <x-main-component
            title="Bantu Digitalkan Usaha Anda"
            subtitle="Pasarkan dan permudah operasional usaha anda dengan website profil perusahaan dan perangkat lunak manajemen usaha"
            buttonText="Lihat Selengkapnya"
            image="{{ asset('images/fachrizal-maulana-vaVdrH0hBg4-unsplash.jpg') }}"
            imageAlt="Digisaha, memudahkan proses digitalisasi usaha anda"
            :isImageRightSide="true"
            >
        </x-main-component>
    </div>
@endsection
