{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Blog Post Form - Laravel 8 CRUD Tutorial</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>

<div class="container mt-2">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Post</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('posts.index') }}" enctype="multipart/form-data"> Back</a>
            </div>
        </div>
    </div>

  @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
  @endif

    <form action="{{ route('posts.update',$post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Post Title:</strong>
                    <input type="text" name="title" value="{{ $post->title }}" class="form-control" placeholder="Post Title">
                    @error('title')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Post Description:</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Post Description">{{ $post->description }}</textarea>
                    @error('description')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Post Image:</strong>
                 <input type="file" name="image" class="form-control" placeholder="Post Title">
                @error('image')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
            <div class="form-group">

              <img src="{{ Storage::url($post->image) }}" height="200" width="200" alt="" />


            </div>
        </div>

              <button type="submit" class="btn btn-primary ml-3">Submit</button>

        </div>

    </form>
</div>

</body>
</html> --}}
@extends('posts.layout')

@section('content')
</div>
<div class="main-container">
    <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Post</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
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
    <form action="{{ route('posts.update',$post->id) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <strong>Nik:</strong>
                    <input type="number" name="niks" value="{{ $post->niks }}" class="form-control" placeholder="Nik">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <strong>Nama Pasien:</strong>
                    <input type="text" class="form-control"  name="nama_pasiens" value="{{ $post->nama_pasiens }}" placeholder="Nama Pasien">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <strong>Nama Suami:</strong>
                    <input type="text" class="form-control"  value="{{ $post->nama_suamis }}" name="nama_suamis"  placeholder="Nama Suami">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input class="form-control date-picker" name="tgl_lahirs" autocomplete="off" value="{{ $post->tgl_lahirs }}" placeholder="Select Date" type="text">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <strong>Tempat Lahir:</strong>
                    <input type="text" class="form-control"  name="tpt_lahirs" value="{{ $post->tpt_lahirs }}" placeholder="Tempat Lahir">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <strong>Umur:</strong>
                    <input type="number" class="form-control"  name="umurs" value="{{ $post->umurs }}" placeholder="Umur">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <strong>Provinsi:</strong>
                    <input type="text" class="form-control"  name="alamat_povs" value="{{ $post->alamat_povs}}" placeholder="Provinsi">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <strong>Kabupaten:</strong>
                    <input type="text" class="form-control"  name="alamat_kabs" value="{{ $post->alamat_kabs}}" placeholder="Kabupaten">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <strong>Kecamatan:</strong>
                    <input type="text" class="form-control"  name="alamat_kecs" value="{{ $post->alamat_kecs}}" placeholder="Kecamatan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <strong>Desa:</strong>
                    <input type="text" class="form-control"  name="desas" value="{{ $post->desas}}" placeholder="desa">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <strong>RW:</strong>
                    <input type="number" class="form-control"  name="rws" value="{{ $post->rws}}" placeholder="RW">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <strong>RT:</strong>
                    <input type="number" class="form-control" value="{{ $post->rts}}" name="rts" placeholder="RT">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <strong>No Handphon:</strong>
                    <input type="tel" class="form-control" value="{{ $post->hps}}" name="hps" placeholder="No HP">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <strong>Foto:</strong>
                    <div class="form-group">
                        <img src="{{ Storage::url($post->image) }}" height="200" width="200" alt="" />
                    </div>
                    <input type="file" class="form-control-file form-control height-auto" value="{{ $post->image}}" name="image" placeholder="Foto">
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
