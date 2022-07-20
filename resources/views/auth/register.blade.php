@extends('layout.master2')

@section('content')
  <div class="page-content d-flex align-items-center justify-content-center">

    <div class="row w-100 mx-0 auth-page">
      <div class="col-md-8 col-xl-6 mx-auto">
        <div class="card">
          <div class="row">
            <div class="col-md-4 pr-md-0">
              <div class="auth-left-wrapper"
                style="background-image: url({{ url('https://via.placeholder.com/219x452') }})">

              </div>
            </div>
            <div class="col-md-8 pl-md-0">
              <div class="auth-form-wrapper px-4 py-5">
                <a href="#" class="noble-ui-logo d-block mb-2">Id Digital</a>
                <h5 class="text-muted font-weight-normal mb-4">Create a free account.</h5>
                <form class="forms-sample" method="POST" action="{{ route('register') }}">
                  @csrf
                  <div class="form-group">
                    <label for="exampleInputUsername1">Username</label>
                    <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username"
                      name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email"
                      value="{{ old('email') }}" required autocomplete="email" autofocus>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
                      name="password" required autocomplete="new-password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password"
                      name="password_confirmation" required autocomplete="new-password">
                  </div>

                  <div class="mt-3">
                    <button type="submit" class="btn btn-primary mr-2 mb-2 mb-md-0">Sign
                      up</button>

                  </div>
                  <a href="{{ route('login') }}" class="d-block mt-3 text-muted">Already a user? Sign in</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
@endsection
