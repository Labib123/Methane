@extends('layouts.app')

@section('content')

<div class="container">
<div class="row">
<div class="col-sm-8 offset-sm-2">
    <h1 >unauthorized access </h1>
    <h5 >You can't access this page if you are a {{auth()->user()->usertype}} bro</h5>
  <a  href="home" >  <button >Back Home</button></a>  
</div>
</div>
  </div>
</body>

@endsection