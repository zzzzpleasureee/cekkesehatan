@extends('layouts.app')

@section('content')
<div class="py-4">
    <h3 class="fw-bold mb-2 pb-2 border-bottom"> Ubah Data Treatment </h3>

        <a href="{{route('admin.treatment.index')}}" class="btn btn-sm btn-secondary mb-2"> Kembali</a>

       <form action="{{ route('admin.treatment.update',$treatment->id)}}" method="POST">
        @csrf
        @method('PUT')

       
        <div class="form-group mb-2">
            <label for="tanggal" class="form-label">Tanggal</label>
                 <input type="date" name="tanggal" id="tanggal"  value="{{ $treatment->tanggal}}" class="form-control"></input>
        </div>

        <div class="form-group mb-2">
            <label for="nama_pasien" class="from-label">Nama Pasien</label>
                 <input type="text" name="nama_pasien" id="nama_pasien" value="{{ $treatment->nama_pasien}}" class="form-control"></input>
         </div>

         <div class="form-group mb-2">
            <label for="berat_badan" class="from-label">Berat Badan</label>
                 <input type="number" name="berat_badan" id="berat_badan" value="{{ $treatment->berat_badan}}" class="form-control"></input>
         </div>


         <div class="form-group mb-2">
            <label for="tinggi_badan" class="form-label">Tinggi Badan</label>
            <input type="number" name="tinggi_badan" id="tinggi_badan" value="{{ $treatment->tinggi_badan}}" class="form-control"></input>

         <div class="form-group mb-2">
            <label for="tekanan_darah" class="from-label">Tekanan Darah</label>
             <input type="text" name="tekanan_darah" id="tekanan_darah" value="{{ $treatment->tekanan_darah}}" class="form-control"></input>
         </div>

         <button type="submit" class="btn btn-primary">
            Simpan
        </button>

        <a href="{{ route('admin.treatment.index')}}" class="btn btn-secondary">
            Batal
        </a>

       </form>
   </div>
@endsection