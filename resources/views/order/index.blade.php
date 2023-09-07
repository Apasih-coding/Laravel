@extends('layouts.app')
@section('title', 'Order')

@section('content')
<div class="container justify-content-center">
    <form action="{{route('add.order')}}" method="post">
        @csrf
        <div class="row mb-3">
            <label for="no_pesanan" class="col-sm-2 col-form-label">No Pesanan</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="no_pesanan" name="no_pesanan" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-10">
            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="nm_supplier" class="col-sm-2 col-form-label">Nama Supplier</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="nm_supplier" name="nm_supplier" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="nm_produk" class="col-sm-2 col-form-label">Nama Produk</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="nm_produk" name="nm_produk" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="total" class="col-sm-2 col-form-label">Total</label>
            <div class="col-sm-10">
            <input type="text" name="total" id="total" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection