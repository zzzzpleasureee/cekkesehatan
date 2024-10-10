@extends('layouts.app')

@section('content')
<div class="page-heading">
    <div class="page-title mb-3">
        <h3>
            <span class="bi bi-people"></span>
            Pasient Daftar Online
        </h3>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-body">
                <table id="datatable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pasien</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($patients as $item)
                            <tr>
                                <td>{{ $item->id}}</td>
                                <td>{{ $item->name}}</td>
                                <td>{{ $item->tempat_lahir}}</td>
                                <td>{{ $item->tanggal_lahir}}</td>
                                    <td>
                                        <a href="{{ route('admin.patient.show', $item->id) }}" class="btn btn-outline-secondary btn-sn">
                                        <span class="bi bi-eye">Show</span>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm me-1" onclick="handleDestory(`{{ route('admin.patient.destroy', $item->id) }}`)">
                                        <span class="bi bi-trash">Hapus</span>
                                        </a>
                                    </td>
                             </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

<form action="" id="form-delete" method="POST">
    @csrf
    @method('DELETE')
</form>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('/vendors/simple-datatables/style.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('/vendors/simple-datatables/simple-datatables.js') }}"></script>
<script>
    // Simple Datatable
    let datatable = document.querySelector('#datatable');
     new simpleDatatables.DataTable(datatable);
</script>

<script src="https://cdjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<script type="text/javascript">
    function handleDestory(url) {
        swal({
            title: "Apakah anda yakin?",
            text: "Setelah menghapus, anda tidak akan dapat memulihkannya kembali!",
            icon: "warning",
            buttons: ['Batal', 'Ya, Hapus!'],
            dangerMode: true,
        }).then ((confirmed)=> {
            if(confirmed) {
                $('#form-delete').attr('action', url);
                $('#form-delete').submit();
            }
        });
    }
</script>
@endpush
