@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edit User</h1>
@stop

@section('content')
    <div class="card">
        <!-- /.card-header -->
        <div class="card-body">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <form action="/user/{{$user->id}}/update" method="POST">
                            {{csrf_field()}}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="namaUser">Nama User</label>
                                    <input name="name" type="text" class="form-control" id="namaUser" placeholder="Masukan Nama User" value="{{$user->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Masukan Email" value="{{$user->email}}">
                                </div>
                                <div class="form-group">
                                    <label>Role</label>
                                    <textarea name="role" class="form-control" rows="3" placeholder="Masukan Role">{{$user->role    }}</textarea>
                                </div>
                                <button type="submit" class="btn bg-gradient-warning">Update</button>
                            </div>
                        </form>
                            
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