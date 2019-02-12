@extends('layouts.app')

@section('content')
<div class="products">
	<div class="container">
		<div class="row">
			<div class="col">
                <div class="product_cart">
                    <table>
                        <tr>
                            <!-- <th>Product</th>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Total</th> -->
                            <th style="width:50%;" class="text-center">Products</th>
                            <th style="width:10%" class="text-center">Description</th>
                            <th style="width:10%" class="text-center">Price</th>
                            <th style="width:8%" class="text-center">Quantity</th>
                            <th style="width:5%" class="text-center">Add 1</th>
                            <th style="width:5%" class="text-center">Delete</th>
                            <th style="width:8%" class="text-center">Subtotal</th>
                        </tr>
                        <?php $total = 0 ?>
                        @if(session('cart'))
                        
                        @foreach(session('cart') as $id => $details)

                            <tr>
                                <td>{{ $details['title'] }}{{ $details['id'] }}</td>
                                <td>{{ $details['description'] }}</td>
                                <td>{{ $details['price'] }}</td>
                                <td>{{ $details['quantity'] }}</td>
                                <td><form method="POST" action="update-cart/">@csrf<input name="id" value="{{ $details['id']}}" type="hidden"><input name="quantity" value="{{ $details['quantity']}}" type="hidden"> <button type="submit" class="btn btn-primary">{{ __('Add 1') }}</button></form></td>
                                <td><form method="POST" action="removefromcart/">@csrf<input name="id" value="{{ $details['id']}}" type="hidden"><input name="quantity" value="{{ $details['quantity']}}" type="hidden"><button type="submit" class="btn btn-primary">{{ __('Delete 1') }}</button></form></td>
                                <td>${{ $details['price'] * $details['quantity'] }}</td>
                                
                            </tr>
                        @endforeach
                        @endif

                        <tr>
                            <td colspan="6" class="hidden-xs"></td>
                            <td class="hidden-xs text-center"><strong>Total ${{ $total }}</strong></td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection