@extends('layouts.app')
@section('content')
<div class="container">
<div class="row mt-5">
    <div class="col-sm-8 offset-sm-2">
      <form action="{{route('submission.store')}}" method = "post"  value="{{ csrf_token() }}">
      {!! csrf_field() !!}

        <div class="form-group">
  
          <label for="proposedDate">Proposed Date:</label>
          <br>
          <input class="form-control" type="date" id="proposedDate" name="proposedDate">

        </div>
        <div class="form-group">
          <label for="actualDate">actual date:</label>
          <br>
          <input class="form-control" type="date" id="actualDate" name="actualDate">

        </div>
        <div class="form-group">
          <label for="weightInKg">weight In Kg:</label>
          <input type="text" name = "weightInKg" id = "weightInKg" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="weightInKg">Points  Awarded:</label>
          <input type="text" name = "pointsAwarded" id = "pointsAwarded" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="status">status:</label>
          <input type="text" name = "status" id = "status" class="form-control" required>
        </div>
        <button type = "submit" class = "btn btn-success">Submit</button>
      </form>
    </div>
  </div>
  </div>
@endsection
