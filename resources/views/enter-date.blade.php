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
                        <h4 class="card-title"> Enter Weight </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <form
                            class="form-horizontal"
                            role="form"
                            method="POST"
                            action="{{ route('recordSubmission') }}"
                        >
                        {{ csrf_field() }}

                    
                        <div class="form-group">
<<<<<<< HEAD
                            <label for="name">Weight In Kg:</label>
=======
                            <label for="name">Weight Per Kg:</label>
>>>>>>> e305c46bcdc686c5205023d72c7e0f1699beedc8
                            <input type="text" name = "weight" id ="name" class="form-control" >
                            <input type="hidden" name = "id" value="{{$id}}" >
                            <div
              class="form-group"
            >
              <label for="materialType" 
                >Choose Material Type:</label
              >

                <select
                  class="form-control"
                  id="materialType"
                  name="materialType"
                >
                  @foreach($materials as $material)
<<<<<<< HEAD
                  <option value="{{$material->name}}">{{$material->name}}</option>
=======
                  <option value="{{$material->id}}">{{$material->name}}</option>
>>>>>>> e305c46bcdc686c5205023d72c7e0f1699beedc8
                  @endforeach
                </select>
            </div>
                            <button type="submit" class="btn btn-success">Record Submission</button>
                 
                            </div>
                        </div>
  </div>
  </div>
 
@endsection