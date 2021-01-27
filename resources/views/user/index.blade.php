@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Data User</h1>
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
                  Tambah Data User
                </button>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline collapsed" role="grid" aria-describedby="example1_info">
                            <thead>
                            <tr role="row">
                                <th>Nama User</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                                <tbody>
                                    @foreach ($data_user as $user)
                                        <tr>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->role}}</td>
                                            <td>
                                                <a href="/user/{{$user->id}}/edit" class="btn btn-block btn-sm bg-gradient-warning">Edit</a>
                                                <a href="/user/{{$user->id}}/delete" class="btn btn-block btn-sm bg-gradient-danger" onclick="return confirm('Yakin ingin dihapus?')">Delete</a>
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
                                            <h4 class="modal-title">Tambah Data User</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/user/create" method="POST">
                                                {{csrf_field()}}
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label for="name">Nama User</label>
                                                        <input name="name" type="text" class="form-control" id="name" placeholder="Masukan Nama User">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input name="email" type="email" class="form-control" id="email" placeholder="Masukan Email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password">Password</label>
                                                        <input name="password" type="password" class="form-control" id="password" placeholder="Masukan password">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="role">Role</label>
                                                        <input name="role" type="text" class="form-control" id="Role" placeholder="Masukan Role">
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
@stop