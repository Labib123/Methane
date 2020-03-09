@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
<h1 align='center'>Select Collector</h1>

</br>
</br>
</br>

    <div class="col-sm-12">
      <table id="tableId" class="table">
        <tr >
          <th>Name</th>
          <th>Address</th>
          <th>schedule </th>

        </tr>
        @foreach($collectors as $collector)

          <tr id='tr' >
            <td><a href="porposedDate">{{ $collector->fullname }} </a> </td>
            <td>{{ $collector->address }}</td>
            <td>{{ $collector->schedule }}</td>

          </tr>
        @endforeach
      </table>
    </div>
  </div>
  </div>
 
@endsection