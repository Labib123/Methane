@extends('layouts.app')
@section('content')
<div class="container">
<div class="row mt-5">
    <div class="col-sm-8 offset-sm-2">
      <form action="{{route('submission.store')}}" method = "post"  value="{{ csrf_token() }}">
      {!! csrf_field() !!}

        <div class="form-group">
          <label for="firstname">Proposed Date:</label>

          <input type="date" name = "proposedDate" id = "proposedDate" class="form-control" required>
        </div>
      

        <button type = "submit" class = "btn btn-success">Submit</button>
      </form>
    </div>
  </div>
  </div>
@endsection
