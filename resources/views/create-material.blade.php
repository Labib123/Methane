@extends('layouts.app', [
    'class' => 'showmaterial',
    'elementActive' => 'showmaterial'
])

@section('content')


            <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    @if ($errors->any())
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
            @endif {{ csrf_field() }}
                        <h4 class="card-title"> Add Material</h4>
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
