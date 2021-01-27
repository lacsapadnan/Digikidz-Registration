@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
  <div class="row float-none">
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-none">
          <span class="info-box-icon bg-info"><i class="far fa-user"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Murid</span>
              <span class="info-box-number">{{$count}}</span>
            </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-sm">
        <span class="info-box-icon bg-success"><i class="fas fa-fw fa-book"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Kurikulum</span>
            <span class="info-box-number">{{$count_kurikulum}}</span>
          </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-sm">
        <span class="info-box-icon bg-warning"><i class="fas fa-fw fa-user"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">User</span>
            <span class="info-box-number">{{$count_user}}</span>
          </div>
      </div>
    </div>
  </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop