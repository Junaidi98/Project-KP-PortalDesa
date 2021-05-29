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
                    <a class="btn btn-primary" href="{{ route('tentang.index') }}"> Back</a>
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
    <form action="{{ route('tentang.update',$tentang->id) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <strong>Konten:</strong>
                    <textarea name="konten" rows="8" cols="80" value="{{ $tentang->konten }}"></textarea>
                </div>


                <div class="form-group">
                    <strong>Foto:</strong>
                    <div class="form-group">
                        <img src="{{ Storage::url($tentang->foto_tentang) }}" height="100" width="100" alt="" />
                    </div>
                    <input type="file" class="form-control-file form-control height-auto" value="{{ $tentang->foto_tentang}}" name="foto_tentang" placeholder="Foto">
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
