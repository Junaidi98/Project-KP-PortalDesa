@extends('layouts.home')
@section('view_portal')
<div id="services" class="services-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-box">
                    <h2>Portal Desa</h2>
                    <p>Diskominfo Kabupaten Siak.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="owl-carousel owl-theme">

                  
                    <div class="item">
                        <div class="serviceBox">
                            <div class="service-icon"><img src="{{ Storage::url($portal_desa->gambar) }}" aria-hidden="true"></img></div>
                            <h3 class="title">{{ $portal_desa->kades }}</</h3>
                            <p class="description">
                                {{ $portal_desa->alamat }}.
                            </p>
                            <a href="{{$portal_desa->link }}" class="new-btn-d br-2">{{ $portal_desa->namadesa }}</a>
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection