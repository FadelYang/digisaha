@extends('layouts.app')

@section('content')
    @php
        $buttons = [
            'heroContent' => [
                'button1' => [
                    'text' => 'Lihat Selengkapnya',
                    'link' => '#',
                ],
            ],
            'about-us' => [
                'button1' => [
                    'text' => 'Lihat Produk Kami',
                    'link' => '#',
                ],
            ],
            'product-and-service-1' => [
                'button1' => [
                    'text' => 'Lihat Produk Kami',
                    'link' => route('product-and-service'),
                ],
            ],
            'product-and-service-2' => [
                'button1' => [
                    'text' => 'Lihat Produk Kami',
                    'link' => route('product-and-service'),
                ],
            ],
        ];
    @endphp
    <div class="container">
        <x-main-component title="Bantu Digitalkan Usaha Anda"
            subtitle="Pasarkan dan permudah operasional usaha anda dengan website profil perusahaan dan perangkat lunak manajemen usaha"
            :buttons="$buttons['heroContent']"
            image="{{ asset('images/fachrizal-maulana-vaVdrH0hBg4-unsplash.jpg') }}"
            imageAlt="Digisaha, memudahkan proses digitalisasi usaha anda" :isImageRightSide="true" :isTitlePriorityDisplay="true">
        </x-main-component>
        <x-section-title title="Tentang Kami" subtitle="Digisaha, bantu digitalkan usaha anda"></x-section-title>
        <x-main-component
            title="Hadir membantu meningkatkan usaha anda"
            subtitle="Digisaha memiliki visi untuk membantu pengusaha untuk meningkatkan usaha mereka, melalui Digitalisasi usaha, kami berharap pengusaha dapat memperluas jangkauan usaha dan meningkatkan pendapatan."
            :buttons="$buttons['about-us']"
            image="{{ asset('images/fachrizal-maulana-vaVdrH0hBg4-unsplash.jpg') }}"
            imageAlt="Digisaha, memudahkan proses digitalisasi usaha anda"
            :isImageRightSide="false"
            :isTitlePriorityDisplay="false"
        ></x-main-component>
        <x-section-title title="Produk dan Layanan Kami" subtitle="Landing page dan sistem manajemen usahana, bantu operasional perusahaan anda"></x-section-title>
        <x-main-component
            title="Landing Page"
            subtitle="Halaman wesbite yang dapat menampilkan profile perusahaan kamu, tampilkan profil usaha dan produk kamu agar dapat dikenal oleh lebih banyak orang di Internet. perluas pasar dengan digitalisasi usaha kamu."
            :buttons="$buttons['product-and-service-1']"
            image="{{ asset('images/fachrizal-maulana-vaVdrH0hBg4-unsplash.jpg') }}"
            imageAlt="Digisaha, memudahkan proses digitalisasi usaha anda"
            :isImageRightSide="false"
            :isTitlePriorityDisplay="false"
        ></x-main-component>
        <x-main-component
            title="Sistem Manajemen Usaha"
            subtitle="Sistem manajemen usaha yang dapat anda gunakan untuk mengelola usaha anda, mulai dari mengelola aset, pesanan, karyawan, hingga persediaan barang untuk usaha anda."
            :buttons="$buttons['product-and-service-2']"
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
@section('footer')
    @include('components.footer')
@endsection
