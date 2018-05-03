@extends('site.app')

@section('content')
<div class=" banner-buying">
    <div class=" banner-buying">
        <div class=" container">
            <h3><span>توثيق عقود</span> الزواج</h3>
        </div>
    </div>
</div>
<section class="twth2">
    <div class="twth2-bg">
        <div class="container">
            <div class="row">
                <h2>توثيق عقود الزواج</h2>
                <div class="flash-message">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                  @if(Session::has('alert-' . $msg))
                  <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                  @endif
                @endforeach
              </div> <!-- end .flash-message -->
                <form method="POST" enctype="multipart/form-data" action="{{ url('/regist_mariage') }}" files="true">
                    {{ csrf_field() }}
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}" required="required">
                     <input type="text" name="hus_name" placeholder="اسم الزوج " required="required">
                    <input type="text" name="wife_name" placeholder="اسم الزوحه" required="required">                
                    <input type="text" name="wife_parent_name" placeholder=" وكيل العروس" required="required">
                    <input type="number" name="hus_ssn" placeholder="الرقم القومى للزوج" required="required">
                    <input type="number" name="wife_ssn" placeholder="الرقم القومى للزوجه" required="required">
                    <input type="number" name="wife_parent_ssn" placeholder="الرقم القومى لوكيل العروس" required="required">
                    <input type="number" name="witness_1_ssn" placeholder="الرقم القومى للشاهد الاول " required="required">
                    <input type="number" name="witness_2_ssn" placeholder="الرقم القومى للشاهد الثانى " required="required">
                    <input type="number" name="amount" placeholder="قيمة التوثيق">
                    <input type="file" name="file" placeholder="صورة الشهاده" required="required">
                    <label class="hvr-sweep-to-right">
                        <input type="submit" value="توثيق">
                    </label>
                </form>
            </div>
        </div>
    </div>
</section>

@stop