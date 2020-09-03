@extends('layout/main')
@section('title', 'Daftar Prakerja')
@section('container')
  <div class="container">
    <div class="row">
        <div class="col-6">
      <h1 class="mt-3">Data Prakerja</h1>

        <a href="/prakerjas/" class="btn btn-primary my-3">Lihat Data</a>

        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
    </div>
      </div>
    </div
    @endsection
