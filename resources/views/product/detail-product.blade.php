@extends('layouts.app')
@section('content')

<div class="container">
<div class="row justify-content-center">

    <div class="col-md-6">
        <div class="card text-center">
            <div class="card-header">Product Photo</div>
            <div class="card-body">
                <img src="{{ asset("images/$product->photo") }}" width="200px" height="150px">
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card text-center">
            <div class="card-header">Details Information</div>
            <div class="card-body">
                <div class="card-text">Name: {{ $product->name }}</div>
                <div class="card-text">Price: {{ $product->price }}</div>
                <div class="card-text">Qty: {{ $product->qty }}</div>
            </div>
        </div>
    </div>

</div> 
</div>

<br>

<div class="container">
<div class="row justify-content-center">

   <div class="col-md-12 text-center">

    <form method="get" enctype="multipart/form-data" action="{{ url("/product/addToCartQty/{$product->id}") }}" >
        {{ csrf_field() }}

        <span>
            Quantity : 
            <input type="number" name="pqty"  min="1" max="{{ $product->qty }}" value="1">
        </span>   

            <input  type="submit"  value="Add to Cart" class="btn btn-primary" >

    </form>

   </div>

</div> 
</div>

@endsection