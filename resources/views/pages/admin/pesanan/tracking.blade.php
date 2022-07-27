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
              @foreach ($data_tracking as $item)
                <li class="event">
                  <h3>{{ $item->jenis->product->nama }}</h3>
                  <p>{{ $item->jenis->jenis }}</p>
                  <p>{{ $item->proses }}
                    <i class="icon-lg text-success pb-3px" data-feather="check-circle"></i>
                  </p>
                </li>
                @if ($item->proses == $data->tracking)
                @break
              @endif
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
