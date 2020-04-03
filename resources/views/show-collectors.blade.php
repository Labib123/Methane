
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
                            <table  class="table table table-striped table-bordered table-sm">
                                <thead class=" text-primary">       <tr >
          <th>Name</th>
          <th>Address</th>
          <th colspan="7">schedule </th>

        </tr>
        @foreach($material as $m)
        @foreach($collectors as $collector)
        @foreach($schedule as $s)

        @if($m->user_id == $collector->id)
        @if($s->user_id == $collector->id)

          <tr id='tr' >
            <td><a href="porposedDate?id={{$collector->id}}&materialType={{$materialType}}">{{ $collector->fullname }} </a> </td>
            <td>{{ $collector->address }}</td>
            <?php $weekdays = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
                    $fWeekdays = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday']; 

                    foreach($weekdays as $day) {
                        if($s->$day != null){
                          $day = $fWeekdays[array_search($day, $weekdays          )];

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
 
 <script>
 $(document).ready(function() {
    $('#example').DataTable();
} );
 </script>
@endsection