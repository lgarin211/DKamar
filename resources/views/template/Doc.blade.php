@extends('template.master')
@section('content')
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
@endsection
