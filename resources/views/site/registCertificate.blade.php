@extends('site.app')

@section('content')
<div class=" banner-buying">
    <div class=" banner-buying">
        <div class=" container">
            <h3><span>توثيق </span>الشهادات</h3>
        </div>
    </div>
</div>
<section class="twth2">
    <div class="twth2-bg">
        <div class="container">
            <div class="row">
                <h2>توثيق الشهادات</h2>
                <div class="flash-message">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                  @if(Session::has('alert-' . $msg))
                  <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                  @endif
                @endforeach
              </div> <!-- end .flash-message -->
                <form method="POST" enctype="multipart/form-data" action="{{ url('/regist_certificate') }}" files="true">
                    {{ csrf_field() }}
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <input type="text" name="name" placeholder="اسم صاحب الشهادة" required="required" value="@if(isset($certificate->name)){{ $certificate->name }}@endif">
                    <input type="text" name="title" placeholder="اسم الشهاده" required="required" value="@if(isset($certificate->title)){{ $certificate->title }}@endif">
                    <input type="number" name="ssn" placeholder="الرقم القومى " required="required" value="@if(isset($certificate->ssn)){{ $certificate->ssn }}@endif">
                    <input type="text" name="location" placeholder="مكان صدور الشهاده" required="required" value="@if(isset($certificate->location)){{ $certificate->location }}@endif">
                    <input type="number" name="amount" placeholder="قيمة التوثيق" required="required" value="@if(isset($certificate->amount)){{ $certificate->amount }}@endif">
                    @if(isset($certificate->file_path))
                    <img src="{{URL::asset($certificate->file_path)}}" width="70%"/>}}
                    @endif
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