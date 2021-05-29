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
                    <h4 class="text-blue h4">Bupati</h4>
                </div>
                                 @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif
                    <div class="pull-right mr-20">
                        <a class="btn btn-success" href="{{ route('bupati.create') }}"> Tambah</a>
                        <br><br>
                    </div>
                <div class="pb-20">
                    <table class="checkbox-datatable table nowrap ">
                        <div class="table-responsive">

        <thead>
            <tr>
                <th>Nama</th>
                <th>Foto</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bupatis as $post)
            <tr>

                <td>{{ $post->nama }}</td>
                <td><img src="{{ Storage::url($post->foto) }}" height="75" width="75" alt="" /></td>
                <td>{{ $post->created_at}}</td>

                    <form action="{{ route('bupati.destroy',$post->id) }}" method="POST">

                        <td>
                            <div class="dropdown">
                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                    <i class="dw dw-more"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                    <a class="dropdown-item" href="{{ route('bupati.show',$post->id) }}" class="btn-block" ><i class="dw dw-eye"></i> Detail</a>
                                    <a class="dropdown-item" href="{{ route('bupati.edit',$post->id) }}"><i class="dw dw-edit2"></i> Edit</a>
                                    @csrf
                                </div>
                            </div>
                        </td>
                    </form>
            </tr>
            @endforeach
        </table>

        {!! $bupatis->links() !!}
        </div>
    </div>


    @endsection

</x-app-layout>
