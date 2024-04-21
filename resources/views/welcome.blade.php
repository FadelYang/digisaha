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
        <x-main-component
            title="Landing Page"
            subtitle="Halaman wesbite yang dapat menampilkan profile perusahaan kamu, tampilkan profil usaha dan produk kamu agar dapat dikenal oleh lebih banyak orang di Internet. perluas pasar dengan digitalisasi usaha kamu."
            buttonText="Lihat Produk Landing Page"
            image="{{ asset('images/fachrizal-maulana-vaVdrH0hBg4-unsplash.jpg') }}"
            imageAlt="Digisaha, memudahkan proses digitalisasi usaha anda"
            :isImageRightSide="false"
            :isTitlePriorityDisplay="false"
        ></x-main-component>
        <x-main-component
            title="Sistem Manajemen Usaha"
            subtitle="Halaman wesbite yang dapat menampilkan profile perusahaan kamu, tampilkan profil usaha dan produk kamu agar dapat dikenal oleh lebih banyak orang di Internet. perluas pasar dengan digitalisasi usaha kamu."
            buttonText="Lihat Produk Kami"
            image="{{ asset('images/fachrizal-maulana-vaVdrH0hBg4-unsplash.jpg') }}"
            imageAlt="Digisaha, memudahkan proses digitalisasi usaha anda"
            :isImageRightSide="false"
            :isTitlePriorityDisplay="false"
        ></x-main-component>
        <div class="py-5 bg-dark text-white rounded-1">
            <x-section-title title="Hubungi kami" subtitle="Hubungi kami untuk konsultasi lebih lanjut"></x-section-title>
            <div class="text-center">
                <button class="btn btn-primary">Hubungi kami</button>
            </div>
        </div>
    </div>
@endsection
