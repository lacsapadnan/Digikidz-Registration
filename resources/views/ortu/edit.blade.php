@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edit Orangtua</h1>
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
                        <form action="/ortu/{{$ortu->id}}/update" method="POST">
                            {{csrf_field()}}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="namaOrangtua">Nama Orangtua</label>
                                    <input name="nama_ortu" type="text" class="form-control" id="namaOrangtua" placeholder="Masukan Nama Orangtua" value="{{$ortu->nama_ortu}}">
                                </div>
                                <div class="form-group">
                                    <label for="namaMurid">Nama Murid</label>
                                    <input name="nama_murid" type="text" class="form-control" id="namaMurid" placeholder="Masukan Nama Murid" value="{{$ortu->nama_murid}}">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Masukan Email" value="{{$ortu->email}}">
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea name="alamat" class="form-control" rows="3" placeholder="Masukan Alamat">{{$ortu->alamat}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="noTelp">No. Telp</label>
                                    <input name="no_telp" type="text" class="form-control" id="noTelp" placeholder="Masukan No. Telp" value="{{$ortu->no_telp}}">
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