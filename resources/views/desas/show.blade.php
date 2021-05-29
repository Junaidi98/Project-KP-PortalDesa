@extends('posts.layout')
@section('content')
<div class="main-container">
    <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Desa</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('desas.index') }}"> Back</a>
            </div>
        </div>
    </div>

                        <div class="modal-body">
                            <div class="da-card box-shadow">
								<div class="da-card-photo">
                                <img src="{{ Storage::url($desa->gambar) }}" >
                            </div>
                            </div>
                            <div class="profile-info">
                                <h5 class="mb-20 h5 text-blue">Informasi Data Desa</h5>
                                <ul>
                                    <li>
                                        <span>Nama Desa:</span>
                                        {{ $desa->namadesa }}
                                    </li>
                                    <li>
                                        <span>Kepala Desa:</span>
                                        {{ $desa->kades }}
                                    </li>
                                    <li>
                                        <span>Alamat:</span>
                                        {{ $desa->alamat }}
                                    </li>
                                    <li>
                                        <span>Link Website Desa:</span>
                                        {{ $desa->link}}
                                    </li>
                                    <li>
                                        <span>Status Website Desa:</span>
                                        {{ $desa->status}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection
