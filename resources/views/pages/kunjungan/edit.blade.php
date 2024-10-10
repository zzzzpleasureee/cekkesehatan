@extends('layouts.app')

@section('content')
<div class="py-4">
    <h3 class="fw-bold mb-2 pb-2 border-bottom"> Ubah Data Kunjungan </h3>

        <a href="{{route('admin.kunjungan.index')}}" class="btn btn-sm btn-secondary mb-2"> Kembali</a>

       <form action="{{ route('admin.kunjungan.update',$kunjungan->id)}}" method="POST">
        @csrf
        @method('PUT')

       
        <div class="form-group mb-2">
            <label for="tanggal" class="form-label">Tanggal</label>
                 <input type="date" name="tanggal" id="tanggal"  value="{{ $kunjungan->tanggal}}" class="form-control"></input>
         </div>
        <div class="form-group mb-2">
            <label for="no_pasien" class="from-label">No Pasien</label>
             <input type="number" name="no_pasien" id="no_pasien"  value="{{ $kunjungan->no_pasien}}" class="form-control"></input>
         </div>

        <div class="form-group mb-2">
            <label for="nama_pasien" class="from-label">Nama Pasien</label>
                 <input type="text" name="nama_pasien" id="nama_pasien" value="{{ $kunjungan->nama_pasien}}" class="form-control"></input>
         </div>

         <div class="form-group mb-2">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin<span class="text-danger">*</span></label>
            <div class="form-check">
                <input type="radio" name="jenis_kelamin" id="L" value="L" class="form-check-input" {{$kunjungan->jenis_kelamin == 'L' ? 'checked' : '' }}></input>
                <label for="L" class="form-check-label">Laki-Laki</label>

            </div>

            <div class="form-check">
                <input type="radio" name="jenis_kelamin" id="P" value="P" class="form-check-input" {{$kunjungan->jenis_kelamin == 'P' ? 'checked' : '' }}></input>
                <label for="P" class="form-check-label">Perempuan</label>

            </div>
         </div>

         <div class="form-group mb-2">
            <label for="tempat_lahir" class="from-label">Tempat Lahir</label>
                 <input type="text" name="tempat_lahir" id="tempat_lahir" value="{{ $kunjungan->tempat_lahir}}" class="form-control"></input>
         </div>


         <div class="form-group mb-2">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>

         <div class="form-group mb-2">
            <label for="umur" class="from-label">Umur</label>
             <input type="number" name="umur" id="umur" value="{{ $kunjungan->umur}}" class="form-control"></input>
         </div>

         <div class="form-group mb-2">
            <label for="rekam_medis" class="from-label">Alamat</label>
            <textarea name="rekam_medis" id="rekam_medis"  class="form-control"> {{ $kunjungan->rekam_medis}}</textarea>
         </div>

         <div class="form-group mb-2">
            <label for="treatment" class="from-label">Treatment</label>
                 <input type="text" name="treatment" id="treatment" value="{{ $kunjungan->treatment}}" class="form-control"></input>
         </div>

         <div class="form-group mb-2">
            <label for="rujukan" class="from-label">Rujukan</label>
                 <input type="text" name="rujukan" id="rujukan" value="{{ $kunjungan->rujukan}}" class="form-control"></input>
         </div>

         <div class="form-group mb-2">
            <label for="dokter" class="from-label">Dokter</label>
                 <input type="text" name="dokter" id="dokter" value="{{ $kunjungan->dokter}}" class="form-control"></input>
         </div>


         <button type="submit" class="btn btn-primary">
            Simpan
        </button>

        <a href="{{ route('admin.kunjungan.index')}}" class="btn btn-secondary">
            Batal
        </a>

       </form>
   </div>
@endsection