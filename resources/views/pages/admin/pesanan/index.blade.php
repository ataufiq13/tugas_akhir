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
                    <td class="text-center">{{ $item->tanggal_pesan }}</td>
                    <td class="text-center">{{ $item->jenis->jenis }}</td>
                    <td class="text-center">{{ $item->jenis->harga }}</td>
                    <td class="text-center">{{ $item->satuan }}</td>
                    <td class="text-center">{{ $item->total_bayar }}</td>
                    @if ($item->status == 'Lunas')
                      <td class="text-center"><span class="badge badge-success">{{ $item->status }}</span></td>
                    @else
                      <td class="text-center"><span class="badge badge-danger">{{ $item->status }}</span></td>
                    @endif

                    @if ($item->tracking == 'Selesai')
                      <td class="text-center"><span class="badge badge-success">{{ $item->tracking }}</span></td>
                    @elseif ($item->tracking == 'Cutting')
                      <td class="text-center"><span class="badge badge-info text-white">{{ $item->tracking }}</span></td>
                    @else
                      <td class="text-center"><span class="badge badge-warning text-white">{{ $item->tracking }}</span>
                      </td>
                    @endif
                    <td class="text-center">{{ $item->user->name }}</td>
                    <td class="d-flex justify-content-center align-items-center">
                      <div class="dropdown mb-2">
                        <button class="btn p-0" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                          <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item d-flex align-items-center"
                            href="{{ route('pesanan-admin.show', $item->id) }}">
                            <i data-feather="eye" class="icon-sm mr-2"></i>
                            <span class="mt-1">Detail</span>
                          </a>
                          <button type="button" class="dropdown-item d-flex align-items-center bukti" data-toggle="modal"
                            data-target="#bukti" data-id="{{ $item->bukti_bayar }}">
                            <i data-feather="printer" class="icon-sm mr-2"></i>
                            <span class="mt-1">Bukti</span>
                          </button>
                          <a class="dropdown-item d-flex align-items-center"
                            href="{{ route('show-tracking', $item->id) }}">
                            <i data-feather="compass" class="icon-sm mr-2"></i>
                            <span class="mt-1">Tracking</span>
                          </a>
                          <a class="dropdown-item d-flex align-items-center"
                            href="{{ route('pesanan-admin.edit', $item->id) }}">
                            <i data-feather="edit-2" class="icon-sm mr-2"></i>
                            <span class="mt-1">Ubah</span>
                          </a>
                          <form class="d-flex align-items-center"
                            action="{{ route('pesanan-admin.destroy', $item->id) }}" method="post"
                            onsubmit="return confirm('Yakin hapus data ?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="dropdown-item d-flex align-items-center">
                              <i data-feather="trash" class="icon-sm mr-2"></i>
                              <span class="mt-1">Hapus</span>
                            </button>
                          </form>
                        </div>
                      </div>
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

  <!-- Modal Bukti Pembayaran-->
  <div class="modal fade" id="bukti" tabindex="-1" role="dialog" aria-labelledby="buktiLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="buktiLabel">Bukti Pembayaran</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img id="gambar" class="img-fluid" src="{{ asset('assets/images/bukti/default.jpg') }}"
            alt="Bukti Pembayaran">
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
  <script>
    $(document).ready(function() {
      $('body').on('click', '.bukti', function() {
        if ($(this).attr('data-id') != '') {
          var gambar = $(this).attr('data-id')
          var path = `{{ asset('assets/images/bukti/` + gambar + `') }}`
          $("#gambar").attr("src", path);
          console.log(path)
        } else {
          var path = `{{ asset('assets/images/bukti/default.jpg') }}`
          $("#gambar").attr("src", path);
          console.log(path)
        }
      });
    });
  </script>
@endpush
