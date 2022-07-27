@extends('layout.master')

@section('content')
  <nav class="page-breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">{{ $menu }}</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{ $menu_active }}</li>
    </ol>
  </nav>

  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <div class="container-fluid d-flex justify-content-between">
            <div class="col-lg-4 pl-0">
              <a href="#" class="noble-ui-logo logo-light d-block mt-3">Id Digital</a>
              <p class="mt-1 mb-1"><b>Solusi Cetak Sesuai Dengan Yang Anda Inginkan</b></p>
              <p>Jl. Hos Cokroaminoto, 103, Glagah, Banyuwangi.</p>
              <h5 class="mt-5 mb-2 text-muted">Nama :</h5>
              @if ($data->user->name == 'administrator')
                <p>{{ $data->user->name . ' (-)' }}</p>
              @else
                <p>{{ $data->user->name . ' (' . $data->user->email . ')' }}</p>
              @endif
            </div>
            <div class="col-lg-3 pr-0">
              <h4 class="font-weight-medium text-uppercase text-right mt-4 mb-2">invoice</h4>
              <h6 class="text-right mb-5 pb-4">{{ 'INV-' . $data->id . '-' . $data->tanggal_pesan }}</h6>
              <p class="text-right mb-1">Total</p>
              <h4 class="text-right font-weight-normal">{{ 'Rp. ' . $data->total_bayar }}</h4>
              <h6 class="mb-0 mt-3 text-right font-weight-normal mb-2"><span class="text-muted">Tanggal :</span>
                {{ \Carbon\Carbon::parse($data->tanggal_pesan)->format('d M Y') }}</h6>
            </div>
          </div>
          <div class="container-fluid mt-5 d-flex justify-content-center w-100">
            <div class="table-responsive w-100">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Jenis Product</th>
                    <th class="text-right">Jumlah</th>
                    <th class="text-right">Harga</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="text-right">
                    <td class="text-left">{{ $data->jenis->jenis }}</td>
                    <td>{{ $data->satuan }}</td>
                    <td>{{ $data->jenis->harga }}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="container-fluid mt-5 w-100">
            <div class="row">
              <div class="col-md-6 ml-auto">
                <div class="table-responsive">
                  <table class="table">
                    <tbody>
                      <tr class="bg-light">
                        <td class="text-bold-800">Total</td>
                        <td class="text-bold-800 text-right"> {{ 'Rp. ' . $data->total_bayar }}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="container-fluid w-100">
            <a href="JavaScript:window.print();" class="btn btn-outline-primary float-right mt-4"><i
                data-feather="printer" class="mr-2 icon-md"></i>Print</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
