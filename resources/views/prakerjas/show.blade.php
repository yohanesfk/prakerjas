@extends('layout/main')
@section('title', 'Detail Prakerjas')
@section('container')
  <div class="container">
    <div class="row">
        <div class="col-6">
      <h1 class="mt-3">Data Prakerjas</h1>
      <table class="table">
          <thead class="thead-dark">

            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{$prakerja->nama}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{$prakerja->nrp}}</h6>
                  <p class="card-text">{{$prakerja->email}}</p>
                  <p class="card-text">{{$prakerja->jurusan}}</p>

                  <a href="/prakerjas/{{$prakerja->id}}/edit" class="btn btn-primary">Edit</a>
                <form action="{{ $prakerja->id }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <button type="" class="btn btn-warning"><a href="/prakerjas" class="card-link">Kembali</a></button>
                </div>
              </div>

    </div>
      </div>
    </div
    @endsection
