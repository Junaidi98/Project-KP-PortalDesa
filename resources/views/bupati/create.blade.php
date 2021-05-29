@extends('posts.layout')
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="{{asset('style/vendors/styles/core.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('style/vendors/styles/icon-font.min.css')}}">


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-119386393-1');
</script>
<link rel="stylesheet" type="text/css" href="{{asset('style/src/plugins/jquery-steps/jquery.steps.css')}}">
@section('content')
</div>
<div class="main-container">

    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <h4 class="text-blue h4">Daftar Desa</h4>
        </div>
        <div class="wizard-content">
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Error!</strong> <br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form class="tab-wizard wizard-circle wizard" action="{{ route('wabup.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
                <h5>Wakil Bupati</h5>
							<section>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<strong>Nama:</strong>
                                            <input type="text" name="nama" class="form-control" placeholder="Nama">
			                            </div>
									</div>
                                    <section>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <strong>Foto:</strong>
                                                    <input type="file" class="form-control-file form-control height-auto"  name="foto"  placeholder="Foto" ></textarea>
                                                    @error('foto')
                                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                 @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </section>
							</section>

                            <div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body text-center font-18">
                                            <h3 class="mb-20">Periksa terlebih dahulu</h3>
                                            <div class="mb-30 text-center"><img src="vendors/images/success.png"></div>
                                            Lengkap nggak
                                        </div>
                                        <div class="modal-footer justify-content-center">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</form>
					</div>
				</div>

                <div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body text-center font-18">
                                <h3 class="mb-20">Periksa terlebih dahulu</h3>
                                <div class="mb-30 text-center"><img src="vendors/images/success.png"></div>
                                Lengkap nggak
                            </div>
                            <div class="modal-footer justify-content-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
<!-- success Popup html Start -->
<div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-body text-center font-18">
    <h3 class="mb-20">Form Submitted!</h3>
    <div class="mb-30 text-center"><img src="vendors/images/success.png"></div>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
</div>
<div class="modal-footer justify-content-center">
    <button type="submit" class="btn btn-primary" action="{{ route('wabup.store') }}" method="POST">Submit</button>
</div>
</div>
</div>
</div>
<!-- success Popup html End -->

<link rel="stylesheet" type="text/css" href="{{asset('style/vendors/styles/style.css')}}">
<!-- js -->
<script src="{{asset('style/vendors/scripts/core.js')}}"></script>
<script src="{{asset('style/vendors/scripts/script.min.js')}}"></script>
<script src="{{asset('style/vendors/scripts/process.js')}}"></script>
<script src="{{asset('style/vendors/scripts/layout-settings.js')}}"></script>	<script src="{{asset('style/src/plugins/jquery-steps/jquery.steps.js')}}"></script>
<script src="{{asset('style/vendors/scripts/steps-setting.js')}}"></script>

@endsection


{{-- @error('description')
     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror --}}
