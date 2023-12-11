@extends('layouts.app')
@section('content')


<form method="post" enctype="multipart/form-data">
{{ csrf_field() }}


<div class="container">
<div class="row text-center">

    <div class="col-12">
        <table class="table table-hover table-sm">
            <tr>
                <td style="border: 1px solid blue; padding: 3px; background-color:lightgreen; ">
                    Your Order ID:
                    <input type="text" name="order_id" id="order_id" value="{{ $order_id }}" style="text-align: center;">
                </td>
                <td style="border: 1px solid blue; padding: 3px; background-color:lightgreen; ">
                    Your Payment Amount:
                    <input type="text" name="payment_amount" id="payment_amount" value="{{ $payment_amount }}" style="text-align: center;">
                </td>
            </tr>
        </table>    
    </div>
   

</div> 
</div>


<div class="container">
<div class="row justify-content-center">
<div class="col-6">

    <div class="card text-center" style="font-size: 12px;">

                <img class="card-img-top" src="{{ asset('kbzpay.jpg') }}" alt="Card image cap">
                  
                <div class="card-body">
                    <table class="table table-borderless">
                        <tr>
                            <td><b>Phone Number</b></td>
                            <td>
                                <input type="text" name="phone" value="" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td><b>Transaction Last [ 4 ] Digits</b></td>
                            <td>
                                <input type="text" name="transaction" value="" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" value="Paid" class="btn btn-success">
                            </td>
                        </tr>
                    </table>                   
                </div>
    </div>


</div>
</div> 
</div>


</form>
@endsection