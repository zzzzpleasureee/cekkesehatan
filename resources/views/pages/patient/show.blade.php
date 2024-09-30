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
                    <td><striong>#{{$patient->id}}</strong></td>
                </tr>
            
            <tr>
                <td> Nama Patient</td>
                <td>{{$patient->nama}}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>{{$patient->from}}</td>
            </tr>
            <tr>
                <td>Tanggal Lahir </td>
                <td>{{$patient->phone_number}}</td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>{{$patient->email}}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>{{$patient->note}}</td>
            </tr>
            <tr>
                <td>No Kartu BPJS</td>
                <td>{{$patient->note}}</td>
            </tr>
            <tr>
                <td>No HP</td>
                <td>{{$patient->note}}</td>
            </tr>
            <tr>
                <td>Dokter</td>
                <td>{{$patient->note}}</td>
            </tr>
            <tr>
                <td>Golongan Darah</td>
                <td>{{$patient->note}}</td>
            </tr>

            <tr>
                <td>Created At</td>
                <td>{{Carbon\Carbon::parse($patient->created_at)->isoFormat('DD MMMM Y HH:mm') }}</td>
            </tr>
            <tr>
                <td>Update At</td>
                <td>{{Carbon\Carbon::parse($patient->Update_at)->isoFormat('DD MMMM Y HH:mm') }}</td>
            </tr>
            </table>
                </div>
            </div>
        </div>
     </section>
     <td>
    <a href="{{route('admin.patient.index')}}"class="btn btn-sm btn-secondary mb-2">Kembali</a>
     </td>
    </div>
@endsection