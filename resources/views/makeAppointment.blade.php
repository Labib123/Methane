@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
<h1 align='center'>Select Material</h1>
</br>
</br>
</br>

    <div class="col-sm-12">
      <table id="tableId" class="table">
        <tr >
          <th>Name</th>
          <th>Description</th>
          <th>Points Per Kg</th>
        </tr>
        @foreach($material as $m)
          <tr id='tr' >
          
            
        
            <td><a href="selectCollector?id={{$m->id}}">{{ $m->name }} </a> </td>
            <td>{{ $m->description }}</td>
            <td>{{ $m->pointsPerKg }}</td>
          </tr>
        @endforeach
      </table>
    </div>
  </div>
  </div>
 
@endsection