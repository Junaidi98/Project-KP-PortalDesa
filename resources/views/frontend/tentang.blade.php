
<div id="about" class="about-box">
    <div class="about-a1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box">
                        <h2>Tentang Portal</h2>
                        <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>-->
                    </div>
                </div>
            </div>
            @foreach ($tentangs as $item)
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row align-items-center about-main-info">
                        <div class="col-lg-6 col-md-6 col-sm-12">

                            <!-- DATABASE -->
                            <h2> Selamat Datang di Portal Diskominfo Siak </h2>
                            <p>{{ $item->konten }} </p>

                            <a href="#" class="new-btn-d br-2">Lainnya</a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="about-m">
                                <ul id="banner">

                                    <!-- DATABASE -->
                                    <li>
                                        <img src="{{ asset ('templateFE/') }}/images/about-img-01.jpg" alt="">
                                    </li>
                                    <li>
                                        <img src="{{ asset ('templateFE/') }}/images/about-img-02.jpg" alt="">
                                    </li>
                                    <li>
                                        <img src="{{ asset ('templateFE/') }}/images/about-img-03.jpg" alt="">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
           
        </div>
    </div>
</div>

