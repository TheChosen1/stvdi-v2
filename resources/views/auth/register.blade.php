

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ config('app.name') }} | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- import all css -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="{{ url('/') }}"><b>STɅDI</b></a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>

        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

        <div class="form-group{{ $errors->has('education_id') ? ' has-feedback' : '' }}">
          <label>Institution Type</label>
          <select name="education_id" class="form-control">
            <option value="1">Kindergarten/Primary/Secondary</option>
            <option value="2">Tertiary Institutions</option>
          </select>
          <!-- <span class="fa fa-user form-control-feedback"></span> -->
        </div> 

        <div class="form-group{{ $errors->has('name') ? ' has-feedback' : '' }}">
          <label>Institution Name</label>
          <input type="text" class="form-control" placeholder="Institution Name" name="name" value="{{ old('name') }}" required autofocus>
          <!-- <span class="fa fa-user form-control-feedback"></span> -->

            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif     

        </div>
       
        <div class="form-group{{ $errors->has('user_code') ? ' has-feedback' : '' }}">
          <label>Username</label>
          <input type="text" class="form-control" placeholder="Username" name="user_code" value="{{ old('user_code') }}" required>
          <!-- <span class="fa fa-user form-control-feedback"></span> -->

            @if ($errors->has('user_code'))
                <span class="help-block">
                    <strong>{{ $errors->first('user_code') }}</strong>
                </span>
            @endif     

        </div>   

        <div class="form-group{{ $errors->has('email') ? ' has-feedback' : '' }}">
          <label>Email</label>
          <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>
          <!-- <span class="fa fa-envelope form-control-feedback"></span> -->

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif

        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-feedback' : '' }}">
          <label>Password</label>
          <input type="password" class="form-control" placeholder="Password" class="form-control" name="password" required>
          <!-- <span class="fa fa-lock form-control-feedback"></span> -->

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif

        </div>

        <div class="form-group has-feedback">
          <label>Confirm Password</label>
          <input type="password" class="form-control" placeholder="Retype password" name="password_confirmation" required>
          <!-- <span class="fa fa-lock form-control-feedback"></span> -->
        </div>
        <div class="row">
          <div class="col-8">
            <div class="checkbox icheck">
              <label>
                <input type="hidden" name="is_coreadmin" value="1">
                <input type="checkbox"> I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fa fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fa fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div> -->

      <a href="{{ url('login') }}" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="http://localhost/stvdi/public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="http://localhost/stvdi/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- iCheck -->
<script src="http://localhost/stvdi/public/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass   : 'iradio_square-blue',
      increaseArea : '20%' // optional
    })
  })
</script>
</body>
</html>
