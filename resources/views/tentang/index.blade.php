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
                    <h4 class="text-blue h4">Kontent</h4>
                </div>
                                 @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif
                    <div class="pull-right mr-20">
                        <br><br>
                    </div>
                <div class="pb-20">
                    <table class="checkbox-datatable table nowrap ">
                        <div class="table-responsive">

        <thead>
            <tr>


                <th>Konten</th>
                <th>Foto</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tentangs as $post)
            <tr>

                <td>{{ $post->konten }}</td>
                <td><img src="{{ Storage::url($post->foto_tentang) }}" height="75" width="75" alt="" /></td>
                <td>{{ $post->created_at}}</td>

                    <form action="{{ route('tentang.destroy',$post->id) }}" method="POST">

                        <td>
                            <div class="dropdown">
                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                    <i class="dw dw-more"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                    <a class="dropdown-item" href="{{ route('tentang.edit',$post->id) }}"><i class="dw dw-edit2"></i> Edit</a>
                                    @csrf
                                </div>
                            </div>
                        </td>
                    </form>
            </tr>
            @endforeach
        </table>

        {!! $tentangs->links() !!}
        </div>
    </div>


    @endsection

</x-app-layout>
