@extends('layouts.app')

@section('content')
<div class="py-4">
    <h3 class="fw-bold mb-2 pb-2 border-bottom"> Ubah Data Rujukan </h3>

        <a href="{{route('admin.rujukan.index')}}" class="btn btn-sm btn-secondary mb-2"> Kembali</a>

       <form action="{{ route('admin.rujukan.update',$rujukan->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-2">
            <label for="rekam_medis" class="from-label">Rekam Medis</label>
                 <input type="text" name="rekam_medis" id="rekam_medis" value="{{ $rujukan->rekam_medis}}" class="form-control"></input>
         </div>
         
         <div class="form-group mb-2">
            <label for="dokter" class="from-label">Dokter</label>
                 <input type="text" name="dokter" id="dokter" value="{{ $rujukan->dokter}}" class="form-control"></input>
         </div>

         <div class="form-group mb-2">
            <label for="nama_pasien" class="from-label">Nama Pasien</label>
                 <input type="text" name="nama_pasien" id="nama_pasien" value="{{ $rujukan->nama_pasien}}" class="form-control"></input>
         </div>

         
         <div class="form-group mb-2">
            <label for="rumah_sakit" class="from-label">Rumah Sakit</label>
            <textarea name="rumah_sakit" id="rumah_sakit"  class="form-control"> {{ $rujukan->rumah_sakit}}</textarea>
         </div>


        <div class="form-group mb-2">
            <label for="tanggal" class="form-label">Tanggal</label>
                 <input type="date" name="tanggal" id="tanggal"  value="{{ $rujukan->tanggal}}" class="form-control"></input>
         </div>

         <button type="submit" class="btn btn-primary">
            Simpan
        </button>

        <a href="{{ route('admin.rujukan.index')}}" class="btn btn-secondary">
            Batal
        </a>

       </form>
   </div>
@endsection