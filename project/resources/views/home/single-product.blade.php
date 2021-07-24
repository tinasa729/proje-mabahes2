@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header d-flex justify-content-between">
                        {{ $product->title }}
                        @if($product->inventory == '0')
                        <span class="btn btn-sm btn-danger"> نـا موجـود</span>
                        @else
                        <form action="{{ route('cart.add' , $product->id) }}" method="POST" id="add-to-cart">
                            @csrf
                        </form>
                        <span onclick="document.getElementById('add-to-cart').submit()" class="btn btn-sm btn-danger">اضافه کردن به سبد خرید</span>
                        @endif
                    </div>

                    <div class="card-body">
                        <img src="{{ $product->image }}" alt="" class="img col-lg-5">
                        <p style="float:right;padding:3rem">{{ $product->description }}</p>
                    </div>
                    
                    <div class="card-body">
                        @if( $product->categories)
                            @foreach( $product->categories as $cate)
                                <button class="btn btn-info">{{ $cate->name }}</button>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
