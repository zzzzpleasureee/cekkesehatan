<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Patient Form</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css')}}">
    
    <link rel="stylesheet" href="{{ asset('/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{ asset('/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/app.css')}}">

    <link rel="shortcut icon" href="{{ asset('/images/favicon.svg')}}" type="image/x-icon">

</head>
<body>

    <div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card shadow">
                    <div class="card-header">
                        PATIENT FORM
                    </div>
                    <div class="card-body">
                        <p>Silahkan masukan data kamu sebagai pasien, pada form dibawah:</p>

                        @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>  
                        @endif
                            

                        <form action="{{ route('form.store') }}" method="POST">
                            @csrf

                            <div class="form group mb-3">
                                <label for="name">Nama Pasien</label>
                                <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror">
                        
                                @error('name')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-2">
                                <label for="tempat_lahir" class="from-label">Tempat Lahir</label>
                                <textarea name="tempat_lahir" id="tempat_lahir" class="form-control"></textarea>

                                @error('tempat_lahir')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                             </div>

                            <div class="form-group mb-2">
                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                     <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control">

                                     @error('tanggal_lahir')
                                     <div class="invalid-feedback d-block">
                                         {{ $message }}
                                     </div>
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
                                <label for="alamat" class="from-label">Alamat</label>
                                <textarea name="alamat" id="alamat" class="form-control"></textarea>

                                @error('alamat')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                             </div>

                             <div class="form-group mb-2">
                                <label for="no_kartu_bpjs" class="from-label">No Kartu BPJS<span class="text-danger">*</span></label>
                                <input type="number" name="no_kartu_bpjs" id="no_kartu_bpjs" value="{{ old('no_kartu_bpjs')}}" class="form-control @error('no_kartu_bpjs') is-invalid @enderror"></input>
                        
                                @error('no_kartu_bpjs')
                                  <div class="invalid-feedback d-block">{{ $message }} </div>
                                @enderror 
                            </div>

                            <div class="form group mb-3">
                                <label for="no_hp">Nomor HP</label>
                                <input type="text" name="no_hp" id="no_hp" value="{{ old('no_hp') }}" class="form-control @error('no_hp') is-invalid @enderror">
                        
                                @error('no_hp')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="dokter">Doctor</label>
                                        <select name="dokter" class="form-select @error ('dokter') is-invalid @enderror" >
                        
                                            @foreach($doctors as $item)
                                                <option value="{{ $item->id }}" @if(old('dokter') == $item->id) selected @endif>
                                                    {{ $item->name }}
                                                </option>
                                            @endforeach
                                        </select>
                        
                                        @error('dokter')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>                   
                                        @enderror
                                    </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form group mb-3">
                                    <label for="golongan_darah">Golongan Darah</label>
                                    <input type="text" name="golongan_darah" id="golongan_darah" value="{{ old('golongan_darah') }}" class="form-control @error('golongan_darah') is-invalid @enderror"/>
                        
                                    @error('golongan_darah')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">
                                     Simpan <span class="bi bi-send"></span>
                                </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{ asset('/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('/js/mazer.js')}}"></script>

</body>
</html>