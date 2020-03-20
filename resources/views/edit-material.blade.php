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
                        <h4 class="card-title"> Edit Material</h4>
      <form action="{{route('material.update')}}" method = "post">
      {!! csrf_field() !!}

      @if ($errors->any())
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
            @endif {{ csrf_field() }}        
        <div class="form-group">
          <label for="name">name:</label>
          <input type="text" name = "name" id ="name" class="form-control" required value = "{{$m->name}}">
        </div>
        <div class="form-group">
          <label for="description">description:</label>
          <input type="text" name = "description" id = "description" class="form-control" required value = "{{$m->description}}">
        </div>
        <div class="form-group">
          <label for="department">points per Kg:</label>
          <input type="text" name = "pointsPerKg" id = "pointsPerKg" class="form-control" required value = "{{$m->pointsPerKg}}">
        </div>
        
        <input type="hidden" name="id" value = "{{$m->id}}">
        <input type="hidden" name="uderId" value = "{{ Auth::user()->id }} ">
        

        <button onclick="return confirm('Are you sure?')" type = "submit" class = "btn btn-success">Submit</button>
      </form>
    </div>
  </div>
  </div>

@endsection
