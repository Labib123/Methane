@extends('layouts.app')
<?php $user = auth()->user(); ?>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$user->usertype}} dashboard</div>
                <div class="panel-body">
                <h1> welcome {{$user->username}}</h1>"


                <?php 

                if($user->usertype == "collector"){
                }
                if($user->usertype == "recycler"){
                    echo "<button> make appoitment </button>";  
                    
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
