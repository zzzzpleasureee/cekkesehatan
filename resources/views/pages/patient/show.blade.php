@extends('layouts.app')

@section('content')
<div class="page-heading">
    <div class="page-title mb-3">
        <h3>
            <span class="bi bi-building"></span>
            Show - patient
        </h3>
    </div>

     <section class="section">
        <div class="card">  
            <div class="card-body">
                <div class="py-4">
            <table class ="table table-striped table-bordered">
                    <tr>
                        <th>ID</th>
                        <td><striong>#{{$patients->id}}</strong></td>
                    </tr>
                    <tr>
                        <td> Nama Patient</td>
                        <td>{{$patients->name}}</td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>{{$patients->tempat_lahir}}</td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir </td>
                        <td>{{$patients->tanggal_lahir}}</td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>{{$patients->jenis_kelamin}}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>{{$patients->alamat}}</td>
                    </tr>
                    <tr>
                        <td>No Kartu BPJS</td>
                        <td>{{$patients->no_kartu_bpjs}}</td>
                    </tr>
                    <tr>
                        <td>No HP</td>
                        <td>{{$patients->no_hp}}</td>
                    </tr>
                    <tr>
                        <td>Dokter</td>
                        <td>{{$patients->dokter}}</td>
                    </tr>
                    <tr>
                        <td>Golongan Darah</td>
                        <td>{{$patients->golongan_darah}}</td>
                    </tr>

                    <tr>
                        <td>Created At</td>
                        <td>{{Carbon\Carbon::parse($patients->created_at)->isoFormat('DD MMMM Y HH:mm') }}</td>
                    </tr>
                    <tr>
                        <td>Update At</td>
                        <td>{{Carbon\Carbon::parse($patients->Update_at)->isoFormat('DD MMMM Y HH:mm') }}</td>
                    </tr>
            </table>
                </div>
            </div>
        </div>
     </section>
     <td>
    <a href="{{ route('admin.patient.index')}}"class="btn btn-sm btn-secondary mb-2">Kembali</a>
     </td>
    </div>
@endsection