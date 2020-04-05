@extends('layouts.app', [
    'class' => 'register-page',
    'backgroundImagePath' => 'img/bg/jan-sendereks.jpg'
])

@section('content')
<?php 

use App\Material;
        $materials = Material::all();

?> 
 <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Raleway'>
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>


<style> 


.frame {
  height: 900px;
  width: 430px;
  background:
    linear-gradient(
    rgba(35,43,85,0.75),
    rgba(35,43,85,0.95)),
    url(https://dl.dropboxusercontent.com/u/22006283/preview/codepen/clouds-cloudy-forest-mountain.jpg) no-repeat center center;
  background-size: cover;
  margin-left: auto;
  margin-right: auto;
  border-top: solid 1px rgba(255,255,255,.5);
  border-radius: 5px;
  box-shadow: 0px 2px 7px rgba(0,0,0,0.2);
  overflow: hidden;
  transition: all .5s ease;
}

.frame-long {
  height: 610px;


}

.frame-short {
  height: 800px;
  margin-top: 50px;
  box-shadow: 0px 2px 7px rgba(0,0,0,0.1);
}

.nav {
  width: 100%;
  height: 100px;
  padding-top: 40px;
  opacity: 1;
  transition: all .5s ease;
}

.nav-up {
  transform: translateY(-100px);
  opacity: 0;
}

li {
  padding-left: 10px;
  font-size: 18px;
  display: inline;
  text-align: left;
  text-transform: uppercase;
  padding-right: 10px;
  color: #ffffff;
}

.signin-active a {
  padding-bottom: 10px;
  color: #ffffff;
  text-decoration: none;
  border-bottom: solid 2px #1059FF;
  transition: all .25s ease;
  cursor: pointer;
}

.signin-inactive a {
  padding-bottom: 0;
  color: rgba(255,255,255,.3);
  text-decoration: none;
  border-bottom: none;
  cursor: pointer;
}

.signup-active a {
  cursor: pointer;
  color: #ffffff;
  text-decoration: none;
  border-bottom: solid 2px #1059FF;
  padding-bottom: 10px;
}

.signup-inactive a {
  cursor: pointer;
  color: rgba(255,255,255,.3);
  text-decoration: none;
  transition: all .25s ease;
}

.form-signin {
  width: 430px;
  height: 375px;
	font-size: 16px;
	font-weight: 300;
  padding-left: 37px;
  padding-right: 37px;
  padding-top: 55px;
  transition: opacity .5s ease, transform .5s ease;
}

.form-signin-left {
  transform: translateX(-400px);
  opacity: .0;
}

.form-signup {
  width: 430px;
  height: 175px;
	font-size: 16px;
	font-weight: 300;
  padding-left: 37px;
  padding-right: 37px;
  padding-top: 55px;
  position: relative;
  top: -375px;
  left: 400px;
  opacity: 0;
  transition: all .5s ease;
}

.form-signup-left {
  transform: translateX(-399px);
  opacity: 1;
}

.form-signup-down {
  top: 0px;
  opacity: 0;
}

.success {
  width: 80%;
  height: 150px;
  text-align: center;
  position: relative;
  top: -890px;
  left: 450px;
  opacity: .0;
  transition: all .8s .4s ease;
}

.success-left {
  transform: translateX(-406px);
  opacity: 1;
}

.successtext {
  color: #ffffff;
	font-size: 16px;
	font-weight: 300;
  margin-top: -35px;
  padding-left: 37px;
  padding-right: 37px;
}

#check path {
    stroke: #ffffff;
    stroke-linecap:round;
    stroke-linejoin:round;
    stroke-width: .85px;
    stroke-dasharray: 60px 300px;
    stroke-dashoffset: -166px;
    fill: rgba(255,255,255,.0);
    transition: stroke-dashoffset 2s ease .5s, fill 1.5s ease 1.0s;
}

#check.checked path {
    stroke-dashoffset: 33px;
    fill: rgba(255,255,255,.03);
}

.form-signin input, .form-signup input {
  color: #ffffff;
  font-size: 13px;
}

.form-styling {
  width: 100%;
  height: 35px;
	padding-left: 15px;
	border: none;
	border-radius: 20px;
  margin-bottom: 20px;
  background: rgba(255,255,255,.2);
}

label {
  font-weight: 400;
  text-transform: uppercase;
  font-size: 13px;
  padding-left: 15px;
  padding-bottom: 10px;
  color: rgba(255,255,255,.7);
  display: block;
}

:focus {outline: none;
}

.form-signin input:focus, textarea:focus, .form-signup input:focus, textarea:focus {
    background: rgba(255,255,255,.3);
    border: none; 
    padding-right: 40px;
    transition: background .5s ease;
 }

.btn-signup {
  float: left;
  font-weight: 700;
  text-transform: uppercase;
  font-size: 13px;
  text-align: center;
  color: #ffffff;
  padding-top: 8px;
  width: 100%;
  height: 35px;
	border: none;
	border-radius: 20px;
  margin-top: 23px;
  background-color: #1059FF;
}

.btn-signin {
  float: left;
  padding-top: 8px;
  width: 100%;
  height: 35px;
	border: none;
	border-radius: 20px;
  margin-top: -8px;
}

.btn-animate {
  float: left;
  font-weight: 700;
  text-transform: uppercase;
  font-size: 13px;
  text-align: center;
  color: rgba(255,255,255, 1);
  padding-top: 8px;
  width: 100%;
  height: 35px;
	border: none;
	border-radius: 20px;
  margin-top: 23px;
  background-color: rgba(16,89,255, 1);
  left: 0px;
  top: 0px;
  transition: all .5s ease, top .5s ease .5s, height .5s ease .5s, background-color .5s ease .75s; 
}

.btn-animate-grow {
  width: 130%;
  height: 625px;
  position: relative;
  left: -55px;
  top: -420px;
  color: rgba(255,255,255,0);
  background-color: rgba(255,255,255,1);
}

a.btn-signup:hover, a.btn-signin:hover {
    cursor: pointer; 
    background-color: #0F4FE6;
    transition: background-color .5s; 
}

.forgot {
  height: 100px;
  width: 80%;
  margin-left: auto;
  margin-right: auto;
  text-align: center;
  padding-top: 24px;
  margin-top: -535px;
  border-top: solid 1px rgba(255,255,255,.3);
  transition: all 0.5s ease;
}

.forgot-left {
  transform: translateX(-400px);
  opacity: 0;
}

.forgot-fade {
  opacity: 0;
}

.forgot a {
  color: rgba(255,255,255,.3);
  font-weight: 400;
  font-size: 13px;
  text-decoration: none;
}

.welcome {
  width: 100%;
  height: 50px;
  position: relative;
  color: rgba(35,43,85,0.75);
  opacity: 0;
  transition: transform 1.5s ease .25s, opacity .1s ease 1s;
}

.welcome-left {
  transform: translateY(-780px);
  opacity: 1; 
}

.cover-photo {
  height: 150px;
  position: relative;
  left: 0px;  top: -900px;
  background:
    linear-gradient(
    rgba(35,43,85,0.75),
    rgba(35,43,85,0.95)),
    url(https://dl.dropboxusercontent.com/u/22006283/preview/codepen/landscape-nature-man-person.jpeg);
  background-size: cover;
  opacity: 0;
  transition: all 1.5s ease 0.55s;
}

.cover-photo-down {
  top: -575px;
  opacity: 1;
}

.profile-photo {
  height: 125px;
  width: 125px;
  position: relative;
  border-radius: 70px;
  left: 155px;
  top: -1000px;
  background: url(https://dl.dropboxusercontent.com/u/22006283/preview/codepen/nature-water-rocks-hiking.jpg);
  background-size: 100% 135%;
  background-position: 100% 100%;
  opacity: 0;
  transition: top 1.5s ease 0.35s, opacity .75s ease .5s;
  border: solid 3px #ffffff;
}

.profile-photo-down {
  top: -636px;
  opacity: 1;
}

h1 {
  color: #ffffff;
  font-size: 35px;
	font-weight: 300;
  text-align: center;
}

.btn-goback {
  position: relative;
  margin-right: auto;
  top: -400px;
  float: left;
  padding: 8px;
  width: 83%;
  margin-left: 37px;
  margin-right: 37px;
  height: 35px;
	border-radius: 20px;
  font-weight: 700;
  text-transform: uppercase;
  font-size: 13px;
  text-align: center;
  color: #1059FF;
  margin-top: -8px;
  border: solid 1px #1059FF;
  opacity: 0;
  transition: top 1.5s ease 0.35s, opacity .75s ease .5s;
}

.btn-goback-up {
  top: -1080px;
  opacity: 1;
}

a.btn-goback:hover {
    cursor: pointer; 
    background-color: #0F4FE6;
    transition: all .5s; 
    color: #ffffff;
}

/* refresh button styling */

#refresh {
    position: fixed;
    bottom: 20px;
    right: 20px; 
    background-color: #ffffff;
    width: 50px;
    height: 50px;
    border-radius: 25px;
    box-shadow: 0px 2px 7px rgba(0,0,0,0.1);
    padding: 13px 0 0 13px;
}

.refreshicon {
    fill: #d3d3d3;
    transform: rotate(0deg);
    transition: fill .25s ease, transform .25s ease;
}

.refreshicon:hover {
  cursor: pointer;
  fill: #1059FF;
  transform: rotate(180deg);


}




@charset "UTF-8";
/* CSS Document * Varun Dewan 2019 */


body section {
  margin-bottom: 10px;
}

.drop {
  position: relative;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}
.drop.open {
  z-index: 100;
}
.drop.open .drop-screen {
  z-index: 100;
  display: block;
}
.drop.open .drop-options {
  z-index: 200;
  max-height: 200px;
}
.drop.open .drop-display {
  z-index: 200;
  border-color: #465;
}
.drop select {
  display: none;
}
.drop .drop-screen {
  position: fixed;
  width: 100%;
  height: 100%;
  background: #000;
  top: 0px;
  left: 0px;
  opacity: 0;
  display: none;
  z-index: 1;
}

.link {
  text-align: center;
  margin: 20px 0px;
  color:#8CACD7;
}


.drop .drop-display {
  position: relative;
  padding: 0px 20px 5px 5px;
  border: 4px solid #444;
  width: 100%;
  background: #FFF;
  z-index: 1;
  margin: 0px;
  font-size: 16px;
  min-height: 58px;
}
.drop .drop-display:hover:after {
  opacity: 0.75;
}
.drop .drop-display:after {
  font-family: 'Material Icons';
  content: "\e5c6";
  position: absolute;
  right: 10px;
  top: 12px;
  font-size: 24px;
  color: #444;
}
.drop .drop-display .item {
  position: relative;
  display: inline-block;
  border: 2px solid #333;
  margin: 5px 5px -4px 0px;
  padding: 0px 25px 0px 10px;
  overflow: hidden;
  height: 40px;
  line-height: 36px;
}
.drop .drop-display .item .btnclose {
  color: #444;
  position: absolute;
  font-size: 16px;
  right: 5px;
  top: 10px;
  cursor: pointer;
}
.drop .drop-display .item .btnclose:hover {
  opacity: 0.75;
}
.drop .drop-display .item.remove {
  -webkit-animation: removeSelected 0.2s, hide 1s infinite;
          animation: removeSelected 0.2s, hide 1s infinite;
  -webkit-animation-delay: 0s, 0.2s;
          animation-delay: 0s, 0.2s;
}
.drop .drop-display .item.add {
  -webkit-animation: addSelected 0.2s;
          animation: addSelected 0.2s;
}
.drop .drop-display .item.hide {
  display: none;
}
.drop .drop-options {
  background: #444;
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.25);
  position: absolute;
  width: 100%;
  max-height: 0px;
  overflow-y: auto;
  transition: all 0.25s linear;
  z-index: 1;
}
.drop .drop-options a {
  display: block;
  height: 40px;
  line-height: 40px;
  padding: 0px 20px;
  color: white;
  position: relative;
  max-height: 40px;
  transition: all 1s;
  overflow: hidden;
}
.drop .drop-options a:hover {
  background: #465;
  cursor: pointer;
}
.drop .drop-options a.remove {
  -webkit-animation: removeOption 0.2s;
          animation: removeOption 0.2s;
  max-height: 0px;
}
.drop .drop-options a.add {
  -webkit-animation: addOption 0.2s;
          animation: addOption 0.2s;
}
.drop .drop-options a.hide {
  display: none;
}

@-webkit-keyframes pop {
  from {
    -webkit-transform: scale(0);
            transform: scale(0);
  }
  to {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}

@keyframes pop {
  from {
    -webkit-transform: scale(0);
            transform: scale(0);
  }
  to {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}
@-webkit-keyframes removeOption {
  from {
    max-height: 40px;
  }
  to {
    max-height: 0px;
  }
}
@keyframes removeOption {
  from {
    max-height: 40px;
  }
  to {
    max-height: 0px;
  }
}
@-webkit-keyframes addOption {
  from {
    max-height: 0px;
  }
  to {
    max-height: 40px;
  }
}
@keyframes addOption {
  from {
    max-height: 0px;
  }
  to {
    max-height: 40px;
  }
}
@-webkit-keyframes removeSelected {
  from {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  to {
    -webkit-transform: scale(0);
            transform: scale(0);
  }
}
@keyframes removeSelected {
  from {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  to {
    -webkit-transform: scale(0);
            transform: scale(0);
  }
}
@-webkit-keyframes addSelected {
  from {
    -webkit-transform: scale(0);
            transform: scale(0);
  }
  to {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}
@keyframes addSelected {
  from {
    -webkit-transform: scale(0);
            transform: scale(0);
  }
  to {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}
@-webkit-keyframes hide {
  from, to {
    max-height: 0px;
    max-width: 0px;
    padding: 0px;
    margin: 0px;
    border-width: 0px;
  }
}
@keyframes hide {
  from, to {
    max-height: 0px;
    max-width: 0px;
    padding: 0px;
    margin: 0px;
    border-width: 0px;
  }
}


</style> 
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 ml-auto" style="margin-right:200px">
<<<<<<< HEAD
                @if ($errors->any())
              @foreach ($errors->all() as $error)
              <div class="alert alert-danger" role="alert">
              {{ $error }}
</div>
              @endforeach
            @endif 
=======
>>>>>>> e305c46bcdc686c5205023d72c7e0f1699beedc8
                    <div class="info-area info-horizontal mt-5">
                        <div class="icon icon-primary">
                            <i class="nc-icon nc-planet"></i>
                        </div>
                        <div class="description">
                            <h5 class="info-title">{{ __('ABOUT US ') }}</h5>
                            <p class="description">
                                {{ __(' Methane is the leading solid waste management solution provider, supporting most of the local authorities and also handles Industrial, Commercial, and Institutional ("ICI") solid waste for the private sector in Peninsular Malaysia.') }}
                            </p>
                        </div>
                    </div>
                    <div class="info-area info-horizontal">
                        <div class="icon icon-primary">
                            <i class="nc-icon nc-sun-fog-29"></i>
                        </div>
                        <div class="description">
                            <h5 class="info-title">{{ __('Reduce, Reuse, Recycle') }}</h5>
                            <p class="description">
                                {{ __('Learn how reducing, reusing, and recycling can help you, your community, and the environment by saving money, energy, and natural resources. Recycling apps are managed at the state and local level—find information on recycling in your community.') }}
                            </p>
                        </div>
                    </div>
                    <div class="info-area info-horizontal">
                        <div class="icon icon-info">
                            <i class="nc-icon nc-satisfied"></i>
                        </div>
                        <div class="description">
                            <h5 class="info-title">{{ __('Save Energy') }}</h5>
                            <p class="description">
                                {{ __('item made from recycled metal uses about half the energy than a product from fresh material!') }}
                            </p>
                        </div>
                    </div>
                </div>
                    <div class="card card-signup text-center">

                            <div class="frame">
    <div class="nav">
      <ul class="links">
        <li class="signin-active"><a class="btn">Register</a></li>
        <li class="signup-inactive"><a class="btn">Sign In  </a></li>
      </ul>
    </div>
    <div ng-app ng-init="checked = false">
		<form  class="form-signin" 
        method="POST"
        action="{{ route('register') }}"
         name="form">
         {{ csrf_field() }}

<<<<<<< HEAD
      
=======
         @if ($errors->any())
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
            @endif 
>>>>>>> e305c46bcdc686c5205023d72c7e0f1699beedc8
            

          <label for="username">Username</label>
          <input required class="form-styling" type="text" name="username" id="username" placeholder=""/>

          <label for="fullname">fullname</label>
            <input required id="fullname" class="form-styling" type="text" name="fullname" placeholder=""/>

<<<<<<< HEAD
      
=======
          @if ($errors->has('fullname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fullname') }}</strong>
                                    </span>
                                @endif
>>>>>>> e305c46bcdc686c5205023d72c7e0f1699beedc8


                                
                <label for="address">Address</label>
                <input required id="address" class="form-styling" type="address" name="address" placeholder=""/>

                                <label for="email" >E-Mail Address</label>
                                <input id="email" type="email" class="form-styling" name="email" value="{{ old('email') }}" required>

<<<<<<< HEAD
                             
=======
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
>>>>>>> e305c46bcdc686c5205023d72c7e0f1699beedc8
                                <label for="password">Password</label>
                           <input class="form-styling" type="password" name="password" placeholder=""/>
       

                                <label for="password-confirm" >Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-styling" name="password_confirmation" required>

                                <label for="usertype">Choose User Type:</label>

                                <select name="usertype" class="form-styling" id="usertype" >
                                  <option value="collector">collector</option>
                                  <option value="recycler">recycler</option>
                                </select>
       
                                <label class="form-check-label">
                                        <input class="form-check-input" name="agree_terms_and_conditions" type="checkbox">
                                        <span class="form-check-sign"></span>
                                            {{ __('I agree to the') }}
                                        <a href="#something">{{ __('terms and conditions') }}</a>.
                                    </label>
                                  <button type="submit" class="btn-primary">Register</button>

                                  
    		        </form>
        
				        <form class="form-signup" action="{{ route('login') }}" method="post" name="form">
                {{ csrf_field() }}
          <label for="Email">Email</label>
          <input id="email" class="form-styling" type="text" name="email" placeholder=""/>
                <label for="password">password</label>
                <input required id="password" class="form-styling" type="password" name="password" placeholder=""/>
                  
                                    <button type="submit" class=" btn-primary">Login</button>

      </form>
  </div>

</div>


                </div>
             </div>
        </div>
     </div> 
@endsection

@push('scripts')
   


<script> 
$(function() {
	$(".btn").click(function() {
		$(".form-signin").toggleClass("form-signin-left");
    $(".form-signup").toggleClass("form-signup-left");
    $(".frame").toggleClass("frame-long");
    $(".signup-inactive").toggleClass("signup-active");
    $(".signin-active").toggleClass("signin-inactive");
    $(".forgot").toggleClass("forgot-left");   
    $(this).removeClass("idle").addClass("active");
	});
});

$(function() {
	$(".btn-signup").click(function() {
  $(".nav").toggleClass("nav-up");
  $(".form-signup-left").toggleClass("form-signup-down");
  $(".success").toggleClass("success-left"); 
  $(".frame").toggleClass("frame-short");
	});
});
</script> 

<script> 

var x = {
   get: function(selector){ 
      var ele = document.querySelectorAll(selector);
      for(var i = 0; i < ele.length; i++){
         this.init(ele[i]);
      }
      return ele;
   },
   template: function(html){
      var template = document.createElement('div');
      template.innerHTML = html.trim();
      return this.init(template.childNodes[0]);
   },
   init: function(ele){
      ele.on = function(event, func){ this.addEventListener(event, func); }
      return ele;
   }
};




//Build the plugin
var drop = function(info){var o = {
   options: info.options,
   selected: info.selected || [],
   preselected: info.preselected || [],
   open: false,
   html: {
      select: x.get(info.selector)[0],
      options: x.get(info.selector + ' option'),
      parent: undefined,
   },
   init: function(){
      //Setup Drop HTML
      this.html.parent = x.get(info.selector)[0].parentNode
      this.html.drop = x.template('<div class="drop"></div>')
      this.html.dropDisplay = x.template('<div class="drop-display">Display</div>')
      this.html.dropOptions = x.template('<div class="drop-options">Options</div>')
      this.html.dropScreen = x.template('<div class="drop-screen"></div>')
      
      this.html.parent.insertBefore(this.html.drop, this.html.select)
      this.html.drop.appendChild(this.html.dropDisplay)
      this.html.drop.appendChild(this.html.dropOptions)
      this.html.drop.appendChild(this.html.dropScreen)
      //Hide old select
      this.html.drop.appendChild(this.html.select);
      
      //Core Events
      var that = this;
      this.html.dropDisplay.on('click', function(){ that.toggle() });
      this.html.dropScreen.on('click', function(){ that.toggle() });
      //Run Render
      this.load()
      this.preselect()
      this.render();
   },
   toggle: function(){
      this.html.drop.classList.toggle('open');
   },
   addOption: function(e, element){ 
      var index = Number(element.dataset.index);
      this.clearStates()
      this.selected.push({
         index: Number(index),
         state: 'add',
         removed: false
      })
      this.options[index].state = 'remove';
      this.render()
   },
   removeOption: function(e, element){
      e.stopPropagation();
      this.clearStates()
      var index = Number(element.dataset.index);
      this.selected.forEach(function(select){
         if(select.index == index && !select.removed){
            select.removed = true
            select.state = 'remove'
         }
      })
      this.options[index].state = 'add'
      this.render();
   },
   load: function(){
      this.options = [];
      for(var i = 0; i < this.html.options.length; i++){
         var option = this.html.options[i]
         this.options[i] = {
            html:  option.innerHTML,
            value: option.value,
            selected: option.selected,
            state: ''
         }
      }
   },
   preselect: function(){
      var that = this;
      this.selected = [];
      this.preselected.forEach(function(pre){
         that.selected.push({
            index: pre,
            state: 'add',
            removed: false
         })
         that.options[pre].state = 'remove';
      })
   },
   render: function(){
      this.renderDrop()
      this.renderOptions()
   },
   renderDrop: function(){ 
      var that = this;
      var parentHTML = x.template('<div></div>')
      this.selected.forEach(function(select, index){ 
         var option = that.options[select.index];
         var childHTML = x.template('<span class="item '+ select.state +'">'+ option.html +'</span>')
         var childCloseHTML = x.template(
            '<i class="material-icons btnclose" data-index="'+select.index+'">&#xe5c9;</i></span>')
         childCloseHTML.on('click', function(e){ that.removeOption(e, this) })
         childHTML.appendChild(childCloseHTML)
         parentHTML.appendChild(childHTML)
      })
      this.html.dropDisplay.innerHTML = ''; 
      this.html.dropDisplay.appendChild(parentHTML)
   },
   renderOptions: function(){  
      var that = this;
      var parentHTML = x.template('<div></div>')
      this.options.forEach(function(option, index){
         var childHTML = x.template(
            '<a data-index="'+index+'" class="'+option.state+'">'+ option.html +'</a>')
         childHTML.on('click', function(e){ that.addOption(e, this) })
         parentHTML.appendChild(childHTML)
      })
      this.html.dropOptions.innerHTML = '';
      this.html.dropOptions.appendChild(parentHTML)
   },
   clearStates: function(){
      var that = this;
      this.selected.forEach(function(select, index){ 
         select.state = that.changeState(select.state)
      })
      this.options.forEach(function(option){ 
         option.state = that.changeState(option.state)
      })
   },
   changeState: function(state){
      switch(state){
         case 'remove':
            return 'hide'
         case 'hide':
            return 'hide'
         default:
            return ''
       }
   },
   isSelected: function(index){
      var check = false
      this.selected.forEach(function(select){ 
         if(select.index == index && select.removed == false) check = true
      })
      return check
   }
}; o.init(); return o;}


//Set up some data
var options = [
   { html: 'cats', value: 'cats' },
   { html: 'fish', value: 'fish' },
   { html: 'squids', value: 'squids' },
   { html: 'cats', value: 'whales' },
   { html: 'cats', value: 'bikes' },
];

var myDrop = new drop({
   selector:  '#myMulti',
   preselected: [0, 2]
});
 myDrop.toggle();
 var weekdaysArr = ['sun','mon','tue','wed','thu','fri','sat'] 
 
 for(i =0 ;  i < myDrop.selected.length ; i++ ){
  if(myDrop.selected[i].index == weekdaysArr.indexOf( weekdaysArr[i])){
         console.log(weekdaysArr[i]) ;
  }
  else{
    console.log('Tested');
  }
 }

    </script>

    
@endpush
