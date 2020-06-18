@extends('layouts.app')

@section('title', 'Show Barang')

@section('content')
<section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="{{ route('barang.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1>Show Barang</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Barang</a></div>
        <div class="breadcrumb-item">Show Barang</div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Show Barang</h2>
      <p class="section-lead">
        On this page you can Show a Barang and fill in all fields.
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
              <h4>Show Barang</h4>
            </div>
            <div class="card-body">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        {{ $barang->nama }}
                    </div>
                    <div class="form-group">
                      <strong>Harga:</strong>
                      {{ $barang->harga }}
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
