<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

     <!-- Site Metas -->
    <title>PortalDesa.Siakkab</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{asset('templateFE/')}}/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('templateFE/')}}/images/logo_besar.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('templateFE/')}}/css/bootstrap.min.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="{{asset('templateFE/')}}/css/pogo-slider.min.css">
	<!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('templateFE/')}}/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('templateFE/')}}/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('templateFE/')}}/css/custom.css">

</head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

	<!-- Start top bar -->
	@include('frontend.includes.top_bar')

	<!-- End top bar -->

	<!-- Start header -->
	@include('frontend.includes.header')

	<!-- End header -->

	<!-- Start Slider -->
    @include('frontend.includes.slider')
	
	<!-- End Slider -->

	<!-- Start About us -->
    @include('frontend.tentang')
	
	<!-- End About us -->

	<!-- Start Content/Portal -->
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
					  @foreach ($desas as $portal_desa)
					  	<div class="item">
							<div class="serviceBox">
								<div class="service-icon"><img src="{{ Storage::url($portal_desa->gambar) }}" aria-hidden="true"></img></div>
								<h3 class="title">{{ $portal_desa->kades }}</</h3>
								<p class="description">
									{{ $portal_desa->alamat }}.
								</p>
								<a href="{{ ($portal_desa->status ==1) ? $portal_desa->link : $portal_desa->link == 'disabled' }}" class="new-btn-d br-2">{{ $portal_desa->namadesa }}</a>
							</div>

						</div>
					  @endforeach	
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="team" class="team-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Pejabat Kabupaten Siak</h2>
						<p>Untuk Kabupaten Siak yang maju dan sejahtera dalam lingkungan Masyarakat yang Agamis dan Berbudaya Melayu <br>
							serta sebagai Tujuan Objek Wisata di Sumatera. </p>
					</div>
				</div>
			</div>
	
			<div class="row">
				<!-- SEKDA -->
				@foreach ($wabups as $portal_wabup)
				<div class="col-md-4 col-sm-6">
					<div class="our-team">
						<div class="pic">
							<img src="{{ Storage::url($portal_wabup->foto) }}" alt="">
						</div>
						<div class="team-content">
							<h3 class="title">{{ $portal_wabup->nama }}</h3>
							<span class="post">Wakil Bupati Siak</span>
							<ul class="social">
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				@endforeach	
				<!-- BUPATI -->
				
				@foreach ($bupatis as $portal_bupati)
				<div class="col-md-4 col-sm-6">
					<div class="our-team">
						<div class="pic">
							<img src="{{ Storage::url($portal_bupati->foto) }}" alt="">
						</div>
						<div class="team-content">
							<h3 class="title">{{ $portal_bupati->nama }}</h3>
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
				@endforeach
						
				<!-- WABUP -->
				@foreach ($sekdas as $portal_sekda)
				<div class="col-md-4 col-sm-6">
					<div class="our-team">
						<div class="pic">
							<img src="{{ Storage::url($portal_sekda->foto) }}" alt="">
						</div>
						<div class="team-content">
							<h3 class="title">{{ $portal_sekda->nama }}</h3>
							<span class="post">Sekretaris Dearah Siak</span>
							<ul class="social">
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>		
				</div>
				@endforeach

			</div>
		</div>
	</div>
	<!-- End Content/Portal -->

	<!-- Start Contact -->
	<div id="contact" class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Hubungi Kami</h2>
						<p>Silakan hubungi kami, Jika butuh bantuan dan ada yang ingin ditanya. </p>
					</div>
				</div>
			</div>
			<div class="row">

				<div class="col-lg-12 col-xs-12">
				  <div class="contact-block">
					<form id="contactForm">
					  <div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama" required data-error="Silakan masukkan nama anda">
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" placeholder="E-Mail" id="email" class="form-control" name="name" required data-error="Silakan Masukkan Email anda">
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="text" placeholder="Nomor Telepon" id="number" class="form-control" name="number" required data-error="Silakan masukkan nomor telepon anda">
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea class="form-control" id="message" placeholder="Pesan anda" rows="8" data-error="Silakan Tuliskan pesan anda" required></textarea>
								<div class="help-block with-errors"></div>
							</div>
							<div class="submit-button text-center">
								<button class="btn btn-common" id="submit" type="submit">Kirim Pesan</button>
								<div id="msgSubmit" class="h3 text-center hidden"></div>
								<div class="clearfix"></div>
							</div>
						</div>
					  </div>
					</form>
				  </div>
				</div>
				<div class="col-lg-12 col-xs-12">
					<div class="left-contact">
						<h2>Alamat</h2>
						<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-location-arrow" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>Alamat</h4>
								<a href="https://www.google.co.id/maps/place/Diskominfo+Siak/@0.8020986,102.0189615,17.33z/data=!4m5!3m4!1s0x31d426d7542fc7f9:0x8008aed46c647e25!8m2!3d0.802077!4d102.0207425?hl=en"><p>Sungai Mempura, Mempura, Kabupaten Siak, Riau 28773</p></a>
								
							</div>
						</div>
						<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>Email</h4>
								<a href="#">kominfo@siakkab.go.id</a>
							</div>
						</div>
						<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-volume-control-phone" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>Nomor Telepon / Hp</h4>
								<a href="#"> +62 822-1909-0985</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact -->

	<!-- Start Footer -->
	@include('frontend.includes.footer')

	<!-- End Footer -->

	<a href="#" id="scroll-to-top" class="new-btn-d br-2"><i class="fa fa-angle-up"></i></a>

	<!-- ALL JS FILES -->
	<script src="{{ asset('templateFE/') }}/js/jquery.min.js"></script>
	<script src="{{ asset('templateFE/') }}/js/popper.min.js"></script>
	<script src="{{ asset('templateFE/') }}/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="{{ asset('templateFE/') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('templateFE/') }}/js/jquery.pogo-slider.min.js"></script>
	<script src="{{ asset('templateFE/') }}/js/slider-index.js"></script>
	<script src="{{ asset('templateFE/') }}/js/smoothscroll.js"></script>
	<script src="{{ asset('templateFE/') }}/js/TweenMax.min.js"></script>
	<script src="{{ asset('templateFE/') }}/js/main.js"></script>
	<script src="{{ asset('templateFE/') }}/js/owl.carousel.min.js"></script>
	<script src="{{ asset('templateFE/') }}/js/form-validator.min.js"></script>
    <script src="{{ asset('templateFE/') }}/js/contact-form-script.js"></script>
	<script src="{{ asset('templateFE/') }}/js/isotope.min.js"></script>
	<script src="{{ asset('templateFE/') }}/js/images-loded.min.js"></script>
    <script src="{{ asset('templateFE/') }}/js/custom.js"></script>
</body>
</html>
