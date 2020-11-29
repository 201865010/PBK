@extends('layout.main')

@section('title', 'Input Data')

@section('container')

<div class="container">
    <div class="row"> 
        <div class="col-7">
            <h1 class="mt-3">Input Data</h1>

<form method="post" action="/mahasiswa">
@csrf
  <div class="form-group">
    <label for="nim">NIM</label>
    <input type="text" class="form-control" id="nim" placeholder="nim" name="nim">
  </div>
 
  <div class="form-group">
    <label for="nama lengkap">Nama Lengkap</label>
    <input type="text" class="form-control" id="nama lengkap" placeholder="Nama Lengkap" name="nama_lengkap">
  </div>

  <button type="submit" class="btn btn-primary">Save</button>
</form>
            
        </div>       
    </div>
</div>

@endsection

