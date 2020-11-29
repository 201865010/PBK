@extends('layout.main')

@section('title', 'Data Mahasiswa')

@section('container')

<div class="container">
    <div class="row"> 
        <div class="col-5">
            <h1 class="mt-3">Data Mahasiswa</h1>
            

            <ul class="list-group">
@foreach( $students as $student)

  <li class="list-group-item d-flex justify-content-between align-items-center">

  {{ $student->nama_lengkap}}
  <a href="/students/{{ $student->id }}" class="badge badge-info">detail</a>
  </li>

  @endforeach
</ul>
<!-- <a href="/mahasiswa" class="badge badge">Kembali</a>  -->
        </div>       
    </div>
</div>

@endsection

