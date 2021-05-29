<x-app-layout>
    <div>
        @extends('posts.layout')
    </div>


    @section('content')

</div>

<div class="mobile-menu-overlay"></div>

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <!-- Simple Datatable start -->
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Daftar Desa</h4>
                </div>
                                 @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif
                    <div class="pull-right mr-20">
                        <a class="btn btn-success" href="{{ route('desas.create') }}"> Tambah Desa</a>
                        <br><br>
                    </div>
                <div class="pb-20">
                    <table class="checkbox-datatable table nowrap ">
                        <div class="table-responsive">

        <thead>
            <tr>
                <th>chekbox</th>
                <th>No</th>
                <th>Nama Desa</th>
                <th>Foto</th>
                <th>Kepala Desa</th>
                <th>Alamat</th>
                <th>Link</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($desas as $post)
            <tr>
                <td></td>
                <td>{{ $no++ }}</td>
                <td>{{ $post->namadesa}}</td>
                <td><img src="{{ Storage::url($post->gambar) }}" height="75" width="75" alt="" /></td>
                <td> {{ $post->kades }}</td>
                <td>{{ $post->alamat }}</td>
                <td>{{ $post->link}}</td>
                <td><label class="label {{ ($post->status==1) ? 'label-success' : 'label-danger' }}">{{ ($post->status == 1) ? 'Aktif' : 'Tidak Aktif'}}</label></label></td>

                    <form action="{{ route('desas.destroy',$post->id) }}" method="POST">

                        <td>
                            <div class="dropdown">
                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                    <i class="dw dw-more"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                    <a class="dropdown-item" href="{{ route('desas.show',$post->id) }}" class="btn-block" ><i class="dw dw-eye"></i> Detail</a>
                                    <a class="dropdown-item" href="{{ route('desas.edit',$post->id) }}"><i class="dw dw-edit2"></i> Edit</a>
                                    @csrf
                                    @method('DELETE')

                                  <button type="submit" class="dropdown-item"><i class="dw dw-delete-3"></i>Delete</button>
                                </div>
                            </div>
                        </td>
                    </form>
            </tr>
            @endforeach
        </table>

        {!! $desas->links() !!}
        </div>
    </div>


    @endsection

</x-app-layout>
