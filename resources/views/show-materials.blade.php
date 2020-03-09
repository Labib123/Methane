@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
<a href="{{route('material.create')}}" class = "btn btn-info">Add Material</a>
</br>
</br>
</br>

    <div class="col-sm-12">
      <table class="table">
        <tr >
          <th id="id">ID</th>
          <th>Name</th>
          <th>Description</th>
          <th>Points Per Kg</th>
        </tr>
        @foreach($material as $m)
          <tr>
            <td>{{ $m->id }}</td>
            <td>{{ $m->name }}</td>
            <td>{{ $m->description }}</td>
            <td>{{ $m->pointsPerKg }}</td>
            <td>{{ $m->phone }}</td>
            <td><a href="{{route('material.edit',['id'=>$m->id])}}" class = "btn btn-info">Edit</a></td>
          </tr>
        @endforeach
      </table>
    </div>
  </div>
  </div>
@endsection