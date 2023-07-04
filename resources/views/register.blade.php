@extends('template.master')
@section('content')
    <div class="login-bg access-register"></div>
    <div class="container login-area">
        <div class="section">
            <h3 class="bot-20 center white-text">Register</h3>
            <form method="POST">
            @csrf
                <div class="row">
                    <div class="input-field col s10 offset-s1">
                        <input id="name3" name="Nama" type="text" class="validate">
                        <label for="name3">Namamu</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s10 offset-s1">
                        <select name="Kelas" id="email3" class="validate">
                            <option value="PPTI 17">PPTI 17</option>
                            <option value="PPTI 18">PPTI 18</option>
                            <option value="PPTI 19">PPTI 19</option>
                            <option value="PPBP 4">PPBP 6</option>
                        </select>
                        <label for="email3">Kelas</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s10 offset-s1">
                        <select name="GPL" id="GPl" class="validate">
                            <option value="Laki-laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <label for="GPl">Gender</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s10 offset-s1">
                        <input id="pass3" type="date" name="tgl" class="validate">
                        <label for="pass3">Tanggal Lahir</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s10 offset-s1">
                        <input id="phone3" name="Wa" type="tel" class="validate">
                        <label for="phone3">Nomor Whatapps</label>
                    </div>
                </div>
            <div class="row center">
                <button type="submit" class="waves-effect waves-light btn-large bg-primary">Register</button>
                </form>
                <div class="spacer"></div>
                <div class="links">
                    <a href="{{ url('/login') }}" class='waves-effect'>Already Registered? Login</a>
                </div>
                <div class="spacer"></div>
                {{-- <!-- <div class="links"><a href="#!.html" class='waves-effect'>    Go Back </a></div> --> --}}
                <div class="spacer"></div>
                <div class="spacer"></div>
                <div class="spacer"></div>
                <div class="spacer"></div>
                <div class="spacer"></div>
            </div>
        </div>
    </div>
@endsection
