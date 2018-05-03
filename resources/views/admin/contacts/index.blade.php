@extends('admin.app')

@section('content')
 <div class="main_content_container">
    <div class="main_container  main_menu_open">
             <!--Start system bath-->
        <div class="home_pass hidden-xs">
            <ul>
                <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                <li class="bring_right"><a href="">الرسائل</a></li>
            </ul>
        </div>
            <!--/End system bath-->
        <div class="page_content">
            <div class="page_content">

<h1 class="heading_title">عرض كل الرسائل</h1>

                    <div class="wrap">
                        <table class="table table-bordered">
                            <tr>
                                <td>الاسم</td>
                                <td>العنوان</td>
                                <td>الرسالة</td>
                                <td>البريد الالكتروني</td>
                                <td>التحكم</td>
                            </tr>
                            @foreach($contacts as $contact)
                            <tr>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->title }}</td>
                                <td>{{ $contact->body }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>
                                    {{-- <a href="#" class="glyphicon glyphicon-pencil" data-toggle="tooltip"
                                       data-placement="top" title="عرض"></a> --}}
                                   <form method="DELETE" action="/dashboard/contact/{{$contact->id}} ">
                                    <button class="glyphicon glyphicon-remove"data-toggle="tooltip"
                                       data-placement="top" title="حذف"></button>
                                       </form>
                                </td>
                            </tr>
                           @endforeach
                            
                        </table>

                        <nav class="text-center">
                            <ul class="pagination">
                               {{--  <li class="disabled"><a aria-label="Previous" href="#"><span aria-hidden="true">»</span></a>
                                </li> --}}
                                {{-- <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li> --}}
                                {{-- <li><a href="">{{ $contacts->links() }}</a></li> --}}
                                {{-- <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a aria-label="Next" href="#"><span aria-hidden="true">«</span></a></li> --}}
                            </ul>
                        </nav>
                   


			</div>
		</div>
	</div>
</div>

@stop