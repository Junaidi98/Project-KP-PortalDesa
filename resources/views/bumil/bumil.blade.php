<x-app-layout>
    <div>
        @extends('posts.layout')
    </div>

</div>

<div class="mobile-menu-overlay"></div>

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <!-- Simple Datatable start -->
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Daftar Ibu Hamil</h4>
                </div>
                                 @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif
                    <div class="pull-right mr-20">
                        <a class="btn btn-success" href=""> Tambah Pasien</a>
                        <br><br>
                    </div>
                <div class="pb-20">
                    <table class="checkbox-datatable table nowrap ">
                        <div class="table-responsive">

        <thead>
            <tr>
                <th>chekbox</th>
                <th>No</th>
                <th>Tanggal Daftar</th>
                <th>Nama Bumil/Nama Suami</th>
                <th>Alamat</th>
                <th>Kehamilan ke/Usia Kandungan</th>
                <th>Taksiran</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

        </table>
        </div>
    </div>




</x-app-layout>
