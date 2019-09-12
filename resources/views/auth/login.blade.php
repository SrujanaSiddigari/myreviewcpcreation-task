@extends('layouts.theme-core')

@section('page-content')
<body class="animsition site-navbar-small page-login-v3 layout-full" style="animation-duration: 800ms; opacity: 1;"><!-- Page -->
<div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">>
    <div class="page-content vertical-align-middle animation-slide-top animation-duration-1">
      <div class="panel">
        <div class="panel-body">
          <div class="brand">
            <img class="brand-img" src="../assets/images/logo-colored.png" alt="...">
            <h2 class="brand-text font-size-18">Remark</h2>
          </div>
          <form method="post" id="login_form">
            <div class="form-group form-material floating" data-plugin="formMaterial">
              <input type="email" class="form-control" name="email" />
              <label class="floating-label">Email</label>
            </div>
            <div class="form-group form-material floating" data-plugin="formMaterial">
              <input type="password" class="form-control" name="password" />
              <label class="floating-label">Password</label>
            </div>
            <div class="form-group clearfix">
              <div class="checkbox-custom checkbox-inline checkbox-primary checkbox-lg float-left">
                <input type="checkbox" id="inputCheckbox" name="remember">
                <label for="inputCheckbox">Remember me</label>
              </div>
              <a class="float-right" href="forgot-password.html">Forgot password?</a>
            </div>
            <button type="submit" class="btn btn-primary btn-block btn-lg mt-40" id="signin_form">Sign in</button>
          </form>
        </div>
      </div>

      <footer class="page-copyright page-copyright-inverse">
        <p>WEBSITE BY Creation Studio</p>
        <p>© 2018. All RIGHT RESERVED.</p>
        <div class="social">
          <a class="btn btn-icon btn-pure" href="javascript:void(0)">
            <i class="icon bd-twitter" aria-hidden="true"></i>
          </a>
          <a class="btn btn-icon btn-pure" href="javascript:void(0)">
            <i class="icon bd-facebook" aria-hidden="true"></i>
          </a>
          <a class="btn btn-icon btn-pure" href="javascript:void(0)">
            <i class="icon bd-google-plus" aria-hidden="true"></i>
          </a>
        </div>
      </footer>
    </div>
  </div>
  <!-- End Page -->
@endsection

@section('page-scripts')
<script src = "{{ asset('js/login.js') }}"></script>
@endsection