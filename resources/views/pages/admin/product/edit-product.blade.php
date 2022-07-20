@extends('layout.master')

@section('content')
  <nav class="page-breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">{{ $menu }}</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{ $menu_active }}</li>
    </ol>
  </nav>

  <div class="row d-flex justify-content-center">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">{{ $menu_active }}</h6>
          <form class="forms" method="post" action="{{ route('product.update', $data->id) }}">
            @csrf
            @method('PATCH')
            <div class="form-group">
              <label for="nama">Nama Product</label>
              <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                autocomplete="on" placeholder="Nama product" name="nama"
                value="{{ $data->nama ? $data->nama : old('nama') }}">

              @error('nama')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary mr-2">Ubah</button>
            <a class="btn btn-light" href="{{ route('jenis.index') }}">Batal</a>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
