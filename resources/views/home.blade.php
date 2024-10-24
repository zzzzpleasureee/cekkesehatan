@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-title mb-3">
            <h3>
                <span class="bi bi-grid-fill"></span>
                Menu Utama
            </h3>
    </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <h4>
                            {{ __('Selamat Datang Sebagai Admin') }}
                        </h4>
                        <img src="{{ asset('/images/gambar/cek.png') }}" class="img-fluid" alt="gambar">
</div>

@endsection
