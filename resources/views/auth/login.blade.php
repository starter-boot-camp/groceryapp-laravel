@extends ('app')

@section('content')

<div class="container container2">
  <div class="row">
    <div class="col-md-4 col-md-offset-1">
      <h3>Login</h3>
      <form method="post" action="/login">
        {!! csrf_field() !!}
        <div class="form-group">
          <ul>@foreach ($errors->get('email') as $error)<li>{{$error}}</li>@endforeach</ul>
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Email">
        </div>
        <div class="form-group">
          <ul>@foreach ($errors->get('password') as $error)<li>{{$error}}</li>@endforeach</ul>
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="remember"> Remember Me
          </label>
        </div>
        <button type="submit" class="btn btn-default">Login</button>
        <a href="/forgotpassword.html">Forgot Password</a>
      </form>
    </div>
    <div class="col-md-2">

    </div>
    <div class="col-md-4">
      <h2>Register</h2>
      <form method="post" action="/register">
        {!! csrf_field() !!}
        <div class="form-group">
          <ul>@foreach ($errors->get('name') as $error)<li>{{$error}}</li>@endforeach</ul>
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name">
        </div>
        <div class="form-group">
          <ul>@foreach ($errors->get('email') as $error)<li>{{$error}}</li>@endforeach</ul>
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Email">
        </div>
        <div class="form-group">
          <ul>@foreach ($errors->get('password') as $error)<li>{{$error}}</li>@endforeach</ul>
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        <div class="form-group">
        <ul>@foreach ($errors->get('password_confirmation') as $error)<li>{{$error}}</li>@endforeach</ul>
          <label for="password">Confirm Password</label>
          <input type="password" class="form-control" id="password" name="password_confirmation" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-default">Register</button>
      </form>
    </div>
  </div>

    <hr>
</div>


@endsection
