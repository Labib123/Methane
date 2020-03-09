@extends('layouts.app')
@section('content')

@if ($errors->any())
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
            @endif {{ csrf_field() }}

<div class="container">
<div class="row mt-5">
    <div class="col-sm-8 offset-sm-2">
      <form action="{{route('material.store')}}" method = "post"  value="{{ csrf_token() }}">
      {!! csrf_field() !!}

        <div class="form-group">
          <label for="firstname">Name:</label>
          <input type="text" name = "name" id = "name" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="description">description:</label>
          <input type="text" name = "description" id = "description" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="pointsPerKg">points Per Kg:</label>
          <input type="text" name = "pointsPerKg" id = "pointsPerKg" class="form-control" required>
        </div>

        <button  type = "submit" class = "btn btn-success" onclick="return confirm('Are you sure?')">Submit</button>
      </form>
    </div>
  </div>
  </div>
@endsection
