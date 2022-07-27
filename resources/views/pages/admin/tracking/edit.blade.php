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
          <form class="forms" method="post" action="{{ route('tracking.update', $data->id) }}">
            @csrf
            @method('PATCH')

            <div class="form-group">
              <label for="jenis_id">Pilih Jenis Product</label>
              <select class="form-control" id="jenis_id" name="jenis_id">
                @foreach ($data_jenis as $jenis)
                  <option value="{{ $jenis->id }}" {{ $jenis->id == $data->jenis_id ? 'selected' : '' }}>
                    {{ $jenis->jenis }}</option>
                @endforeach
              </select>

              @error('jenis_id')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="form-group">
              <label for="proses">Proses</label>
              <input type="text" class="form-control @error('proses') is-invalid @enderror" id="proses"
                autocomplete="on" placeholder="Proses Product" name="proses"
                value="{{ $data->proses ? $data->proses : old('proses') }}">

              @error('proses')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>


            <button type="submit" class="btn btn-primary mr-2">Ubah</button>
            <a class="btn btn-light" href="{{ route('tracking.index') }}">Batal</a>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
