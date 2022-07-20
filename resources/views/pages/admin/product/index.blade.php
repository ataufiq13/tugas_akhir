@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
@endpush

@section('content')
  <nav class="page-breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">{{ $menu }}</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{ $menu_active }}</li>
    </ol>
  </nav>

  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title d-flex align-items-center justify-content-between">{{ $menu_active }}
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dataProduct">
              Data Product
            </button>
          </h6>
          <div class="table-responsive">
            <table id="dataTableExample" class="table">
              <thead>
                <tr>
                  <th class="text-center">No</th>
                  @foreach ($theads as $thead)
                    <th class="text-center">{{ $thead }}</th>
                  @endforeach
                  <th class="text-center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $item)
                  <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $item->product->nama }}</td>
                    <td class="text-center">{{ $item->jenis }}</td>
                    <td class="text-center">{{ $item->ukuran }}</td>
                    <td>
                      <div class="row d-flex align-items-center">
                        <div class="col text-right">
                          <p>Rp.</p>
                        </div>
                        <div class="col text-end">{{ $item->harga }}</div>
                    </td>
                    <td class="d-flex justify-content-center align-items-center">
                      {{-- <a class="btn btn-sm btn-info mx-2 text-white"
                        href="{{ route('jenis.show', $item->id) }}">Detail</a> --}}
                      <a class="btn btn-sm btn-warning mx-2 text-white"
                        href="{{ route('jenis.edit', $item->id) }}">Ubah</a>
                      <form class="d-flex shadow-none" action="{{ route('jenis.destroy', $item->id) }}" method="post"
                        onsubmit="return confirm('Yakin hapus data ?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger mx-2">Hapus
                        </button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Data Product-->
  <div class="modal fade" id="dataProduct" tabindex="-1" role="dialog" aria-labelledby="dataProductLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="dataProductLabel">Data Product</h5>
          <a class="btn btn-primary" href="{{ route('product.create') }}">Tambah</a>
        </div>
        <div class="modal-body">
          <ul class="list-group list-group-flush">
            @foreach ($data_product as $product)
              <li class="list-group-item d-flex align-items-center justify-content-between">
                {{ $product->nama }}
                <div class="d-flex">
                  <a class="btn btn-sm btn-warning mx-2 text-white"
                    href="{{ route('product.edit', $product->id) }}">Ubah</a>
                  <form class="d-flex shadow-none" action="{{ route('product.destroy', $product->id) }}" method="post"
                    onsubmit="return confirm('Yakin hapus data ?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger mx-2">Hapus
                    </button>
                  </form>
                </div>
              </li>
            @endforeach
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/datatables-net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables-net-bs4/dataTables.bootstrap4.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/data-table.js') }}"></script>
@endpush
