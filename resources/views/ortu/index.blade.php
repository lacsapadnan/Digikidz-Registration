@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Data Orangtua</h1>
@stop

@section('content')
    <div class="card">
        <!-- /.card-header -->
        <div class="card-body">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="dt-buttons btn-group flex-wrap">
                        
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <button type="button" class="btn btn-sm bg-gradient-primary float-right" data-toggle="modal" data-target="#exampleModal">
                  Tambah Data Orangtua
                </button>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline collapsed" role="grid" aria-describedby="example1_info">
                            <thead>
                            <tr role="row">
                                <th>Nama Orangtua</th>
                                <th>Nama Murid</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th>No. Telp</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                                <tbody>
                                    @foreach ($data_ortu as $ortu)
                                        <tr>
                                            <td>{{$ortu->nama_ortu}}</td>
                                            <td>{{$ortu->nama_murid}}</td>
                                            <td>{{$ortu->alamat}}</td>
                                            <td>{{$ortu->email}}</td>
                                            <td>{{$ortu->no_telp}}</td>
                                            <td>
                                                <a href="/ortu/{{$ortu->id}}/edit" class="btn btn-block btn-sm bg-gradient-warning">Edit</a>
                                                <a href="/ortu/{{$ortu->id}}/delete" class="btn btn-block btn-sm bg-gradient-danger" onclick="return confirm('Yakin ingin dihapus?')">Delete</a>
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
                                            <h4 class="modal-title">Tambah Data Murid</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/ortu/create" method="POST">
                                                {{csrf_field()}}
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label for="namaOrangtua">Nama Orangtua</label>
                                                        <input name="nama_ortu" type="text" class="form-control" id="namaOrangtua" placeholder="Masukan Nama Orangtua">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="namaMurid">Nama Murid</label>
                                                        <input name="nama_murid" type="text" class="form-control" id="namaMurid" placeholder="Masukan Nama Murid">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Alamat</label>
                                                        <textarea name="alamat" class="form-control" rows="3" placeholder="Masukan Alamat"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input name="email" type="email" class="form-control" id="email" placeholder="Masukan Email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="noTelp">No. Telp</label>
                                                        <input name="no_telp" type="text" class="form-control" id="noTelp" placeholder="Masukan No. Telp">
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
<script>
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
  </script>
@stop