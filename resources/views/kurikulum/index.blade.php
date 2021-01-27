@extends('adminlte::page')

@section('title', 'Kurikulum')

@section('content_header')
    <h1>Data Kurikulum</h1>
@stop

@section('content')
    <div class="card">
        <!-- /.card-header -->
        <div class="card-body">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <button type="button" class="btn btn-sm bg-gradient-primary float-right" data-toggle="modal" data-target="#exampleModal">
                        Tambah Data Kurikulum
                        </button>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline collapsed" role="grid" aria-describedby="example1_info">
                            <thead>
                            <tr role="row">
                                <th>Nama Kurikulum</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                                <tbody>
                                    @foreach ($data_kurikulum as $kurikulum)
                                        <tr>
                                            <td>{{$kurikulum->nama_kurikulum}}</td>
                                            <td>
                                                <a href="/kurikulum/{{$kurikulum->id}}/edit" class="btn btn-sm bg-gradient-warning">Edit</a>
                                                <a href="/kurikulum/{{$kurikulum->id}}/delete" class="btn btn-sm bg-gradient-danger" onclick="return confirm('Yakin ingin dihapus?')">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            <tfoot>
                            </tfoot>
                        </table>
                        <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Tambah Data Kurikulum</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/kurikulum/create" method="POST">
                                                {{csrf_field()}}
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label for="namaKurikulum">Nama Kurikulum</label>
                                                        <input name="nama_kurikulum" type="text" class="form-control" id="namaKurikulum" placeholder="Masukan Nama Kurikulum">
                                                    </div>

                                                </div>
                                                <!-- /.card-body -->
                                                <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                            </form>
                                        </div>
                                        
                                        <!-- /.modal-content -->
                                </div>
                            </div>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop


@section('js')
{{-- <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example1').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script> --}}
@stop
