<!DOCTYPE html>
<html>
<head>
	<title>custom register</title>
	<link href="https://bootswatch.com/solar/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<br>
<div class="container"> 

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<form class="form-horizontal" method="POST" action="{{ route('custom.register') }}">
  <fieldset>
    <legend>Register</legend>
     <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-6">
        <input type="text" class="form-control" id="inputName" placeholder="Name" name="name" value="{{ old('name') }}">
      </div>
      @if($errors->has('name'))
      <p class="text-danger">{{ $errors->first('name') }}</p>
      @endif
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-6">
        <input type="text" class="form-control" id="inputEmail" placeholder="Email" name="email" value="{{ old('email') }}">
      </div>
      @if($errors->has('email'))
      <p class="text-danger">{{ $errors->first('email') }}</p>
      @endif
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-6">
        <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password" value="">
      </div>
      @if($errors->has('password'))
      <p class="text-danger">{{ $errors->first('password') }}</p>
      @endif
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Confirm Password</label>
      <div class="col-lg-6">
        <input type="password" class="form-control" id="inputPassword" placeholder="Confirm Password" name="password_confirmation" value="">
      </div>
    </div>
    {{ csrf_field() }}
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>

</div>



<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>