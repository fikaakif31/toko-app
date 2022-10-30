@extends('layouts.header')

@section ('contain1')
<header class="masthead bg-light text-black text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="{{asset('asset/img/logo.png')}}" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Wooly Wo Beauty</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-black">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <h3 class="masthead-subheading font-weight-light mb-0">Hello Gurls..! Welcome to My Beauty Online Shop</h3>
                <p class="masthead-subheading font-weight-light mb-0">Bodycare Trusted in Indonesia</p>
            </div>
        </header>

@endsection
@section('contain2')
<section class="bg-danger">
    <div class="container" style="padding:10px;">
     <div class="d-flex flex-row  justify-content-center">
        @foreach ($barang as $item)
        <div class="p-2">
                    <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{asset('asset/img_produk')}}/{{$item->foto}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$item->nama_barang}}</h5>
                <p class="card-text">{{$item->detail}}</p>
                <p class="card-text">Rp.{{$item->harga}},00</p>
                <p class="card-text">Stock : {{$item->stock}}</p>
                <a href="{{route('view', $item->id)}}" class="btn btn-primary">Beli</a>
            </div>
            </div>
        </div>
        @endforeach

        
      </div>
    </div>
</section>
@endsection

<!-- <?php var_dump($barang)?> -->

