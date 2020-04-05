
<nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
    <div class="container-fluid">
        <div class="navbar-wrapper">
            <div class="navbar-toggle">
                <button type="button" class="navbar-toggler">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            
            <?php 
            if(!isset(auth()->user()->usertype)){
                $current = "Admin's Dashboard";
                }
                else{
                    $current = "User's Dashboard" ;
                }
                    ?>
            <a class="navbar-brand" href="http://127.0.0.1:8000/"> 
                <?php echo $current ; ?>
            </a>
          
        </div>
       
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
            aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>
        
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
     

            <!-- <form>
                <div class="input-group no-border">
                    <input type="text" value="" class="form-control" placeholder="Search...">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <i class="nc-icon nc-zoom-split"></i>
                        </div>
                    </div>
                </div>
            </form> -->
            
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link btn-magnify" href="/">
                        <p>
                            <span class="d-lg-none d-md-block">{{ __('Stats') }}</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item btn-rotate dropdown">
                    <a class="nav-link dropdown-toggle" href="/" id="navbarDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="nc-icon nc-bell-55"></i>
                        
                        <p>
                            <span class="d-lg-none d-md-block">{{ __('Some Actions') }}</span>
                        </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">{{ __('New Appointment') }}</a>
                        <a class="dropdown-item" href="#">{{ __('New Submission') }}</a>
                        <a class="dropdown-item" href="#">{{ __('You have rewarded new points') }}</a>
                    </div>
                </li>

                <li class="nav-item btn-rotate dropdown">
                    <a class="nav-link dropdown-toggle" href="/" id="navbarDropdownMenuLink2"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <!-- <i class="nc-icon nc-settings-gear-65"></i> -->
                        <span class="">{{auth()->user()->fullname}}</span>


                        <p>
                            <span class="d-lg-none d-md-block">{{ __('Account') }}</span>
                        </p>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink2">
                     
                        <form class="dropdown-item" action="{{ route('logout' ) }}" id="formLogOut" method="get" style="display: none;">
                            @csrf
                        </form>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" onclick="document.getElementById('formLogOut').submit();">{{ __('Log out') }}</a>
                            <a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __('My profile') }}</a>
                            @if(isset(auth()->user()->id))
            @if(auth()->user()->usertype == 'recycler')
                            <div class="">
                           <a class="dropdown-item ">Level: {{auth()->user()->ecolevel}}</a>
                           <span class="dropdown-item ">Points:     {{auth()->user()->totalpoints}}</span>
                           </div>
                           @endif
                            @endif    

                            @if(isset(auth()->user()->id))
            @if(auth()->user()->usertype == 'collector')
                            <div class="">
                           <span class="dropdown-item ">Points:     {{auth()->user()->totalpoints}}</span>
                           </div>
                           @endif
                            @endif    

                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
