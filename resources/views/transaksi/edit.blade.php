@extends('layouts.app')

@section('title', 'Edit Transaksi')

@section('content')
<section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="{{ route('transaksi.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1>Edit Transaksi</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Transaksi</a></div>
        <div class="breadcrumb-item">Edit Transaksi</div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Edit  Transaksi</h2>
      <p class="section-lead">
        On this page you can Edit a Transaksi and fill in all fields.
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
              <h4>Edit Transaksi</h4>
            </div>
            <div class="card-body">
                {!! Form::model($transaksi, ['method' => 'PATCH','route' => ['transaksi.update', $transaksi->id]]) !!}
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Customer :</strong>
                            <select class="form-control" name="id_customer" >
                                @foreach ($customer as $cus)
                                    <option value="{{ $cus->id }}">{{ $cus->nama }}</option>
                                @endforeach
                              </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                      <div class="form-group">
                          <strong>Barang :</strong>
                          <select class="form-control" name="id_barang" >
                              @foreach ($barang as $brg)
                                  <option value="{{ $brg->id }}">{{ $brg->nama }}</option>
                              @endforeach
                            </select>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                      <div class="form-group">
                          <strong>Tanggal:</strong>
                          {!! Form::date('tanggal', null, array('class' => 'form-control')) !!}
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
