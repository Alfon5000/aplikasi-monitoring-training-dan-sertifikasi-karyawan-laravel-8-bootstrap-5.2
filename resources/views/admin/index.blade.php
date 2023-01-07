@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('dashboard-active', 'active')

@section('content')
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-6">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>{{ $total_karyawans }}</h3>
              <p>Karyawan</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-stalker"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="small-box bg-success">
            <div class="inner">
              <h3>{{ $total_trainings }}</h3>
              <p>Training</p>
            </div>
            <div class="icon">
              <i class="ion ion-ribbon-a"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>{{ $total_sertifikasis }}</h3>
              <p>Sertifikasi</p>
            </div>
            <div class="icon">
              <i class="ion ion-ribbon-b"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
