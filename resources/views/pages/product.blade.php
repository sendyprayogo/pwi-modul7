@extends('layouts.master')

@section('content')
<h1>Daftar produk kami</h1>
<hr>
<a href="/product/addProduct" type="button" class="btn btn-primary mb-3">Tambah Data</a>
<div class="card">
    <card class="card-header">
        Produk Kami
    </card>
    <div class="alert alert-primary">
        <b>Nama Tokok : </b> {{$sName}}
        <br>
        <b>Alamat Toko : </b> {{$sAdress}}
        <br>
        <b>Status Toko : </b> {{$sStatus}}
    </div>
    <div class="card-body">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Biji Kopi Arabika Brazil</td>
                    <td>10</td>
                    <td>Rp. 68.000</td>
                    <td>Kopi brazil yang dikemas dalam 100gram.</td>
                    <td>
                        <button style="button" class="btn btn-danger">Delete</button>
                        <button style="button" class="btn btn-warning">Edit</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Pucuk Teh Inggris</td>
                    <td>19</td>
                    <td>Rp. 96.000</td>
                    <td>Teh Inggris yang dikemas dalam 100gram.</td>
                    <td>
                        <button style="button" class="btn btn-danger">Delete</button>
                        <button style="button" class="btn btn-warning">Edit</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Sendok teh</td>
                    <td>4</td>
                    <td>Rp. 5.000</td>
                    <td>Sendok teh untuk 10gram</td>
                    <td>
                        <button style="button" class="btn btn-danger">Delete</button>
                        <button style="button" class="btn btn-warning">Edit</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Filter Kopi</td>
                    <td>8</td>
                    <td>Rp. 23.000</td>
                    <td>100 pcs filter kopi merk kova</td>
                    <td>
                        <button style="button" class="btn btn-danger">Delete</button>
                        <button style="button" class="btn btn-warning">Edit</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection