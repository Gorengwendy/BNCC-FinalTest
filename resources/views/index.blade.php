@extends('layouts/layout')
@section('content')
    <div class="jumbotron">
        <h1>Halo, Selamat datang ke dunia lain</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam repellat perspiciatis nesciunt esse
            expedita dignissimos nam porro nostrum, suscipit fuga illum ratione omnis! Molestias, corrupti nam? Nisi
            suscipit optio laborum?</p>
    </div>


    <div class="container-fluid !right !spacing">
        @if (Auth::user()->is_admin)
            <a href="/create" class="btn btn-primary">+ Insert New Item</a>
        @endif
        <div class="row">
            @foreach ($items as $item)
                <div class="col-md-4">
                    <div class="card" style="width: 100%;">
                        <img src="{{ Storage::url('image/' . $item->image_name) }}" class="card-img-top"
                            alt="{{ $item->name }}" style="height: 18rem">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->nama }}</h5>
                            <p class="card-text">Harga: Rp.{{ $item->harga }}</p>
                            <p class="card-text">Stock: {{ $item->stock }}</p>
                            <a href="#" class="btn btn-primary">Print Faktur</a>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>


    </div>
@endsection
