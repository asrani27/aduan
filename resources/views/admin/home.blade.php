@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3>{{$aduan}}</h3>

          <p>Aduan Masuk</p>
        </div>
        <div class="icon">
          <i class="fas fa-comment-alt"></i>
        </div>
        <a href="/admin/aduan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3>{{$customer}}<sup style="font-size: 20px"></sup></h3>

          <p>User/Customer</p>
        </div>
        <div class="icon">
            <i class="fas fa-users"></i>
        </div>
        <a href="/admin/customer" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>{{$pegawai}}</h3>

          <p>Pegawai</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="/admin/pegawai" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-danger">
        <div class="inner">
          <h3>Laporan</h3>

          <p>Laporan Solusi</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="/admin/lap_solusi" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
</div>
<div class="row">
  <div class="col-lg-12 col-12 text-center">
    <img src="/themeadmin/logo.png" alt="Logo" width="45%">
  </div>
</div>
@endsection