@extends('admin::layouts.wrapper')

<style>
  .sort-info {
    background-color: #3097d1;
    padding: 0px;
    height: 155px;
    border: none !important;
    box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.1);
    position: relative;
    display: block;
    background: #3097d1;
    padding: 20px;
    margin-bottom: 10px;
    overflow: hidden;
    color:white;
  }
</style>
@section('content')
<div class="col-md-12">
  <div class="lead">
      Welcome on Board ..
  </div>
  <div id="time" class="h1">

  </div>
</div>

<a href="{{ route('admin.seller') }}">
  <div class="col-md-4 col-sm-6"> 
    <div class="sort-info"> 
      <h3>No of Seller</h3> 
      <p>{{ $seller }}</p>
    </div> 
  </div>
</a>


<a href="{{ route('admin.buyer') }}">
<div class="col-md-4 col-sm-6"> 
  <div class="sort-info"> 
    <h3>No of Buyer</h3> 
    <p>{{ $buyer }}</p>
  </div> 
</div>
</a>

<a href="{{ route('admin.products') }}">
<div class="col-md-4 col-sm-6"> 
  <div class="sort-info"> 
    <h3>No of Products</h3> 
    <p>{{ $products }}</p>
  </div> 
</div>
</a>

<a href="{{ route('admin.orders') }}">
<div class="col-md-4 col-sm-6"> 
  <div class="sort-info"> 
    <h3>New Order</h3> 
    <p>{{ $newOrders }}</p>
  </div> 
</div>
</a>

<a href="{{ route('admin.confirm-orders') }}">
<div class="col-md-4 col-sm-6"> 
  <div class="sort-info"> 
    <h3>Confirm Order</h3> 
    <p>{{ $confirmOrders }}</p>
  </div> 
</div>
</a>

<a href="{{ route('admin.sold') }}">
  <div class="col-md-4 col-sm-6"> 
    <div class="sort-info"> 
      <h3>Sold Products</h3> 
      <p>{{ $soldProducts }}</p>
    </div> 
  </div>
</a>

<script>
    function checkTime(i) {
      if (i < 10) {
        i = "0" + i;
      }
      return i;
    }

    function startTime() {
      var today = new Date();
      var h = today.getHours();
      var m = today.getMinutes();
      var s = today.getSeconds();
      // add a zero in front of numbers<10
      m = checkTime(m);
      s = checkTime(s);
      document.getElementById('time').innerHTML ="Current Time: " +  h + ":" + m + ":" + s;
      t = setTimeout(function() {
        startTime()
      }, 500);
    }
    startTime();
</script>
@endsection
