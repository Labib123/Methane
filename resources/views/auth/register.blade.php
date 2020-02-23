@extends('layouts.app')

@section('content')
<div class="container">
<div class="col-md-8 col-md-offset-2">
<div class="panel-heading">User Type</div>
<div style="margin: auto;
  width: 50%;
  padding: 10px;"> 
<a  href="{{route('collector')}}"><button class="btn btn-danger">Collector</button></a>

<a href="{{route('recycler')}}"><button class="btn btn-danger">Recycler</button></a>
</div>

</div>

</div>


@endsection
