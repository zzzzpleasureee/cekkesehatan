@extends('layouts.app')

@section('content')
<div class="page-heading"> 
    <div class="page-title mb-3">
        <h3>
            <span class="bi bi-building"></span>
            Kunjungan Pasien
        </h3>
    </div>

    <section class="section">
        <div class="card">
            <div class="crad-body">
                <form action="{{ route('admin.kunjungan.store')}}" method="POST">
                    @csrf
                    <div class="form-group mb-2">
                        <label for="tanggal" class="from-label">Tanggal<span class="text-danger"></span></label>
                            <input type="date" name="tanggal" id="tanggal" value="{{ old('tanggal')}}" class="form-control @error('tanggal') is-invalid @enderror"></input>
                            
                            @error('tanggal')
                            <div class="invalid-feedback d-block">{{ $message }} </div>
                        @enderror 
                    </div>

                    <div class="form-group mb-2">
                        <label for="no_pasien" class="from-label">No Pasien</label>
                            <input type="text" name="no_pasien" id="no_pasien" class="form-control @error('no_pasien') is-invalid @enderror"></input>

                        @error('no_pasien')
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
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin<span class="text-danger">*</span></label>
                        <div class="form-check">
                            <input type="radio" name="jenis_kelamin" id="L" value="L" class="form-check-input">
                            <label for="L" class="form-check-label">Laki-Laki</label>
                        </div>
                    
                        <div class="form-check">
                            <input type="radio" name="jenis_kelamin" id="P" value="P" class="form-check-input">
                            <label for="P" class="form-check-label">Perempuan</label>
                        </div>

                        @error('jenis_kelamin')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                     </div>
                        
                    <div class="form-group mb-2">
                        <label for="umur" class="from-label">Umur</label>
                            <input type="number" name="umur" id="umur" class="form-control @error('umur') is-invalid @enderror"></input>

                        @error('umur')
                        <div class="invalid-feedback d-block">{{ $message }} </div>
                        @enderror 
                    </div>

                    <div class="form-group mb-2">
                        <label for="rekam_medis" class="from-label">Rekam Medis</label>
                            <input type="text" name="rekam_medis" id="rekam_medis" class="form-control @error('rekam_medis') is-invalid @enderror"></input>

                        @error('rekam_medis')
                        <div class="invalid-feedback d-block">{{ $message }} </div>
                        @enderror 
                    </div>

                    <div class="form-group mb-2">
                        <label for="treatment" class="from-label">Treatment</label>
                            <input type="text" name="treatment" id="treatment" class="form-control @error('treatment') is-invalid @enderror"></input>

                        @error('treatment')
                        <div class="invalid-feedback d-block">{{ $message }} </div>
                        @enderror 
                    </div>

                    <div class="form-group mb-2">
                        <label for="rujukan" class="from-label">Rujukan</label>
                            <input type="text" name="rujukan" id="rujukan" class="form-control @error('rujukan') is-invalid @enderror"></input>

                        @error('rujukan')
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


                    
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('admin.kunjungan.index')}}" class="btn btn-secondary">Batal</a>
        </form>
        </div>
     </div>
    </section>
    
</div>
@endsection