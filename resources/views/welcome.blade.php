@extends('template.master')
@section('content')
    <h1 class="white-text center welcome-logo index-welcome">DKamar</h1>
    <div class="fullfixed index-carousel">
        <div class="carousel carousel-fullscreen carousel-slider" id="picas">

        </div>
    </div>

    <script>
        var dp={
            0:{
                bg:'https://akcdn.detik.net.id/community/media/visual/2020/07/13/manga-naruto-1_43.webp?w=250&q=',
                title:'Alix is PWA multi purpose Mobile App',
                subtitle:'With pre built ready to use apps'
            },
            1:{
                bg:'https://m.media-amazon.com/images/M/MV5BZmQ5NGFiNWEtMmMyMC00MDdiLTg4YjktOGY5Yzc2MDUxMTE1XkEyXkFqcGdeQXVyNTA4NzY1MzY@._V1_FMjpg_UX1000_.jpg',
                title:'Dua',
                subtitle:'With pre built ready to use apps'
            },

        }
        var a = `
            <div class="carousel-item" href="#carousel-slide-0!">
                <div class="bg" style="background-image: url('https://m.media-amazon.com/images/M/MV5BZmQ5NGFiNWEtMmMyMC00MDdiLTg4YjktOGY5Yzc2MDUxMTE1XkEyXkFqcGdeQXVyNTA4NzY1MzY@._V1_FMjpg_UX1000_.jpg')">
                </div>
                <div class="item-content center-align white-text">
                    <div class="spacer-xlarge"></div>
                    <div class="spacer-xlarge"></div>
                    <h3>Alix is PWA multi purpose Mobile App</h3>
                    <h5 class="light white-text">With pre built ready to use apps</h5>
                </div>
            </div>
            `
        var cos=''

        for (const key in dp) {
            if (dp.hasOwnProperty(key)) {
                const element = dp[key];
                cos+=`
                <div class="carousel-item" href="#carousel-slide-0!">
                    <div class="bg" style="background-image: url('${element.bg}')">
                    </div>
                    <div class="item-content center-align white-text">
                        <div class="spacer-xlarge"></div>
                        <div class="spacer-xlarge"></div>
                        <h3>${element.title}</h3>
                        <h5 class="light white-text">${element.subtitle}</h5>
                    </div>
                </div>
                `
            }
        }

        document.getElementById('picas').innerHTML = cos
    </script>

    <div class="center index-start">
        <a href="{{url('login')}}" class='waves-light btn-large bg-primary'>Daftar</a>
    </div>
@endsection
