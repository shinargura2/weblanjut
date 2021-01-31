@extends('layout.t_template')
@section('title', 'Transaksi')
@section('content')
	<h1>Data Transaksi</h1>
	<div class="card-body">
		
		{!! Form::open(['url' => '/prosestambahtransaksi']) !!}
		<div class="col-2">
			
		ID Transaksi :
		{!! Form::text('idtransaksi','',['placeholder'=> 'ID Transaksi','class' => 'form-control']) !!}
		
		</div>

		<div class="col-2">
			
		ID Barang :
		{!! Form::text('idbarang','',['placeholder'=> 'ID Barang','class' => 'form-control']) !!}
			</div>

		<div class="col-4">
			
		Nama Barang :
		{!! Form::text('namabarang','',['placeholder'=> 'Nama Barang','class' => 'form-control']) !!}
			</div>
		<div class="col-2">

		Jumlah Transaksi :
		{!! Form::number('jumlahtransaksi','',['placeholder'=> 'Masukkan Angka','class' => 'form-control']) !!}
		</div>

		<div class="col-2">
		Status :
		{!! Form::text('status','',['placeholder'=> 'status','class' => 'form-control']) !!}
		</div>
		
		<p></p>
		<div class="col-2">
		
		<p></p>
		{!! Form::submit('Tambah Data', ['class' => 'btn btn-primary']) !!}

		{!! Form::close() !!}
		
		</div>
		
		</div>

		<div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" align="center">Tabel Transaksi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table align="center" id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                  	<th>No.</th>
                    <th>ID Transaksi</th>
                    <th>ID Barang</th>
                    <th>Nama Barang</th>
                    <th>Jumlah Transaksi</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  	<?php $nomor=1; ?>
                  	@foreach($transaksis as $key)
                  <tr>
                  	<td>{{$nomor++}}</td>
                    <td>{{$key->id_transaksi}}</td>
                    <td>{{$key->id_barang}}</td>
                    <td>{{$key->nama_barang}}</td>
                    <td>{{$key->jumlah_transaksi}}</td>
                    <td>{{$key->status}}</td>
                    <td><a href="/transaksi/edit/{{$key->id_transaksi}}" class="btn btn-success">Edit</a>||<a href="/transaksi/hapus/{{$key->id_transaksi}}" class="btn btn-danger">Hapus</a></td>
                  </tr>
                  @endforeach
                </table>
@endsection