


<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="http://127.0.0.1:8000/" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="{{ asset('paper') }}/img/logo-small.png">
            </div>
        </a>
        <a href="http://127.0.0.1:8000/" class="simple-text logo-normal">
        Methane
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">







        <?php
        $user =  auth()->user();           
?>

                @if($user->usertype == "collector")
                    <li class="{{ $elementActive == 'dashboard' ? 'active' : '' }}">
                    <a href='collectorSubmission?id={{$user->id}}'>  view submission 
                    <i class="nc-icon nc-zoom-split"></i>
                    </a>
            </li>
            <li class="{{ $elementActive == 'recordsubmission' ? 'active' : '' }}">
            <a href='c'> record submission 
                    <i class="nc-icon nc-check-2"></i>
                    </a>
            </li>

            <li class="{{ $elementActive == 'addmaterials' ? 'active' : '' }}">
            <a href='/collectorMaterials'> Add Material  
                    <i class="nc-icon nc-minimal-right"></i>
                    </a>
            </li>
                    
                
                @endif
                @if($user->usertype == "recycler")
                    <li class="{{ $elementActive == 'makeappointment' ? 'active' : '' }}">
                    <a href='makeappointment'>  make appoitment     
                    <i class="nc-icon nc-calendar-60"></i>
                    </a>
            </li>
            <li class="{{ $elementActive == 'recyclerSubmission' ? 'active' : '' }}">
            <a href='recyclerSubmission?id={{$user->id}}'> view submission 
                    <i class="nc-icon nc-zoom-split"></i>
                    </a>
            </li>
            
                
                @endif


                @if(!isset($user->usertype))

                <li class="{{ $elementActive == 'viewsubmission' ? 'active' : '' }}">
            <a href='recyclerSubmission?id={{$user->id}}'> view submission 
                    <i class="nc-icon nc-zoom-split"></i>
                    </a>
            </li>

            <li class="{{ $elementActive == 'showmaterial' ? 'active' : '' }}">
            <a href='material'> Show Material 
                    <i class="nc-icon nc-zoom-split"></i>
                    </a>
            </li>


                @endif

            <li class="{{ $elementActive == 'dashboard' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'dashboard') }}">
                    <i class="nc-icon nc-bank"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'user' || $elementActive == 'profile' ? 'active' : '' }}">
                <a data-toggle="collapse" aria-expanded="true" href="#laravelExamples">
                    <i class="nc-icon"><img src="{{ asset('paper/img/laravel.svg') }}"></i>
                    <p>
                            {{ __('Laravel examples') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="laravelExamples">
                    <ul class="nav">
                        <li class="{{ $elementActive == 'profile' ? 'active' : '' }}">
                            <a href="{{ route('profile.edit') }}">
                                <span class="sidebar-mini-icon">{{ __('UP') }}</span>
                                <span class="sidebar-normal">{{ __(' User Profile ') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'user' ? 'active' : '' }}">
                            <a href="{{ route('page.index', 'user') }}">
                                <span class="sidebar-mini-icon">{{ __('U') }}</span>
                                <span class="sidebar-normal">{{ __(' User Management ') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="{{ $elementActive == 'icons' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'icons') }}">
                    <i class="nc-icon nc-diamond"></i>
                    <p>{{ __('Icons') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'map' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'map') }}">
                    <i class="nc-icon nc-pin-3"></i>
                    <p>{{ __('Maps') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'notifications' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'notifications') }}">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>{{ __('Notifications') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'tables' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'tables') }}">
                    <i class="nc-icon nc-tile-56"></i>
                    <p>{{ __('Table List') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'typography' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'typography') }}">
                    <i class="nc-icon nc-caps-small"></i>
                    <p>{{ __('Typography') }}</p>
                </a>
            </li>
           
        </ul>
    </div>
</div>