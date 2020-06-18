@extends('layouts.app')

@section('title', 'Show Transaksi')

@section('content')
<section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="{{ route('transaksi.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1>Show Transaksi</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Transaksi</a></div>
        <div class="breadcrumb-item">Show Transaksi</div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Show Transaksi</h2>
      <p class="section-lead">
        On this page you can Show a Transaksi and fill in all fields.
      </p>
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
        @endif
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Show Transaksi</h4>
            </div>
            <div class="card-body">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Customer:</strong>
                        {{ $transaksi->customer->nama }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong>Barang:</strong>
                      {{ $transaksi->barang->nama }}
                  </div>
              </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Prasyarat:</strong>
                        {{ $transaksi->prasyarat }}
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
