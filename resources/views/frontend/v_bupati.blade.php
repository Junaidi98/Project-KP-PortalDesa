@extends('layouts.home')
@section('bupati')
<div class="col-md-4 col-sm-6">
    <div class="our-team">
        <div class="pic">
            <img src="{{ asset('templateFE/') }}/images/img-2.jpg" alt="">
        </div>
        <div class="team-content">
            <h3 class="title">nama</h3>
            <span class="post">Bupati Siak</span>
            <ul class="social">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</div>
@endsection