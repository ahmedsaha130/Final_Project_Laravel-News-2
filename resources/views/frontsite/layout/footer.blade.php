<div class="container-fluid fh5co_footer_right_reserved">
    <div class="container">
        <div class="row  ">
            <div class="col-12 col-md-6 py-4 Reserved"> © Copyright 2021, All rights reserved. Design by <a href="#" title="Free HTML5 Bootstrap templates">Ahmed Salha</a>. </div>
            <div class="col-12 col-md-6 spdp_right py-4">
                <a href="{{ route('index') }}" class="footer_last_part_menu">Home</a>
                <a href="{{ route('blog') }}" class="footer_last_part_menu">blog</a>
                {{--  <a href="{{ route('single',1) }}" class="footer_last_part_menu">single</a>  --}}
                <a   href="{{ route('contact') }}" class="footer_last_part_menu">Contact as</a></div>
                @guest

                    <a class="footer_last_part_menu"  href="{{ route('login') }}">Login Admin  <span class="sr-only">(current)</span></a>

                @endguest

                @auth()

                    <a class="footer_last_part_menu" href="{{ route('dashboardadmin') }}">dashboard <span class="sr-only">(current)</span></a>



                    <a  class="footer_last_part_menu" href="{{ route('logout') }}">Logout <span class="sr-only">(current)</span></a>

                @endauth
        </div>
    </div>
</div>
