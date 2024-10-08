@extends('layouts.app')

@section('content')
    <div class="py-4">
        <h3 class="fw-bold mb-2 pb-2 border-bottom">Detail Doctor</h3>

                <a href="{{route('admin.doctor.index')}}"
                    class="btn btn-sm btn-secondary mb-2">
                    Kembali
                </a>

            <table class ="table table-striped table-bordered">
            
            <tr>
                <td>Nama</td>
                <td>{{$doctors->name}}</td>
            </tr>
            
    </div>
@endsection