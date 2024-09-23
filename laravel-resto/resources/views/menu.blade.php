@extends('front')

@section('content')
<div class="row">
    @foreach ($menus as $menu)
        <div class="card mx-2 mb-3" style="width: 18rem;">
            <img src="{{ asset('gambar/'.$menu->gambar) }}" height="200px" class="card-img-top mt-3" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{ $menu->menu }}</h5>
            <p class="card-text">{{ $menu->deskripsi }}</p>
            <p class="card-text">{{ $menu->harga }}</p>
            <a href="{{ url('beli/'.$menu->idmenu) }}" class="btn btn-primary">Beli</a>
            </div>
        </div>
    @endforeach
    <div class="d-flex justify-content-center mt-5">
        {{ $menus->links() }}
    </div>
</div>
@endsection