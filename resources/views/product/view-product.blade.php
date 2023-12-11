@extends('layouts.app')
@section('content')

<div class="container">
<div class="d-flex flex-row justify-content-center flex-wrap my-flex-container">

    @foreach($products as $product)
    <div class="my-flex-item p-1" style="width: 165px; ">
    <div class="card text-center">

            <a class="card-text" style="font-size: 60%;text-decoration: none;" href="{{ url("/product/detail/view/{$product->id}") }}" >

                <img style="width: 145px; height: 130px;" class="card-img-top" src="{{ asset("/images/$product->photo") }}"  > 

                <div class="card-body">                
                    <p class="card-title text-danger" >
                        {{ number_format($product->price) }} MMK
                    </p>                
                
                    <p class="card-text d-inline-block text-truncate" style="font-size: 80%;max-width: 80%;">
                        {{ $product->name }}
                    </p>     
                </div>
                    
            </a>

    </div>
    </div>
    @endforeach


</div> 
</div>

@endsection