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
     <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
            
        </div>       
    </div>
</div>

@endsection

