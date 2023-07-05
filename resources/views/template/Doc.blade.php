@extends('template.master')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
    <div class="row ui-mediabox blogs blog-view bot-0">
        <div class="col s12">
            <a class="img-wrap" href="{{url("/logo.png")}}" data-fancybox="images"
                data-caption="Modern Web Design trends for you">
                <img class="z-depth-1" style="width: 100%;" src="{{url("logo.png")}}">
            </a>
            {!! setting('site.det') !!}
            <div class="spacer"></div>
            <div class="divider"></div>
        </div>
    </div>
</div>
<hr>
<div class="container">
    <div class="row">
        <div class="card col-md-6"  style="">
            <img style="width: 5rem" class="img-fluid mt-1 rounded-circle" src="https://i.ibb.co/xfCDM7Z/Whats-App-Image-2023-07-04-at-16-23-12.jpg" class="card-img-top" alt="https://i.ibb.co/xfCDM7Z/Whats-App-Image-2023-07-04-at-16-23-12.jpg">
            <div class="card-body">
              <h5 class="card-title">Ferren Andrea</h5>
              <p class="card-text">PPTI 16</p>
            </div>
        </div>

        <div class="card col-md-6" style="">
            <img style="width: 5rem" class="img-fluid mt-1 rounded-circle" src="https://i.ibb.co/BNdp6rK/Whats-App-Image-2023-07-04-at-16-24-03.jpg" class="card-img-top" alt="https://i.ibb.co/BNdp6rK/Whats-App-Image-2023-07-04-at-16-24-03.jpg">
            <div class="card-body">
              <h5 class="card-title">Agustinus Pardamean Lumban Tobing</h5>
              <p class="card-text">PPTI 15</p>
            </div>
        </div>

    </div>
</div>
@endsection
