@extends('layouts.app')

@section('content')
<div class="page-heading"> 
    <div class="page-title mb-3">
        <h3>
            <span class="bi bi-building"></span>
            Treatment
        </h3>
    </div>

    <section class="section">
        <div class="card">
            <div class="crad-body">
                <form action="{{ route('admin.treatment.store')}}" method="POST">
                    @csrf
                    <div class="form-group mb-2">
                        <label for="tanggal" class="from-label">Tanggal<span class="text-danger"></span></label>
                            <input type="date" name="tanggal" id="tanggal" value="{{ old('tanggal')}}" class="form-control @error('tanggal') is-invalid @enderror"></input>
                            
                            @error('tanggal')
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
                        <label for="berat_badan" class="from-label">Berat Badan</label>
                            <input type="text" name="berat_badan" id="berat_badan" class="form-control @error('berat_badan') is-invalid @enderror"></input>

                        @error('berat_badan')
                        <div class="invalid-feedback d-block">{{ $message }} </div>
                        @enderror 
                    </div>

                    <div class="form-group mb-2">
                        <label for="tinggi_badan" class="from-label">Tinggi Badan</label>
                            <input type="text" name="tinggi_badan" id="tinggi_badan" class="form-control @error('tinggi_badan') is-invalid @enderror"></input>

                        @error('tinggi_badan')
                        <div class="invalid-feedback d-block">{{ $message }} </div>
                        @enderror 
                    </div>
                        
                    <div class="form-group mb-2">
                        <label for="tekanan_darah" class="from-label">Tekanan Darah</label>
                            <input type="text" name="tekanan_darah" id="tekanan_darah" class="form-control @error('tekanan_darah') is-invalid @enderror"></input>

                        @error('tekanan_darah')
                        <div class="invalid-feedback d-block">{{ $message }} </div>
                        @enderror 
                    </div>
                    
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('admin.treatment.index')}}" class="btn btn-secondary">Batal</a>
        </form>
        </div>
     </div>
    </section>
    
</div>
@endsection