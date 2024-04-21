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
            :isTitlePriorityDisplay="true"
            >
        </x-main-component>
        <x-section-title title="Tentang Kami" subtitle="Digisaha, bantu digitalkan usaha anda"></x-section-title>
        <x-main-component
            title="Hadir membantu meningkatkan usaha anda"
            subtitle="Digisaha memiliki visi untuk membantu pengusaha untuk meningkatkan usaha mereka, melalui Digitalisasi usaha, kami berharap pengusaha dapat memperluas jangkauan usaha dan meningkatkan pendapatan."
            buttonText="Lihat Produk Kami"
            image="{{ asset('images/fachrizal-maulana-vaVdrH0hBg4-unsplash.jpg') }}"
            imageAlt="Digisaha, memudahkan proses digitalisasi usaha anda"
            :isImageRightSide="false"
            :isTitlePriorityDisplay="false"
        ></x-main-component>
        <x-section-title title="Produk dan Layanan Kami" subtitle="Landing page dan sistem manajemen usahana, bantu operasional perusahaan anda"></x-section-title>
    </div>
@endsection
