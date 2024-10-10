@extends('layouts.app')

@section('content')
    <div class="py-4">
        <h3 class="fw-bold mb-2 pb-2 border-bottom">Detail Treatment</h3>

                <a href="{{route('admin.treatment.index')}}"
                    class="btn btn-sm btn-secondary mb-2">
                    Kembali
                </a>

            <table class ="table table-striped table-bordered">
            <tr>
                <td>Tanggal</td>
                <td>{{$treatment->tanggal}}</td>
            </tr>
            <tr>
                <td>Nama Pasien</td>
                <td>{{$treatment->nama_pasien}}</td>
            </tr>
            <tr>
                <td>Berat Badan </td>
                <td>{{$treatment->berat_badan}}</td>
            </tr>
            <tr>
                <td>Tinggi Badan</td>
                <td>{{$treatment->tinggi_badan}}</td>
            </tr>
            <tr>
                <td>Tekanan Darah</td>
                <td>{{$treatment->tekanan_darah}}</td>
            </tr>
            
    </div>
@endsection