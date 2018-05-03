@extends('site.app')

@section('content')
<div class=" banner-buying">
    <div class=" banner-buying">
        <div class=" container">
            <h3><span>توثيق </span>التوكيلات</h3>
        </div>
    </div>
</div>
<section class="twth2">
    <div class="twth2-bg">
        <div class="container">
            <div class="row">
                <h2>توثيق التوكيلات</h2>
                <div class="flash-message">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                  @if(Session::has('alert-' . $msg))
                  <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                  @endif
                @endforeach
              </div> <!-- end .flash-message -->
                <form method="POST" enctype="multipart/form-data" action="{{ url('/regist_twkel') }}" files="true">
                    {{ csrf_field() }}
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}" required="required">
                    <input type="text" name="party_1_name" placeholder="اسم الموكل " required="required">
                    <input type="text" name="party_2_name" placeholder="اسم الموكل له" required="required">
                    <input type="number" name="party_1_ssn" placeholder="الرقم القومى للموكل" required="required">
                    <input type="number" name="party_2_ssn" placeholder="الرقم القومى للموكل له" required="required">
                    <input type="number" name="amount" placeholder="قيمة التوثيق" required="required">
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