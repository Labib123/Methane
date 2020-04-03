<footer class="footer footer-black  footer-white ">
    <div class="container-fluid">
        <div class="row">
            <nav class="footer-nav">
                <ul>
                  
                </ul>
            </nav>
            <div class="credits ml-auto">
                <span class="copyright">
                    ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script>{{ __(', made by ') }}<i class="fa fa-heart heart"></i>{{ __('  ') }}<a class="@if(Auth::guest()) text-white @endif" href="https://www.labibmansour.com" target="_blank">{{ __('Labib & Doston') }}</a>{{ __(' at ') }}<a class="@if(Auth::guest()) text-white @endif" target="_blank" href="https://labibmansour.com">{{ __('HELP UNIVERSITY') }}</a>
                </span>
            </div>
        </div>
    </div>
</footer>