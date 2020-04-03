@extends('layouts.app', [
    'class' => 'add-schedule',
    'elementActive' => 'add-schedule'
])

@section('content')


<div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Choose The Schedule</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <form
                            class="form-horizontal"
                            role="form"
                            method="POST"
                            action="{{ route('schedule') }}"
                        >
                        {{ csrf_field() }}

                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        Day
                                    </th>
                                    <th>
                                        Choose
                                    </th>
                                    </thead>
                                <tbody>
                                  <tr>
                                  
                                  
                                        <td>
                                            Sunday
                                        </td>
                                        <td>
                                        <input class="switch-input" type="checkbox" id="sunday" name="sunday" value="sunday">
                                        </td>
                                    </tr> 



                                    <tr>
                                        <td>
                                            Monday
                                        </td>
                                        <td>
                                        <input type="checkbox" id="monday" name="monday" value="monday">
                                        </td>
                                    </tr> 

                                    <tr>
                                        <td>
                                            Tuesday
                                        </td>
                                        <td>
                                        <input type="checkbox" id="tuesday" name="tuesday" value="tuesday">
                                        </td>
                                    </tr> 

                                    <tr>
                                        <td>
                                            Wednesday
                                        </td>
                                        <td>
                                        <input type="checkbox" id="wednesday" name="wednesday" value="wednesday">
                                        </td>
                                    </tr> 

                                    <tr>
                                        <td>
                                            Thursday
                                        </td>
                                        <td>
                                        <input type="checkbox" id="thursday" name="thursday" value="thursday">
                                        </td>
                                    </tr> 

                                    <tr>
                                        <td>
                                            Friday
                                        </td>
                                        <td>
                                        <input type="checkbox" id="friday" name="friday" value="friday">
                                        </td>
                                    </tr> 

                                    <tr>
                                        <td>
                                            Saturday
                                        </td>
                                        <td>
                                        <input type="checkbox" id="saturday" name="saturday" value="saturday">
                                        </td>
                                    </tr> 
                                    </tbody>
                                    </table> 
                                    <input type="hidden" name="userID" value="{{auth()->user()->id}}">

                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                        Update
                                        </button>
                               </div>
                        </form>
@endsection
