
@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'recordsubmission'
])
@section('content')

   <div class="content">
   <form action="manually-api">
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
                  <option value="{{$material->id}}">{{$material->name}}</option>
                  @endforeach
                </select>
            </div>
  <div class="form-group">
    <label for="">Recycler Name</label>
    <input name="recycledBy" type="" class="form-control" id="" aria-describedby="" placeholder="">
  </div>
 
  <div class="form-group">
    <label for=""> weight in Kg</label>
    <input name="weightInKg" class="form-control" id="" aria-describedby="" placeholder="">
  </div>
 
<!-- 
  <div class="form-check">
      <label class="form-check-label">
          <input class="form-check-input" type="checkbox" value="">
          Option one is this
          <span class="form-check-sign">
              <span class="check"></span>
          </span>
      </label>
  </div> -->

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
  </div>
  </div>
 
@endsection