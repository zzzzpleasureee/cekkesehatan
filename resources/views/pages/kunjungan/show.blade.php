@extends('layouts.app')

@section('content')
    <div class="py-4">
        <h3 class="fw-bold mb-2 pb-2 border-bottom">Detail Kunjungan</h3>

                <a href="{{route('admin.kunjungan.index')}}"
                    class="btn btn-sm btn-secondary mb-2">
                    Kembali
                </a>

            <table class ="table table-striped table-bordered">

            <tr>
                <td>Tanggal</td>
                <td>{{$kunjungan->tanggal}}</td>
            </tr>
            <tr>
                <td>No Pasien</td>
                <td>{{$kunjungan->no_pasien}}</td>
            </tr>
            <tr>
                <td>Nama Pasien</td>
                <td>{{$kunjungan->nama_pasien}}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>{{$kunjungan->jenis_kelamin}}</td>
            </tr>
            <tr>
                <td>Umur</td>
                <td>{{$kunjungan->umur}}</td>
            </tr>
            <tr>
                <td>Rekam Medis</td>
                <td>{{$kunjungan->rekam_medis}}</td>
            </tr>
            <tr>
                <td>Treatment</td>
                <td>{{$kunjungan->treatment}}</td>
            </tr>
            <tr>
                <td>Rujukan</td>
                <td>{{$kunjungan->rujukan}}</td>
            </tr>
            <tr>
                <td>Dokter</td>
                <td>{{$kunjungan->dokter}}</td>
            </tr>
            
    </div>
@endsection