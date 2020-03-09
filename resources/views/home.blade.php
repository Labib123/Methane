@extends('layouts.app')
<?php $user = auth()->user(); ?>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$user->usertype}} dashboard</div>
                <div class="panel-body">
                <h1> welcome {{$user->username}}</h1>


                <?php 

                if($user->usertype == "collector"){
                    $id =  auth()->user()->id;
                    echo "<a href='collectorSubmission?id={$id}'> <button> view submission </button></a>";
                    echo "<a href='c'> <button> record submission </button></a>";

                }
                if($user->usertype == "recycler"){
                    $id =  auth()->user()->id;
                    echo "<a href='makeappointment'> <button> make appoitment </button></a>";
                    echo "<a href='recyclerSubmission?id={$id}'> <button> view submission </button></a>";

            
                }
               
?>

                  <!-- @component('components.who')
                  @endcomponent -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
