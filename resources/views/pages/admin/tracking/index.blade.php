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
          <h6 class="card-title">{{ $menu_active }}
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
                    <td>{{ App\Models\Jenis::find($item->jenis_id)->jenis }}</td>
                    <td>{{ App\Models\Jenis::find($item->jenis_id)->ukuran }}</td>
                    <td class="text-center">{{ $item->total }}</td>
                    <td class="d-flex justify-content-center align-items-center">
                      <a class="btn btn-sm btn-info mx-2 text-white"
                        href="{{ route('tracking.show', $item->jenis_id) }}">Detail</a>
                      {{-- <a class="btn btn-sm btn-warning mx-2 text-white"
                        href="{{ route('tracking.edit', $item->jenis_id) }}">Ubah</a>
                      <form class="d-flex shadow-none" action="{{ route('tracking.destroy', $item->jenis_id) }}"
                        method="post" onsubmit="return confirm('Yakin hapus data ?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger mx-2">Hapus
                        </button>
                      </form> --}}
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
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/datatables-net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables-net-bs4/dataTables.bootstrap4.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/data-table.js') }}"></script>
@endpush
