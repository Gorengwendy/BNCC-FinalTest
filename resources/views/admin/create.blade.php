@extends('layouts/layout')

@section('content')
    <div class="container-fluid !direction !spacing">
        <a href="/" class="btn btn-success">Back</a>

        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form action="/create" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Nama: </label>
                <input type="text" class="form-control" id="" name="nama">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Harga: </label>
                <input type="text" class="form-control" id="" name="harga">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Category: </label>
                <input type="text" class="form-control" id="" name="category">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Stock: </label>
                <input type="text" class="form-control" id="" name="stock">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Picture: </label>
                <input type="file" class="form-control" id="" name="picture">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
