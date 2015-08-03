@extends('loginLayout')

@section('content')

  

    <form class="form-signin" method="POST" action="/auth/login">

      <div class="login-wrap">
        
        {!! csrf_field() !!}

          <input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}" placeholder="Email" autofocus>

          <input type="password" name="password" id="password" class="form-control" placeholder="Password">

          <button type="submit" class="btn btn-lg btn-success btn-block">LOGIN</button>

          <label class="checkbox-custom check-success">

              <input type="checkbox" value="remember-me" name="remember" id="checkbox1"> <label for="checkbox1">Remember me</label>
              
              <a class="pull-right" data-toggle="modal" href="#forgotPass"> Forgot Password?</a>

          </label>

          <div class="registration">

              Don't have an account yet?

              <a class="" href="auth/register">Create an account</a>

          </div>

          @if (count($errors) > 0)

            <br>

            <div class="alert alert-danger">

              <ul>
                
                @foreach ($errors->all() as $error)

                  <li>{{ $error }}</li>

                @endforeach

              </ul>

            </div>

          @endif

      </div>

    </form>

@stop