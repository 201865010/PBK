@extends('layout.main')

@section('title', 'detail Mahasiswa')

@section('container')

<div class="container">
    <div class="row"> 
        <div class="col-5">
            <h1 class="mt-3">Detail Mahasiswa</h1>

            <div class="card">
  <div class="card-body">
    <h5 class="card-title">{{ $student->nim }}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{ $student->nama_lengkap }}</h6>

     <button type="submit" class="btn btn-primary">Edit</button>
     <button type="submit" class="btn btn-danger">Delete</button>
    <a href="/students" class="badge badge-info">Kembali</a>
  </div>
</div>
            
        </div>       
    </div>
</div>

@endsection

