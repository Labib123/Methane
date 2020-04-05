@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'viewsubmission'
])

@section('content')
<div class="content">
      <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> View Submission</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
            <table class="table table-bordered" id="table">
               <thead>
                  <tr>
                     <th>proposedDate</th>
                     <th>actualDate</th>
                     <th>weight In Kg</th>
                     <th>pointsAwarded</th>
                     <th>status:</th>
                     <th>recycledBy</th>
                     <th>submittedBy</th>
                     <th>materialType</th>
                  </tr>
               </thead>
            </table>
         </div>
       <script>
         $(function() {
               $('#table').DataTable({
               processing: true,
               serverSide: true,
               ajax: '/submittedByAPI?username={{auth()->user()->username}}',
               columns: [
                        { data: 'proposedDate', name: 'proposedDate' },
                        { data: 'actualDate', name: 'actualDate' },
                        { data: 'weightInKg', name: 'weightInKg' },
                        { data: 'pointsAwarded', name: 'pointsAwarded' },
                        { data: 'status', name: 'status' },
                        { data: 'recycledBy', name: 'recycledBy' },
                        { data: 'submittedBy', name: 'submittedBy' },
                        { data: 'materialType', name: 'materialType' },
                     ]
            });
         });
<<<<<<< HEAD
=======

// to be uploaded
>>>>>>> e305c46bcdc686c5205023d72c7e0f1699beedc8
         </script>
@endsection
