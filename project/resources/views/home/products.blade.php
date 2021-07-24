@extends('layouts.app')
<style>
    .img{
            width: 14.5rem;
            height:15rem;
        }
    figcaption{
        font-size:.8rem;
    }
    .btn{
        display:block;
        width:100%;
        margin-bottom:.5rem;
    }
    ul{
        list-style: none;
    }
    #cart:hover{
        transform:scale(1.1);
        transition: all .6s;
    }
</style>
@section('content')
        <div style="padding:5rem;">
        <div class="row">
            <div class="col-md">
                @foreach($products->chunk(4) as $row)
                    <div class="row  mt-3">
                        @foreach($row as $product)
                            <div class="col-3" id="cart">
                                    <div class="col-10 col-sm-7 col-md col-lg border shadow animate bg-white" style="height:25rem;">
                                        <figure>
                                            <image src="{{ $product->image }}" class="img">
                                        </figure>
                                        <figcaption>  
                                            <h6 class="card-title float-right">{{ $product->title }}</h6><br>
                                            <p class="card-text float-left">تومان {{ $product->price }} </p>
                                            <a href="/products/{{ $product->id }}" class="btn btn-primary" id="btn">جزئیات محصول</a>
                                        </figcaption>
                                        
                                    </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
