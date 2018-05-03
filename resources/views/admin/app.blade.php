<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>لوحة التحكم</title>
    <link href="{{URL::asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('admin/css/icon.css')}}" rel="stylesheet">
    <link href="{{URL::asset('admin/css/style.css')}}" rel="stylesheet">
    <link href="{{URL::asset('admin/css/ar.css')}}" rel="stylesheet" class="lang_css arabic">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('admin/css/semantic.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('admin/css/dropdown.min.css')}}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container-fluid">
    <!--Start header-->
    <div class="row header_section">
        <div class="col-sm-3 col-xs-12 logo_area bring_right">
            <h1 class="inline-block"><img src="/admin/img/logo.png" alt="">لوحة التحكم</h1>
            <span class="glyphicon glyphicon-align-justify bring_left open_close_menu" data-toggle="tooltip"
                  data-placement="right" title="Tooltip on left"></span>
        </div>
        <div class="col-sm-3 col-xs-12 head_buttons_area bring_right hidden-xs">
            <div class="inline-block full_screen bring_right hidden-xs">
                <span class="glyphicon glyphicon-fullscreen" data-toggle="tooltip" data-placement="left"
                      title="شاشة كاملة"></span>
            </div>
        </div>
        @if(Auth::check())
        <div class=" col-sm-4 col-xs-12 user_header_area bring_left left_text">
            <div class="user_info inline-block">
                <span class="h4 nomargin user_name">{{Auth::user()->name}}</span>
                <span class="glyphicon glyphicon-user"></span>
            </div>
        </div>
        @endif
    </div>
    <!--/End header-->

    <!--Start body container section-->
    <div class="row container_section">

        <!--Start Side bar main menu-->
        <div class="main_sidebar bring_right">
            <div class="main_sidebar_wrapper">

                <ul>
                    <li><span class="glyphicon glyphicon-home"></span><a href="{{url('/')}}">الصفحة الرئيسية</a></li>
                    <li><span class="glyphicon glyphicon-file"></span><a href="{{ url('/dashboard/certificates') }}">الشهادات</a></li>
                    <li><span class="glyphicon glyphicon-leaf"></span><a href="{{ url('/dashboard/konracts') }}">العقود و الممتلكات</a></li>
                    <li><span class="glyphicon glyphicon-user"></span><a href="{{ url('/dashboard/mariages') }}">عقود الزواج</a></li>
                    <li><span class="glyphicon glyphicon-cog"></span><a href="{{ url('/dashboard/twkels') }}">التوكيلات</a></li>
                    @if(Auth::user()->id == 1)
                    <li><span class="glyphicon glyphicon-envelope"></span><a href="{{ url('/dashboard/contact') }}">الرسائل</a></li>
                    <li><span class="glyphicon glyphicon-edit"></span><a href="{{ url('/dashboard/complaints') }}">الشكاوى و الاقتراحات</a></li>
                    @endif
                    <li><span class="glyphicon glyphicon-picture"></span><a href="{{ url('/logout') }}">تسجيل الخروج</a></li>
                </ul>
            </div>
        </div>
        <!--/End side bar main menu-->

        @yield('content') 

        </div>
        <!--/End body container section-->
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="{{URL::asset('admin/js/jquery-2.1.4.min.js')}}"></script>
<script src="{{URL::asset('admin/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('admin/js/js.js')}}"></script>
<script src="{{URL::asset('admin/js/semantic.min.js')}}"></script>
<script src="{{URL::asset('admin/css/dropdown.min.css')}}"></script>

</body>

</html>