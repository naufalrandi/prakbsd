@extends('layouts.app')

@section('title', 'Create Transaksi')

@section('content')
<section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="{{ route('transaksi.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1>Create New Transaksi</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Transaksi</a></div>
        <div class="breadcrumb-item">Create New Transaksi</div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Create New Transaksi</h2>
      <p class="section-lead">
        On this page you can create a new Transaksi and fill in all fields.
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
              <h4>Create Transaksi</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('transaksi.store') }}" method="POST">
                    @csrf
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Customer:</strong>
                            <select class="form-control" name="id_customer" >
                                @foreach ($customer as $cus)
                                    <option value="{{ $cus->id }}">{{ $cus->nama }}</option>
                                @endforeach
                              </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                      <div class="form-group">
                          <strong>Barang:</strong>
                          <select class="form-control" name="id_barang" >
                              @foreach ($barang as $brg)
                                  <option value="{{ $brg->id }}">{{ $brg->nama }}</option>
                              @endforeach
                            </select>
                      </div>
                  </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                      <div class="form-group">
                          <strong>Tanggal :</strong>
                          <input type="date" name="tanggal" class="form-control" required>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
