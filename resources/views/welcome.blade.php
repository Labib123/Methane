@extends('layouts.app', [
    'class' => 'login-page',
    'elementActive' => ''
])

@section('content')
    <div class="content col-md-12 ml-auto mr-auto">
        <div class="header py-5 pb-7 pt-lg-9">
            <div class="container col-md-10">
                <div class="header-body text-center mb-7">
                @if(isset(auth()->user()->id) )
                 
                @if(auth()->user()->usertype == "collector" && auth()->user()->schedule== 0)    
                <div class="alert alert-danger" role="alert">
                        You did not complete your profile please add your schedule <a href="addSchedule"> Add Schedule! </a>
                </div>
                @endif
                @endif


                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-12 pt-5">
                            <h1 class="@if(Auth::guest()) text-white @endif">Welcome To Methane</h1>

                            <p class="@if(Auth::guest()) text-white @endif text-lead mt-3 mb-0">
                            “When you put the whole picture together, recycling is the right thing to do.”
                            </p>
                        </div>
                    </div>

                </div>
                @if(!isset(auth()->user()->id)) 
                <div class="mx-auto" style="width: 200px;"> 
                <a href="register">
                <button type="button"  class="mx-auto btn btn-outline-secondary  ">Start Recycling Now!</button>
                </a>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            demo.checkFullPageBackgroundImage();
        });
    </script>
@endpush
