@extends('master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-6">
        <img class=detail-img src="{{$products['gallery']}}">
        </div>
        <div class="col-sm-6">
            <a href="/">Go Back</a>
<h2>Name: {{$products['name']}}</h2>
<h4>Price: {{$products['price']}}</h4>
<h4>Category: {{$products['category']}}</h4>
<h4>Description: {{$products['description']}}</h4>
<br><br>
<button class="bt btn-success">Add To Cart</button>
<button class="bt btn-primary">Buy Now</button>
</div>
    </div>
</div>

@endsection