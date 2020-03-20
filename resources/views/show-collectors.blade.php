
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
                        <h4 class="card-title"> Select Collector</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">       <tr >
          <th>Name</th>
          <th>Address</th>
          <th>schedule </th>

        </tr>
        @foreach($material as $m)
        @foreach($collectors as $collector)
        @foreach($schedule as $s)

        @if($m->user_id == $collector->id)
        @if($s->user_id == $collector->id)

          <tr id='tr' >
            <td><a href="porposedDate">{{ $collector->fullname }} </a> </td>
            <td>{{ $collector->address }}</td>
            <?php $weekdays = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat']; 
                    foreach($weekdays as $day) {
                        if($s->$day != null){
                          $day = $day.'day';
                          echo "<td> $day </td>";
                        }
                    }
            ?> 
          </tr>
          @endif
          @endif

        @endforeach
        @endforeach

        @endforeach
      </table>
    </div>
  </div>
  </div>
 
@endsection