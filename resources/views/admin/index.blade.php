@extends('admin.app')

@section('content')
<!--Start Main content container-->
        <div class="main_content_container">
            <div class="main_container  main_menu_open">
                <!--Start system bath-->
                <div class="home_pass hidden-xs">
                    <ul>
                        <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                        <li class="bring_right"><a href="">الصفحة الرئيسية للوحة تحكم الموقع</a></li>
                    </ul>
                </div>
                <!--/End system bath-->
                <div class="page_content">
                    <div class="page_content">
                        <div class="quick_links text-center">
                            <h1 class="heading_title">الوصول السريع</h1>
                            <a href="{{ url('/dashboard/certificates') }}" style="background-color: #8e44ad">
                                <h4>الشهادات</h4>
                            </a>
                            <a href="{{ url('/dashboard/konracts') }}" style="background-color: #2980b9">
                                <h4>العقود و الممتلكات</h4>
                            </a>
                            <a href="{{ url('/dashboard/mariages') }}" style="background-color: #c0392b">
                                <h4>عقود الزواج</h4>
                            </a>
                            <a href="{{ url('/dashboard/twkels') }}" style="background-color: #07CB79">
                                <h4>التوكيلات</h4>
                            </a>
                            @if(Auth::user()->id == 1)
                            <a href="{{ url('/dashboard/contact')}}" style="background-color: #d35400">
                                <h4>الرسائل</h4>
                            </a>
                            <a href="{{ url('/dashboard/complaint')}}" style="background-color: #c0392b">
                                <h4>الشكاوى و الاقتراحات</h4>
                            </a>
                            @endif
                           
                        </div>
                        
                    </div>
                </div>
            </div>
            <!--/End Main content container-->

@stop