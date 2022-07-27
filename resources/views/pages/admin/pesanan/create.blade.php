@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
@endpush

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
          <form class="forms" method="post" action="{{ route('pesanan-admin.store') }}">
            @csrf

            <div class="form-group">
              <label for="desainer">Desainer</label>
              <select class="form-control" id="desainer" name="desainer">
                <option value="">Pilih Desainer</option>
                <option value="Ahmad Taufiq H">Ahmad Taufiq H</option>
                <option value="Choirul">Choirul</option>
                <option value="Anak PSG">Anak PSG</option>
              </select>

              @error('desainer')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="form-group">
              <label for="tanggal">Tanggal Pemesanan</label>
              <div class="input-group date datepicker" id="tanggal">
                <input type="text" class="form-control" placeholder="tanggal_pesan" name="tanggal_pesan"><span
                  class="input-group-addon"><i data-feather="calendar"></i></span>
              </div>

              @error('tanggal_pesan')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="form-group">
              <label for="satuan">Satuan</label>
              <input type="text" class="form-control @error('satuan') is-invalid @enderror" id="satuan"
                autocomplete="on" placeholder="satuan" name="satuan">

              @error('satuan')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="form-group">
              <label for="jenis_id">Jenis Product</label>
              <select class="form-control" id="jenis_id" name="jenis_id">
                <option value="">Pilih Jenis Product</option>
                @foreach ($data_jenis as $jenis)
                  <option value="{{ $jenis->id }}">{{ $jenis->product->nama . ' (' . $jenis->jenis . ')' }}</option>
                @endforeach
              </select>

              @error('jenis_id')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="form-group">
              <label for="user_id">User</label>
              <select class="form-control" id="user_id" name="user_id">
                <option value="">Pilih User</option>
                @foreach ($data_user as $user)
                  <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
              </select>

              @error('user_id')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <button type="submit" class="btn btn-primary mr-2">Tambah</button>
            <a class="btn btn-light" href="{{ route('pesanan-admin.index') }}">Batal</a>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/datepicker.js') }}"></script>
@endpush
