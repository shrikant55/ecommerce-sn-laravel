@extends('master')
@section('content')

<div class="trending-wrapper">
<h4>Search Results</h4>
<div class=container>
      @foreach ($products as $item)
    <div class="search-item">
    <a href="detail/{{$item['id']}}">
      <img class="t-img" src="{{$item['gallery']}}" >
      <h2>{{$item['name']}}</h2>
      <h5>{{$item['description']}}</h5>
</a>
</div>

    @endforeach
 </div>

@endsection