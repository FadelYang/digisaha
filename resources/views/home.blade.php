@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <x-alert message="{{ session('message') }}" alertType="{{ session('alert-type') }}"></x-alert>
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <div class="row">
            <div class="col-9">
                <div class="row">
                    <div class="col-4">
                        <div class="card bg-primary bg-opacity-50">
                            <div class="card-body row">
                                <div class="col-3 d-flex align-items-center justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                        fill="currentColor" class="bi bi-stack" viewBox="0 0 16 16">
                                        <path
                                            d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.6.6 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.6.6 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.6.6 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535z" />
                                        <path
                                            d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.6.6 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0z" />
                                    </svg>
                                </div>
                                <div class="col-9">
                                    <p class="card-text mb-0"><b>Total Pemesanan Website</b></p>
                                    <p class="card-text">{{ count($allRegistrationData) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card bg-warning bg-opacity-50">
                            <div class="card-body row">
                                <div class="col-3 d-flex align-items-center justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                        fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                                    </svg>
                                </div>
                                <div class="col-9">
                                    <p class="card-text mb-0"><b>Total Sedang Diproses</b></p>
                                    <p class="card-text">{{ count($pendingRegistrationData) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card bg-success bg-opacity-50">
                            <div class="card-body row">
                                <div class="col-3 d-flex align-items-center justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0"/>
                                      </svg>
                                </div>
                                <div class="col-9">
                                    <p class="card-text mb-0"><b>Total Website Selesai</b></p>
                                    <p class="card-text">{{ count($finishRegistrationData) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body row">
                        <div class="col-3 d-flex align-items-center justify-content-center">
                            <img src="{{ asset('images/fachrizal-maulana-vaVdrH0hBg4-unsplash.jpg') }}" alt=""
                                class="img-fluid">
                        </div>
                        <div class="col-9">
                            <p class="card-text mb-0"><b>{{ $userInfo->name }}</b></p>
                            <p class="card-text"><b>{{ $userInfo->email }}</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
