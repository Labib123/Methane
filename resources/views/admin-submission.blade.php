@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
<h1 align="center" >View Submission</h1>
<h5 align="center">Admin</h5>

<!-- <a href="{{route('submission.create')}}" class = "btn btn-info">Add Submission</a> -->
</br>
</br>
</br>

    <div class="col-sm-12">
      <table class="table">
        <tr >
          <th id="id">ID</th>
          <th>proposedDate</th>
          <th>actualDate</th>
          <th>weightInKg </th>
          <th>pointsAwarded </th>
          <th>status </th>
          <th>Submiited By </th>
          <th>Recycled By </th>

        </tr>
        @foreach($submission as $s)
          <tr>
            <td>{{ $s->id }}</td>
            <td>{{ $s->proposedDate }}</td>
            <td>{{ $s->actualDate }}</td>
            <td>{{ $s->weightInKg }}</td>
            <td>{{ $s->pointsAwarded }}</td>
            <td>{{ $s->status }}</td>
            <td>{{ $s->submittedBy }}</td>
            <td>{{ $s->recycledBy }}</td>

          </tr>
        @endforeach
      </table>
    </div>
  </div>
  </div>
@endsection