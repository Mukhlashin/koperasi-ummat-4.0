@extends('layouts.default')

@section('title', 'Add Product')

<style>
  .btn{
    background-color: #315343;
    color: white;
  }
</style>

<form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
  {{ csrf_field()}}

  <div class="card">
    <div class="card-body">
      <div class="col m-3">

        <label for="" class="">Nama produk</label>
        <input type="text" name="nama_barang" id="nama_barang" class="form-control">

        <label for="" class="">Harga</label>
        <input type="number" step="any" name="harga" id="harga" class="form-control">

        <label for="" class="">Stok</label>
        <input type="number" name="stok" id="stok" class="form-control">

        <label for="" class="">Deskripsi</label>
        <input type="text" name="deskripsi" id="deskripsi" class="form-control">

         <label for="" class="">Foto</label>
        <input type="file" name="foto" id="foto" class="form-control">
      </div>
      <div class="card-footer">
        <button type="submit" class="btn"> 
          SUBMIT
        </button>
      </div>
    </div>
  </div>
</form>