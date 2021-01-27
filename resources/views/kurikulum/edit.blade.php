@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edit Kurikulum</h1>
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
                        <form action="/kurikulum/{{$kurikulum->id}}/update" method="POST">
                            {{csrf_field()}}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="namaKurikulum">Nama Kurikulum</label>
                                    <input name="nama_kurikulum" type="text" class="form-control" id="namaKurikulum" placeholder="Masukan Nama Kurikulum" value="{{$kurikulum->nama_kurikulum}}">
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