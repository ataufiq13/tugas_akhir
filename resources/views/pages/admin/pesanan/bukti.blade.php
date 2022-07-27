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
          <h6 class="card-title">{{ $menu_active }}</h6>
          <div id="content">
            <ul class="timeline">
              @foreach ($data as $item)
                <li class="event">
                  <div class="d-flex justify-content-end align-items-center">
                    <a class="btn btn-sm btn-warning mx-2 text-white"
                      href="{{ route('tracking.edit', $item->id) }}">Ubah</a>
                    <form class="d-flex shadow-none" action="{{ route('tracking.destroy', $item->id) }}" method="post"
                      onsubmit="return confirm('Yakin hapus data ?')">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-sm btn-danger mx-2">Hapus
                      </button>
                    </form>
                  </div>

                  <h3>{{ $item->jenis->product->nama }}</h3>
                  <p>{{ $item->jenis->jenis }}</p>
                  <p>{{ $item->proses }}</p>
                </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
