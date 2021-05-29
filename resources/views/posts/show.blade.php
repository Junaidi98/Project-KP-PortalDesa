@extends('posts.layout')
@section('content')
<div class="main-container">
    <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Post</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
            </div>
        </div>
    </div>

                        <div class="modal-body">
                            <div class="da-card box-shadow">
								<div class="da-card-photo">
                                <img src="{{ Storage::url($post->image) }}" >
                            </div>
                            </div>
                            <h5 class="text-center h5 mb-0">{{ $post->nama_pasiens }}/{{ $post->nama_suamis }}</h5>
                            <p class="text-center text-muted font-14">NIK : {{ $post->niks }} </p>
                            <div class="profile-info">
                                <h5 class="mb-20 h5 text-blue">Informasi Data Pasien</h5>
                                <ul>
                                    <li>
                                        <span>Tanggal Lahir:</span>
                                        {{ $post->tpt_lahirs }},{{ $post->tgl_lahirs }}
                                    </li>
                                    <li>
                                        <span>Umur:</span>
                                        {{ $post->umurs }} Tahun
                                    </li>
                                    <li>
                                        <span>Alamat:</span>
                                        RT/RW : {{ $post->rts}}/{{ $post->rws}}<br>{{ $post->alamat_povs}},{{ $post->alamat_kabs}}<br>Kecamatan {{ $post->alamat_kecs}}<br> Kampung {{ $post->desas}}
                                    </li>
                                    <li>
                                        <span>No HP:</span>
                                        {{ $post->hps}}
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
