@extends('layouts.app', [
    'class' => 'addmaterials',
    'elementActive' => 'addmaterials'
])

@section('content')

<div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <div class="flash-message">
                    @if($errors->any())
                    <div class="alert alert-danger"> This Material Type Already Added! </div>
@endif

                        <h4 class="card-title"> Choose Your Material </h4>
                    <div class="card-body">
                        <div class="table-responsive">
                                <div class="input-group">
                           
                                <form
                            class="form-horizontal"
                            role="form"
                            method="POST"
                            action="{{ route('collectorAddMaterial') }}"
                        >
                        {{ csrf_field() }}
                        <div>
                        <label for=""> Add Material Type :</label>

                                    <select name="name" class="custom-select" id="inputGroupSelect04">
                                            <option selected>Choose...</option>
                                      @foreach($materials as $m)
                                          <option value="{{$m->name}}">{{$m->name}}</option>
                                  @endforeach
                                    </select>
                                    <button type="submit" class="btn btn-primary">
                                        Add Material
                                        </button>
                                      
                                
                                    </form>
                                     <table class="table">
                                <thead class=" text-primary">
                                <tr >
                                    <th id="id">ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Points Per Kg</th>

                             </tr>
                                </thead>
                                <tbody>
                                @foreach($CollectorMaterials as $c)
                                  <tr>
                                    <td>{{ $c->id }}</td>
                                    <td>{{ $c->name }}</td>
                                    <td>{{ $c->description }}</td>
                                    <td>{{ $c->pointsPerKg }}</td>
                                  </tr>
            @endforeach

            </tbody>
</table>
                                    </div>
                                    </div>

                                    <style> 
body#order .header-container,
body#order .footer-container,
body#order-opc .header-container,
body#order-opc .footer-container {
  display: none !important;
}
body#checkout #header,
body#checkout #footer {
  display: none !important;
}
.footer {
  display:none
}
</style>

@endsection
