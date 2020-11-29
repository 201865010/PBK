@extends('layout.main')

@section('title', 'Daftar Mahasiswa')

@section('container')

<div class="container">
    <div class="row"> 
        <div class="col-10">
            <h1 class="mt-3">Daftar Mahasiswa</h1>

            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>

                <tbody> 
                    @foreach ($mahasiswa as $mhs)              
                    <tr>                  
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $mhs->nim}}</td>
                        <td>{{ $mhs->nama_lengkap}}</td>
                                              
                        <td>
                            <a href="" class="badge badge-info">detail</a>
                            <a href="" class="badge badge-success">Edit</a>
                            <a href="" class="badge badge-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                <tbody> 
            </table>
        </div>
        
    </div>
    <a href="/mahasiswa/create" class="btn btn-primary">+Tambah</a>

</div>

@endsection

