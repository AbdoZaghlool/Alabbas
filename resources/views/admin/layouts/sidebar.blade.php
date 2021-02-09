<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar navbar-collapse collapse">

        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler">
                    <span></span>
                </div>
            </li>
            <li class="nav-item start active open">
                <a href="/admin/home" class="nav-link nav-toggle">
                    <i class="fa fa-home" aria-hidden="true" style="color: aqua;"></i>
                    <span class="title">الرئيسية</span>
                    <span class="selected"></span>
                </a>
            </li>
            <li class="heading">
                <h3 class="uppercase">القائمة الجانبية</h3>
            </li>

            <li class="nav-item {{ strpos(URL::current(), 'admins') !== false ? 'active' : '' }}">
                <a href="{{ url('/admin/admins') }}" class="nav-link ">
                    <i class="fa fa-user-circle-o" aria-hidden="true" style="color: aqua;"></i>
                    <span class="title">المشرفين</span>
                </a>
            </li>

            <li class="nav-item {{ strpos(URL::current(), 'admin/cities') !== false ? 'active' : '' }}">
                <a href="/admin/cities" class="nav-link ">
                    <i class="fa fa-building-o" aria-hidden="true" style="color: aqua;"></i>
                    <span class="title">المدن</span>
                    <span class="badge badge-success">{!! count(\App\City::get()) !!}</span>
                </a>
            </li>

            <li class="nav-item {{ strpos(URL::current(), 'admin/sliders') !== false ? 'active' : '' }}">
                <a href="{{route('sliders.index')}}" class="nav-link ">
                    <i class="fa fa-file-image-o" aria-hidden="true" style="color: aqua;"></i>
                    <span class="title">السلايدر</span>
                    <span class="badge badge-success">{!! count(\App\Slider::get()) !!}</span>
                </a>
            </li>

            <li class="nav-item {{ strpos(URL::current(), 'admin/orders') !== false ? 'active' : '' }}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-shopping-basket" aria-hidden="true" style="color: aqua;"></i>
                    <span class="title">الطلبات</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="/admin/orders" class="nav-link ">
                            <span class="title">الطلبات الغير مدفوعة</span>
                            <span class="badge badge-success">{!! count(\App\Order::where('status','0')->get()) !!}</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="/admin/orders/paid" class="nav-link ">
                            <span class="title">الطلبات المدفوعة</span>
                            <span class="badge badge-success">{!! count(\App\Order::where('status','1')->get()) !!}</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="/admin/orders/canceled" class="nav-link ">
                            <span class="title">الطلبات الملغية</span>
                            <span class="badge badge-success">{!! count(\App\Order::where('status','2')->get()) !!}</span>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item {{ strpos(URL::current(), 'admin/setting') !== false ? 'active' : '' }}">
                <a href="/admin/setting" class="nav-link ">
                    <i class="icon-settings" style="color: aqua;"></i>
                    <span class="title">الاعدادات العامة</span>
                </a>
            </li>

        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
