@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ADMIN Dashboard</div>

                <div class="panel-body">
                    <!-- @component('components.who')
                    @endcomponent -->
                <a href="material">
                <button>Show Materials</button>

                </a>

                <a href="adminSubmission">
                  <button>View Submission History</button>

                </a>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
