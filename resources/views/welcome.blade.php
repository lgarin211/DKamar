@extends('template.master')
@section('content')
    <h1 class="white-text center welcome-logo index-welcome">
        <img src="{{url('/logo.png')}}" alt="" style="width: 15rem;">
    </h1>
    <div class="fullfixed index-carousel">
        <div class="carousel carousel-fullscreen carousel-slider" id="picas">

        </div>
    </div>

    <script>
        var dp={
            0:{
                bg:'https://karir.bca.co.id/s3/files/images/shares/1.jpeg',
                title:'PPTI DAN PPBP ',
                subtitle:'Kegiatan Dan Hal-Hal Seru Bersama'
            },
            1:{
                bg:'https://karir.bca.co.id/s3/files/images/shares/6outing.JPG',
                title:'Kita Bertumbuh Bersama',
                subtitle:'Ayok Kita bersama Bertunbuh Bahagia'
            },
            2:{
                bg:'https://demortb.lahoras.my.id/storage/kegiatans/June2023/zyx094WVwgzgAPVqL7En.jpeg',
                title:'Banyak Hal Yang Bisa Kita Lakukan',
                subtitle:'Tertawa,Menangis,Terluka dan Bahagia'
            },
            3:{
                bg:'https://demortb.lahoras.my.id/storage/kegiatans/June2023/Rb8kMDuK0RlHtOYNYJdO.jpeg',
                title:'Dan Kita bersama',
                subtitle:'Di Rumah Talenta BCA'
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
        <a href="{{url('regis')}}" class='waves-light btn-large bg-primary'>Daftar</a>
    </div>
@endsection
