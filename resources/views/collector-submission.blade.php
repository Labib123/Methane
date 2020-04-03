
@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'recordsubmission'
])
@section('content')
  <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Show Appointments </h4>
          <a href="http://127.0.0.1:8000/manually-appointment" class="btn btn-info">Add Manually</a>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="table" class="table">
                                <thead class=" text-primary">       <tr >
                                <th>Recycler name</th>
         
          <th>proposed date</th>
          <th> material name </th>
          <th>status </th>
          
      </table>
    </div>
  </div>
  </div>
 
 <script>
         $(function() {
               $('#table').DataTable({
               processing: true,
               serverSide: true,
               ajax: '/showRecyclersAPI',
               columns: [
                { data: "recycledBy", "render": function(data,type,row,meta) { // render event defines the markup of the cell text 
                           var test = '<a href="enterWeight?id='+ row.id +'  ">' + row.recycledBy + '</a>';
                            return test;
                        }},
                        { data: 'proposedDate', name: 'proposedDate' },
                        { data: 'materialType', name: 'materialType' },
                        { data: 'status', name: 'status' },
                     ]
                     
            });
         });
         </script>
@endsection