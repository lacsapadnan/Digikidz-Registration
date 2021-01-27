@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edit Murid</h1>
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
                        <form action="/murid/{{$murid->id}}/update" method="POST">
                            {{csrf_field()}}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="namaMurid">Nama Murid</label>
                                    <input name="nama_murid" type="text" class="form-control" id="namaMurid" placeholder="Masukan Nama Murid" value="{{$murid->nama_murid}}">
                                </div>
                                <div class="form-group">
                                    <label for="namaOrangtua">Nama Orangtua</label>
                                    <input name="nama_ortu" type="text" class="form-control" id="namaOrangtua" placeholder="Masukan Nama Orangtua" value="{{$murid->nama_ortu}}">
                                </div>
                                <div class="form-group">
                                    <label for="kurikulum">Kurikulum</label>
                                    <input name="kurikulum" type="text" class="form-control" id="kurikulum" placeholder="Masukan Kurikulum" value="{{$murid->kurikulum}}">
                                </div>
                                <div class="form-group">
                                    <label for="asalSekolah">Asal Sekolah</label>
                                    <input name="asal_sekolah" type="text" class="form-control" id="asalSekolah" placeholder="Masukan Asal Sekolah" value="{{$murid->asal_sekolah}}">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Masukan Email" value="{{$murid->email}}">
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea name="alamat" class="form-control" rows="3" placeholder="Masukan Alamat">{{$murid->alamat}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="noTelp">No. Telp</label>
                                    <input name="no_telp" type="text" class="form-control" id="noTelp" placeholder="Masukan No. Telp" value="{{$murid->no_telp}}">
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                        <select name="status" class="form-control">
                                        <option value="Aktif" @if ($murid->status == 'Aktif')
                                        selected @endif>Aktif</option>
                                        <option value="Cuti" @if ($murid->status == 'Cuti')
                                        selected @endif>Cuti</option>
                                        <option value="Tidak Aktif" @if ($murid->status == 'Tidak Aktif')
                                        selected @endif>Tidak Aktif</option>
                                        </select>
                                </div>
                                <button type="submit" class="btn bg-gradient-warning">Update</button>
                            </div>
                        </form>

                        {{-- <table id="example1" class="table table-bordered table-striped dataTable dtr-inline collapsed" role="grid" aria-describedby="example1_info">
                            <thead>
                            <tr role="row">
                                <th>Nama Murid</th>
                                <th>Nama Orang Tua</th>
                                <th>Kurikulum</th>
                                <th>Asal Sekolah</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>No. Telp</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                                <tbody>
                                    @foreach ($data_murid as $murid)
                                        <tr>
                                            <td>{{$murid->nama_murid}}</td>
                                            <td>{{$murid->nama_ortu}}</td>
                                            <td>{{$murid->kurikulum}}</td>
                                            <td>{{$murid->asal_sekolah}}</td>
                                            <td>{{$murid->email}}</td>
                                            <td>{{$murid->alamat}}</td>
                                            <td>{{$murid->no_telp}}</td>
                                            <td>{{$murid->status}}</td>
                                            <td><a href="/murid/{{$murid->id}}/edit" class="btn btn-block bg-gradient-warning">Edit</a></td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            <tfoot>
                            </tfoot>
                        </table> --}}
                            
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