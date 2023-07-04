@extends("template.master")
@section("content")
<div class="login-bg access-register"></div>
<div class="container login-area">
    <div class="section">
      <h3 class="bot-20 center white-text">Login</h3>
      <form action="" method="POST">
        @csrf
      <div class="row">
        <div class="input-field col s10 offset-s1">
          <input id="numberpho" type="number" class="validate" name="PHO">
          <label for="numberpho">Nomor Whatapps</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s10 offset-s1">
          <input id="pass311" type="date" class="validate" name="THO">
          <label for="pass311">Tanggal Lahir</label>
        </div>
      </div>
      <div class="row center">
        <button type="submit" class="waves-effect waves-light btn-large bg-primary">Login</button>
        <div class="spacer"></div>
        <div class="links">
          <a href="https://wa.me/6282111424592" class="waves-effect">HELP</a>
          <span class="sep"> | </span>
          <a href="{{url('regis')}}" class="waves-effect">Register</a>
        </div>
        <div class="spacer"></div>
      </div>
    </form>
    </div>
  </div>
@endsection
