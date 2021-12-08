@extends('templates.main')

@section('navbar')
 @include('templates.navbar')
@endsection

@section('container')
<main class="form-signin">
<h2>Tambah Data</h2>
  <form method="post" action="{{url('simpan')}}">
    {{csrf_field()}}
    <div class="mb-3">
      <label for="nama" class="form-label">Nama Barang</label>
      <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required autofocus>
      @error('nama')
      <div class="invalid-feedback">
        harus di isi
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="jumlah" class="form-label">Jumlah Barang</label>
      <input type="text" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah" name="jumlah" required>
      @error('jumlah')
      <div class="invalid-feedback">
        harus di isi
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="harga" class="form-label">Harga Barang</label>
      <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" required>
      @error('harga')
      <div class="invalid-feedback">
        harus di isi
      </div>
      @enderror
    </div>
    <button type="submit" class="btn btn-white btn-circled">Tambah</button>
  </form>  
  
</main>

@endsection