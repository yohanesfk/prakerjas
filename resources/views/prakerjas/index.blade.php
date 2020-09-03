@extends('layout/main')
@section('title', 'Daftar Prakerjas')
@section('container')
  <div class="container">
    <div class="row">
        <div class="col-6">
      <h1 class="mt-3">Data Prakerjas</h1>

        <a href="/prakerjas/create" class="btn btn-primary my-3">Tambah Data</a>

        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif



            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">No Hp</th>
                    <th scope="col">Password</th>
                    <th scope="col">Agen</th>
                    <th scope="col">Tagihan</th>
                    <th scope="col">StatusPengerjaan</th>
                    <th scope="col">TombolAction..............</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach( $prakerjas as $prakerja )
                  <tr>

                    <th scope="row">{{ $prakerja->id }}</th>
                    <td>{{ $prakerja -> nama }}</td>
                    <td>{{ $prakerja -> email }}</td>
                    <td>{{ $prakerja -> nohp }}</td>
                    <td>{{ $prakerja -> password }}</td>
                    <td>{{ $prakerja -> agen }}</td>
                    <td>{{ $prakerja -> tagihan }}</td>
                    <td>{{ $prakerja -> status }}</td>
                    <td><a href="/prakerjas/{{$prakerja->id}}/edit" class="btn btn-primary">Edit</a>
                        <form action="{{ $prakerja->id }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                          <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                  </tr> @endforeach
                </tbody>
              </table>

    </div>
      </div>
    </div
    @endsection
