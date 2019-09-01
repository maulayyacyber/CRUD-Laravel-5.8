@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">Posts</div>

                    <div class="card-body">
                            <a href="{{ route('posts.create') }}" class="btn btn-success btn-md">WRITE A POST</a>
                            <div class="table-responsive" style="margin-top: 20px">
                                <table class="table table-bordered table-hover" id="table-data">
                                    <thead>
                                    <tr>
                                        <th style="width: 40%">TITLE POST</th>
                                        <th>URL POST</th>
                                        <th style="width: 15%">AKSI</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            $('#table-data').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('json_posts') }}',
                columns: [
                    {
                        data: 'title',
                        name: 'title',
                    },
                    {
                        data: 'slug',
                        name: 'slug',
                        render: function (data, type, row) {
                            return '<a href="{{ url('/') }}/'+data+'" target="_blank">{{ url('/') }}/'+data+'</a>'
                        }
                    },
                    {
                        data: 'action' ,
                        name : 'action',
                        orderable : true ,
                        searchable: false,
                        className: "text-center"
                    },
                ],
                "language": {
                    "sEmptyTable":   "Tidak ada data yang tersedia pada tabel ini",
                    "sProcessing":   "Sedang memproses...",
                    "sLengthMenu":   "Tampilkan _MENU_ entri",
                    "sZeroRecords":  "Tidak ditemukan data yang sesuai",
                    "sInfo":         "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
                    "sInfoEmpty":    "Menampilkan 0 sampai 0 dari 0 entri",
                    "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
                    "sInfoPostFix":  "",
                    "sSearch":       "Cari:",
                    "sUrl":          "",
                    "oPaginate": {
                        "sFirst":    "Pertama",
                        "sPrevious": "Sebelumnya",
                        "sNext":     "Selanjutnya",
                        "sLast":     "Terakhir"
                    }
                }
            });
        });
    </script>
@endsection
