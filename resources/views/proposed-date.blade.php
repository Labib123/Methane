@extends('layouts.app', [
    'class' => 'makeappointment',
    'elementActive' => 'makeappointment'
])

@section('content')

<div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Select Date </h4>
                    </div>
                    <div class="card-body">
                    <form
                            class="form-horizontal"
                            role="form"
                            method="POST"
                            action="{{ route('selectDate') }}"
                        >
                        {{ csrf_field() }}
                        @foreach($schedule as $s)
                        @if($s->user_id == $collectors->id)
                        <?php $weekdays = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat']; 
                     $collectordays = []; 
                    foreach($weekdays as $day) {
                        if($s->$day != null){
                            array_push($collectordays, $day) ;  
                        }
                       
                    }
                    $indexes = []; 

                    foreach($collectordays as $cd) {
                            array_push($indexes, array_search($cd, $weekdays,false)) ;  

                        }
                    // foreach($indexes as $i) {
                    //         echo $i ; 
                    // }
                        ?>

                          @endif
                            @endforeach
                         
                    <input placeholder="mm/dd/yyyy" autocomplete="off" name="proposedDate" id="datepicker" type='text' class="form-control" />
                    <input name="toBeCollector" type ="hidden" value="{{$collectors->id}}">
                    <input name="materialType" type ="hidden" value="{{$materialType}}">

                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                                        <button type="submit" class="btn btn-primary">
                                        Make Appointment
                                        </button>
                                        </form>

                                        <div class="card-body">
                        <div class="table-responsive">
                            <table  class="table table table-striped table-bordered table-sm">
                                <thead class=" text-primary">    Your upcoming appointments   <tr >
                            <th>Proposed Date</th>
                            <th>Material Type</th>
                            <th >Collector </th>
                            </thead>
                            <tbody>
                            @foreach($submissions as $s) 

                            <tr> 
                            <td>{{$s->proposedDate}}</td>
                            <td>{{$s->materialType}}</td>
                            <?php foreach($users as $u ){
                                if($s->user_id == $u->id){
                                    echo "<td>$u->fullname</td>" ; 
                            

                                }
                            } ?>
                            </tr> 
                            @endforeach 
                            </tbody>
                            </table> 
                            </div>

                </div>
            </div>
        </div>
     
   
</div>

<script>
$(function() {
    $( "#datepicker" ).datepicker(
    {
        beforeShowDay: function(d) {
            var day = d.getDay();
         
            return [day == {{isset($indexes[0]) ? $indexes[0]:'null' }} || day == {{array_key_exists(1,$indexes) ? $indexes[1]:'null' }}   || day == {{array_key_exists("2",$indexes) ? $indexes[2]:'null' }} || day == {{array_key_exists(3,$indexes) ? $indexes[3]:'null' }} || day == {{array_key_exists(4,$indexes) ? $indexes[4]:'null' }} || day == {{array_key_exists(5,$indexes) ? $indexes[5]:'null' }} || day == {{array_key_exists(6,$indexes) ? $indexes[6]:'null' }} || day == {{array_key_exists(7,$indexes) ? $indexes[7]:'null' }}  ];
        }
    });
  });
  </script>
@endsection
