@extends('layout/main')
@section('title', 'Form Ubah Prakerjas')
@section('container')
  <div class="container">
    <div class="row">
        <div class="col-8">
      <h1 class="mt-3">Form Ubah Data Prakerjas</h1>

      <form method="post" action="/prakerjas/{{ $prakerja->id }}">
        @method('patch')
        @csrf
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{$prakerja->nama}}">
        @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email" name="email" value="{{$prakerja->email}}">
            @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="form-group">
            <label for="nohp">nohp</label>
            <input type="text" class="form-control @error('nohp') is-invalid @enderror" id="nohp" placeholder="Masukkan nohp" name="nohp" value="{{$prakerja->nohp}}">
             @error('nohp')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="form-group">
            <label for="password">password</label>
            <input type="text" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Masukkan password" name="password" value="{{$prakerja->password}}">
            @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="form-group">
            <label for="agen">agen</label>
            <input type="text" class="form-control @error('agen') is-invalid @enderror" id="agen" placeholder="Masukkan agen" name="agen" value="{{$prakerja->agen}}">
            @error('agen')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="form-group">
            <label for="tagihan">tagihan</label>
            <input type="text" class="form-control @error('tagihan') is-invalid @enderror" id="tagihan" placeholder="Masukkan tagihan" name="tagihan" value="{{$prakerja->tagihan}}">
            @error('tagihan')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="form-group">
            <label for="status">status</label>
            <input type="text" class="form-control @error('status') is-invalid @enderror" id="status" placeholder="Masukkan status" name="status" value="{{$prakerja->status}}">
            @error('status')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
          <button type="submit" class="btn btn-primary">Ubah Data!</button>
      </form>

    </div>
      </div>
    </div
    @endsection
