
@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'makeappointment'
])
@section('content')

   <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Select Material</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">        <tr >
          <th>Name</th>
          <th>Description</th>
          <th>Points Per Kg</th>
        </tr>
        @foreach($material as $m)
          <tr id='tr' >
          
            
        
            <td><a href="selectCollector?name={{$m->name}}">{{ $m->name }} </a> </td>
            <td>{{ $m->description }}</td>
            <td>{{ $m->pointsPerKg }}</td>
          </tr>
        @endforeach
      </table>
    </div>
  </div>
  </div>
 
@endsection