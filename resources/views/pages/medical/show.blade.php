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
                    <td><striong>#{{$medical->id}}</strong></td>
                </tr>
            <tr>
                <td> No RM</td>
                <td>{{$medical->no_rm}}</td>
            </tr>
            <tr>
                <td>Tanggal Periksa </td>
                <td>{{$medical->tanggal_periksa}}</td>
            </tr>
            <tr>
                <td>Keluhan</td>
                <td>{{$medical->note}}</td>
            </tr>
            <tr>
                <td>Lab</td>
                <td>{{$medical->note}}</td>
            </tr>
            <tr>
                <td>Diagnosis</td>
                <td>{{$medical->note}}</td>
            </tr>
            <tr>
                <td>Created At</td>
                <td>{{Carbon\Carbon::parse($medical->created_at)->isoFormat('DD MMMM Y HH:mm') }}</td>
            </tr>
            <tr>
                <td>Update At</td>
                <td>{{Carbon\Carbon::parse($medical->Update_at)->isoFormat('DD MMMM Y HH:mm') }}</td>
            </tr>
            </table>
                </div>
            </div>
        </div>
     </section>
     <td>
    <a href="{{route('admin.medical.index')}}"class="btn btn-sm btn-secondary mb-2">Kembali</a>
     </td>
    </div>
@endsection