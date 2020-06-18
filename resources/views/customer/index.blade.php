@extends('layouts.app')

@section('title', 'Index Customer')

@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif

    <section class="section">
      <div class="section-header">
        <h1>Customer</h1>
        <div class="section-header-button">
          <a href="{{ route('customer.create') }}" class="btn btn-primary">Add New</a>
        </div>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="#">Customer</a></div>
          <div class="breadcrumb-item">All Customer</div>
        </div>
      </div>
      <div class="section-body">
        <h2 class="section-title">Customer</h2>
        <p class="section-lead">

        </p>


        <div class="row mt-4">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>All Customer</h4>
              </div>
              <div class="card-body">

                <div class="clearfix mb-3"></div>

                <div class="table-responsive">
                  <table class="table table-striped" id="customer">
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Options</th>
                    </tr>

                    @foreach ($data as $key => $customer)
                    <tr>
                      <td>
                        {{ ++$i }}
                      </td>
                      <td>
                        {{ $customer->nama }}
                      </td>
                      <td>
                        {{ $customer->alamat }}
                      </td>
                    <td>
                        <div class="table-links">
                            <a class="btn btn-info btn-sm" href="{{ route('customer.show',$customer->id) }}">Show</a>
                            <div class="bullet"></div>
                            <a class="btn btn-primary btn-sm" href="{{ route('customer.edit',$customer->id) }}">Edit</a>
                            <div class="bullet"></div>
                            <form action="{{ route('customer.destroy', $customer->id)}}" method="post">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                            </form>

                          </div>
                    </td>
                </tr>
                @endforeach
              </table>

                <div class="float-right">
                    {{ $data->links() }}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
