

@extends('layouts.app') @section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Register As Collector</div>
        <div class="panel-body">
          <form
            class="form-horizontal"
            role="form"
            method="POST"
            action="{{ route('register') }}"
          >
            @if ($errors->any())
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
            @endif {{ csrf_field() }}

            <div
              class="form-group{{ $errors->has('username') ? ' has-error' : '' }}"
            >
              <label for="username" class="col-md-4 control-label"
                >username</label
              >

              <div class="col-md-6">
                <input
                  id="username"
                  type="text"
                  class="form-control"
                  name="username"
                  value="{{ old('username') }}"
                  required
                  autofocus
                />

                @if ($errors->has('username'))
                <span class="help-block">
                  <strong>{{ $errors->first('username') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div
              class="form-group{{ $errors->has('fullname') ? ' has-error' : '' }}"
            >
              <label for="fullname" class="col-md-4 control-label"
                >fullname</label
              >

              <div class="col-md-6">
                <input
                  id="fullname"
                  type="text"
                  class="form-control"
                  name="fullname"
                  value="{{ old('fullname') }}"
                  required
                  autofocus
                />

                @if ($errors->has('fullname'))
                <span class="help-block">
                  <strong>{{ $errors->first('fullname') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div
              class="form-group{{ $errors->has('address') ? ' has-error' : '' }}"
            >
              <label for="address" class="col-md-4 control-label"
                >Address</label
              >

              <div class="col-md-6">
                <input
                  id="address"
                  type="address"
                  class="form-control"
                  name="address"
                  value="{{ old('address') }}"
                />

                @if ($errors->has('address'))
                <span class="help-block">
                  <strong>{{ $errors->first('address') }}</strong>
                </span>
                @endif
              </div>
            </div>


            <div class="checkbox">
  <label><input name="weekdays" type="checkbox" value="sun">Sunday</label>
</div>
<div class="checkbox">
  <label><input name="weekdays" type="checkbox" value="mon">Monday</label>
</div>
<div class="checkbox">
  <label><input name="weekdays" type="checkbox" value="tue">Tuesday </label>
</div>
<div class="checkbox">
  <label><input name="weekdays" type="checkbox" value="wed">Wednesday</label>
</div>
<div class="checkbox">
  <label><input name="weekdays" type="checkbox" value="thu">Thursday</label>
</div>
<div class="checkbox">
  <label><input name="weekdays" type="checkbox" value="fri">Friday</label>
</div>
<div class="checkbox">
  <label><input name="weekdays" type="checkbox" value="sat">Saturday</label>
</div>




            <div
              class="form-group{{ $errors->has('email') ? ' has-error' : '' }}"
            >
              <label for="email" class="col-md-4 control-label"
                >E-Mail Address</label
              >

              <div class="col-md-6">
                <input
                  id="email"
                  type="email"
                  class="form-control"
                  name="email"
                  value="{{ old('email') }}"
                  required
                />

                @if ($errors->has('email'))
                <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div
              class="form-group{{ $errors->has('materialType') ? ' has-error' : '' }}"
            >
              <label for="materialType" class="col-md-4 control-label"
                >Choose Material Type:</label
              >

              <div class="col-md-6">
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
            </div>

            <div
              class="form-group{{ $errors->has('password') ? ' has-error' : '' }}"
            >
              <label for="password" class="col-md-4 control-label"
                >Password</label
              >

              <div class="col-md-6">
                <input
                  id="password"
                  type="password"
                  class="form-control"
                  name="password"
                  required
                />

                @if ($errors->has('password'))
                <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group">
              <label for="password-confirm" class="col-md-4 control-label"
                >Confirm Password</label
              >

              <div class="col-md-6">
                <input
                  id="password-confirm"
                  type="password"
                  class="form-control"
                  name="password_confirmation"
                  required
                />
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button onclick="myFunction(this.form)" type="submit" class="btn btn-primary">
                  Register
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>




<script type="text/javascript">




function myFunction(frm) {
var values = "";
arr = [] ;

    for (var i = 0; i < frm.weekdays.length; i++)
    {
        var weekdaysArr = ['sun','mon','tue','wed','thu','fri','sat'] 

        if (frm.weekdays[i].checked )
        {
          if(frm.weekdays[i].value === weekdaysArr[i]){

              arr.push(weekdaysArr[i] ); 
                // console.log( weekdaysArr[i] + ":"+ weekdaysArr[i])
                // values = values+frm.weekdays[i].value + ",";


                 
   
              }

        }
    }
arr = arr.toString();

                 test = 'tested'
$.ajax({
    method: 'GET', // Type of response and matches what we said in the route
    url: '/schedule', // This is the url we gave in the route
    async: false,
     data: ({test}:{test}) , // a JSON object to send back
    success: function(response){ // What to do if we succeed
        console.log('Success'); 
      // console.log (weekdaysArr[i] + ':'+  weekdaysArr[i])
        console.log(response); 
        console.log(arr)


    },
    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
        console.log(JSON.stringify(jqXHR));
        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
    }
});

   
}
</script>



@endsection
