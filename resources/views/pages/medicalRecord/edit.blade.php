@extends('layouts.app')

@section('content')
<div class="py-4">
    <h3 class="fw-bold mb-2 pb-2 border-bottom"> Edit Medical Rekord </h3>

        <a href="{{route('admin.doctor.index')}}" class="btn btn-sm btn-secondary mb-2"> Kembali</a>

       <form action="{{ route('medical_records.update',$medicalRecord->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="no_rm">No RM</label>
            <input type="text" class="form-control" id="no_rm" name="no_rm" value="{{ $medicalRecord->no_rm}}" class="form-control">
        </div>
    
        <div class="form-group">
            <label for="tanggal_periksa">Tanggal Periksa</label>
            <input type="date" class="form-control" id="tanggal_periksa" name="tanggal_periksa" value="{{ $medicalRecord->tanggal_periksa}}" class="form-control">
        </div>
    
        <div class="form-group">
            <label for="keluhan_utama">Keluhan</label>
            <textarea class="form-control" id="keluhan_utama" name="keluhan_utama" class="form-control"> {{ $medicalRecord->keluhan_utama}}</textarea>
        </div>
    
        <div class="form-group">
            <label for="lab">Lab</label>
            <textarea class="form-control" id="lab" name="lab" class="form-control"> {{ $medicalRecord->lab}}</textarea>
        </div>
    
        <div class="form-group">
            <label for="diagnosis">Diagnosis</label>
            <textarea class="form-control" id="diagnosis" name="diagnosis" class="form-control"> {{ $medicalRecord->diagnosis}}</textarea>
        </div>
    
        <div class="form-group">
            <label for="terapi">Terapi</label>
            <textarea class="form-control" id="terapi" name="terapi" class="form-control"> {{ $medicalRecord->terapi}}</textarea>
        </div>

         <button type="submit" class="btn btn-primary">
            Simpan
        </button>

        <a href="{{ route('medical_records.index')}}" class="btn btn-secondary">
            Batal
        </a>

       </form>
   </div>
@endsection