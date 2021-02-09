@include('website.layouts.header')


<div id="wrapper" class="animsition">

    <div id="page" class="clearfix">

        {{-- @include('website.layouts.nav') --}}

        @yield('content')






    </div><!-- /#page -->
</div><!-- /#wrapper -->
<a id="scroll-top"></a>

@include('website.layouts.scripts')

</body>

</html>
