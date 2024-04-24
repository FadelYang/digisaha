@extends('layouts.app')

@section('content')
    @php
        $buttons = [
            'content1' => [
                'button1' =>[
                    'text' => 'Lihat Demo',
                    'link' => 'https://fadelyang.github.io/simple-look-umkm/',
                ],
                'button2' =>[
                    'text' => 'Beli Sekarang',
                    'link' => '#',
                ]
            ],
            'content2' => [
                'button1' =>[
                    'text' => 'Lihat Demo',
                    'link' => '#',
                ],
                'button2' =>[
                    'text' => 'Beli Sekarang',
                    'link' => '#',
                ]
            ],
        ];
    @endphp
    <div class="container">
        <x-header-breadcrumb pageTitle="Produk dan Layanan"></x-header-breadcrumb>
        <x-main-component
            title="Landing Page"
            subtitle="Halaman wesbite yang dapat menampilkan profile perusahaan kamu, tampilkan profil usaha dan produk kamu agar dapat dikenal oleh lebih banyak orang di Internet. perluas pasar dengan digitalisasi usaha kamu."
            :buttons="$buttons['content1']" image="{{ asset('images/fachrizal-maulana-vaVdrH0hBg4-unsplash.jpg') }}"
            image="{{ asset('images/fachrizal-maulana-vaVdrH0hBg4-unsplash.jpg') }}"
            imageAlt="Digisaha, memudahkan proses digitalisasi usaha anda" :isImageRightSide="false"
            :isTitlePriorityDisplay="false"></x-main-component>
        <x-main-component
            title="Sistem Manajemen Usaha"
            subtitle="Sistem manajemen usaha yang dapat anda gunakan untuk mengelola usaha anda, mulai dari mengelola aset, pesanan, karyawan, hingga persediaan barang untuk usaha anda."
            :buttons="$buttons['content2']"
            image="{{ asset('images/fachrizal-maulana-vaVdrH0hBg4-unsplash.jpg') }}"
            imageAlt="Digisaha, memudahkan proses digitalisasi usaha anda"
            :isImageRightSide="false"
            :isTitlePriorityDisplay="false"
        ></x-main-component>
    </div>
@endsection
