@extends('layouts.app')

@section('content')
<div class="page-heading"> 
    <div class="page-title mb-3">
        <h3>
            <span class="bi bi-briefcase"></span>
            Rujukan Pasien
        </h3>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.rujukan.store')}}" method="POST">
                    @csrf

                    <div class="form-group mb-2">
                        <label for="rekam_medis" class="from-label">Rekam Medis</label>
                            <input type="text" name="rekam_medis" id="rekam_medis" class="form-control @error('rekam_medis') is-invalid @enderror"></input>

                        @error('rekam_medis')
                        <div class="invalid-feedback d-block">{{ $message }} </div>
                        @enderror 
                    </div>

                    <div class="form-group mb-2">
                        <label for="dokter" class="from-label">Dokter</label>
                            <input type="text" name="dokter" id="dokter" class="form-control @error('dokter') is-invalid @enderror"></input>

                        @error('dokter')
                        <div class="invalid-feedback d-block">{{ $message }} </div>
                        @enderror 
                    </div>

                    <div class="form-group mb-2">
                        <label for="nama_pasien" class="from-label">Nama Pasien</label>
                            <input type="text" name="nama_pasien" id="nama_pasien" class="form-control @error('nama_pasien') is-invalid @enderror"></input>

                        @error('nama_pasien')
                        <div class="invalid-feedback d-block">{{ $message }} </div>
                        @enderror 
                    </div>

                    <div class="form-group mb-2">
                        <label for="rumah_sakit" class="from-label">Rumah Sakit</label>
                            <input type="text" name="rumah_sakit" id="rumah_sakit" class="form-control @error('rumah_sakit') is-invalid @enderror"></input>

                        @error('rumah_sakit')
                        <div class="invalid-feedback d-block">{{ $message }} </div>
                        @enderror 
                    </div>

                    <div class="form-group mb-2">
                        <label for="tanggal" class="from-label">Tanggal<span class="text-danger"></span></label>
                            <input type="date" name="tanggal" id="tanggal" value="{{ old('tanggal')}}" class="form-control @error('tanggal') is-invalid @enderror"></input>
                            
                            @error('tanggal')
                            <div class="invalid-feedback d-block">{{ $message }} </div>
                        @enderror 
                    </div>
                  

                    
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('admin.rujukan.index')}}" class="btn btn-secondary">Batal</a>
        </form>
        </div>
     </div>
    </section>
    
</div>
@endsection