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
          <form class="forms" method="post" action="{{ route('jenis.store') }}">
            @csrf

            <div class="form-group">
              <label for="product_id">Pilih Product</label>
              <select class="form-control" id="product_id" name="product_id">
                @foreach ($data_product as $product)
                  <option value="{{ $product->id }}">{{ $product->nama }}</option>
                @endforeach
              </select>

              @error('product_id')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="form-group">
              <label for="jenis">Jenis Product</label>
              <input type="text" class="form-control @error('jenis') is-invalid @enderror" id="jenis"
                autocomplete="on" placeholder="Jenis Product" name="jenis">

              @error('jenis')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="form-group">
              <label for="ukuran">Ukuran</label>
              <input type="text" class="form-control @error('ukuran') is-invalid @enderror" id="ukuran"
                autocomplete="on" placeholder="Ukuran Product" name="ukuran">

              @error('ukuran')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="form-group">
              <label for="harga">Harga Satuan</label>
              <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga"
                autocomplete="on" placeholder="Harga Product" name="harga">

              @error('harga')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <button type="submit" class="btn btn-primary mr-2">Tambah</button>
            <a class="btn btn-light" href="{{ route('jenis.index') }}">Batal</a>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
