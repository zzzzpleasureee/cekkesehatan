@extends('layouts.app')

@section('content')
    <div class="py-4">
        <h3 class="fw-bold mb-2 pb-2 border-bottom">Detail Rujukan Pasien</h3>

                <a href="{{route('admin.rujukan.index')}}"
                    class="btn btn-sm btn-secondary mb-2">
                    Kembali
                </a>

            <table class ="table table-striped table-bordered">

            <tr>
                <td>Rekam Medis</td>
                <td>{{$rujukan->rekam_medis}}</td>
            </tr>
            <tr>
                <td>Dokter</td>
                <td>{{$rujukan->dokter}}</td>
            </tr>
            <tr>
                <td>Nama Pasien</td>
                <td>{{$rujukan->nama_pasien}}</td>
            </tr>
            <tr>
                <td>Rumah Sakit</td>
                <td>{{$rujukan->rumah_sakit}}</td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>{{$rujukan->tanggal}}</td>
            </tr>
            
    </div>
@endsection