@extends('layouts.app')

@section('content')
<div class="py-4">
    <h3 class="fw-bold mb-2 pb-2 border-bottom"> Ubah Dokter </h3>

        <a href="{{route('admin.doctor.index')}}" class="btn btn-sm btn-secondary mb-2"> Kembali</a>

       <form action="{{ route('admin.doctor.update',$doctor->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-2">
            <label for="name" class="from-label">Nama</label>
             <input type="text" name="name" id="name" value="{{ $doctor->name}}" class="form-control"></input>
         </div>

         <button type="submit" class="btn btn-primary">
            Simpan
        </button>

        <a href="{{ route('admin.doctor.index')}}" class="btn btn-secondary">
            Batal
        </a>

       </form>
   </div>
@endsection