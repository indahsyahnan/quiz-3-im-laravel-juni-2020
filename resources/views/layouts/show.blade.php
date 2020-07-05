@extends('layouts.master')

@section('content')
	<div class="ml-3 mt-3">
		<h3>Detail Artikel</h3>
		<button type="button" class="btn btn-primary" style="margin-bottom: 15px"><a href="/artikel" style="color: white">Kembali</a></button>
		<p>Judul Pertanyaan : {{$artikel->judul}} </p>
		<p>Isi Pertanyaan : {{$artikel->isi}} </p>
		<p>Tanggal Dibuat : {{$artikel->slug}} </p>
		<p>Tanggal Diperbaharui : {{$artikel->tag}} </p>
	</div>
@endsection