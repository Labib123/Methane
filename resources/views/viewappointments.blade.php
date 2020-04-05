@extends('layouts.app', [
    'class' => 'viewappointments',
    'elementActive' => 'viewappointments'
])




@section('content')

<div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> View Appointments </h4>
                    </div>

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

@endsection
