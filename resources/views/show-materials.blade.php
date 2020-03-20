@extends('layouts.app', [
    'class' => 'showmaterial',
    'elementActive' => 'showmaterial'
])

@section('content')
<div class="content">
        <div class="row">
        @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Show Material</h4>
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
            <td>
    
                <form action="{{ route('material.destroy', $m->id)}}" method="post">
                {{ csrf_field() }}
                
  
                  <button onclick="return confirm('Are you sure?')" class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
          </tr>
        @endforeach
      </table>
    </div>
  </div>
  </div>
@endsection