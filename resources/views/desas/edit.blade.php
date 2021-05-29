@extends('posts.layout')

@section('content')
</div>
<div class="main-container">
    <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit </h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('desas.index') }}"> Back</a>
                </div>
            </div>
        </div>

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
    <form action="{{ route('desas.update',$desa->id) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <strong>Nama Desa:</strong>
                    <input type="text" name="namadesa" value="{{ $desa->namadesa }}" class="form-control" placeholder="Nama Desa">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <strong>Kepala Desa:</strong>
                    <input type="text" class="form-control"  name="kades" value="{{ $desa->kades }}" placeholder="Kepala Desa">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <strong>Alamat:</strong>
                    <input type="text" class="form-control"  value="{{ $desa->alamat }}" name="alamat"  placeholder="Alamat">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <strong>Link:</strong>
                    <input type="text" class="form-control"  name="link" value="{{ $desa->link }}" placeholder="Link">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <label><strong>Status</strong></label>
                    <select class="form-control select2" name="status" style="width: 100%;">
                        <option selected="selected">Pilih</option>
                        <option value="1">Aktif</option>
                        <option value="0">Tidak AKtif</option>

                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <strong>Foto:</strong>
                    <div class="form-group">
                        <img src="{{ Storage::url($desa->gambar) }}" height="200" width="200" alt="" />
                    </div>
                    <input type="file" class="form-control-file form-control height-auto" value="{{ $desa->gambar}}" name="gambar" placeholder="Gambar">
                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
    </div>
</div>
@endsection
