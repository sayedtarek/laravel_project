@extends('admin.app')

@section('content')
 <div class="main_content_container">
    <div class="main_container  main_menu_open">
             <!--Start system bath-->
        <div class="home_pass hidden-xs">
            <ul>
                <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                <li class="bring_right"><a href="">عقود الزواج</a></li>
            </ul>
        </div>
            <!--/End system bath-->
        <div class="page_content">
            <div class="page_content">

<h1 class="heading_title">عرض كل العقود الزواج</h1>

                    <div class="wrap">
                        <table class="table table-bordered">
                            <tr>
                                <td>اسم الزوج</td>
                                <td>اسم الزوجة</td>
                                <td>اسم وكيل العروس</td>
                                <td>ر.ق. للزوج</td>
                                <td>ر.ق. للزوجة</td>                                
                                <td>ر.ق. للوكيل</td>
                                <td>ر.ق. للشاهد الأول</td>
                                <td>ر.ق. للشاهد الثاني</td>
                                <td>القيمة</td>
                                <td>الصورة</td>

                                <td>التحكم</td>
                            </tr>
                            @foreach($mariages as $mariage) 
                            <tr>
                                <td>{{ $mariage->hus_name }}</td>
                                <td>{{ $mariage->wife_name }}</td>
                                <td>{{ $mariage->wife_parent_name }}</td>
                                <td>{{ $mariage->hus_ssn }}</td>
                                <td>{{ $mariage->wife_ssn }}</td>
                                <td>{{ $mariage->wife_parent_ssn }}</td>
                                <td>{{ $mariage->witness_1_ssn }}</td>
                                <td>{{ $mariage->witness_2_ssn }}</td>
                                <td>{{ $mariage->amount }}</td>
                                <td><img src="{{ URL::asset($mariage->file_path) }}" width="50px"/></td>

                                <td>
                                    {{-- <a href="#" class="glyphicon glyphicon-pencil" data-toggle="tooltip"
                                       data-placement="top" title="عرض"></a> --}}
                                       
            
           
            
                             <form method="DELETE" action="/dashboard/mariage/{{$mariage->id}} ">
                                    <button class="glyphicon glyphicon-remove"data-toggle="tooltip"
                                       data-placement="top" title="حذف"></button>
                                       </form>
                                       {{-- <a href="#" class="glyphicon glyphicon-remove" data-toggle="tooltip"
                                       data-placement="top" title="حذف"></a> --}}
                                </td>
                            </tr>
                           @endforeach
                            
                        </table>

                        <nav class="text-center">
                            <ul class="pagination">
                               {{--  <li class="disabled"><a aria-label="Previous" href="#"><span aria-hidden="true">»</span></a>
                                </li> --}}
                                {{-- <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li> --}}
                                <li><a href="">{{ $mariages->links() }}</a></li>
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