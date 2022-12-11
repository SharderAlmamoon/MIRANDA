<!DOCTYPE html>
<html lang="en">

<!-- HEAd FRONTEND -->
@include('frontend.includes.headfrontend')

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

   <!-- TOP HEADER -->
      @include('frontend.includes.topheader')

    <div class="site-wrap">
       @yield('maincontent')



        <!-- FOOTER -->
        @include('frontend.includes.footer')

    </div>
    <!-- .site-wrap -->


    <!-- loader -->
    <!-- <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#ff5e15" />
        </svg></div> -->

    <!-- Script -->
    @include('frontend.includes.script')
</body>

</html>
