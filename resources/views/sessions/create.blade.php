@extends('site.app')

@section('content')
<div class="banner-buying">
  <div class="banner-buying">
    <div class="container">
      <h3><span>تسجيل </span>الدخول</h3>
      <!---->
    </div>
  </div>
</div>
<!--//-->  			
<!--contact-->
<div class="login-right">
  <div class="container">
    <h3>تسجيل الدخول</h3>
    @if($errors->all())
    <div class= 'alert alert-danger' >
      <ul >
       @foreach($errors->all() as $error)
           <li>
           {{ $error }}
           </li>
        @endforeach      
      </ul>
    </div>
    @endif
    <div class="login-top">
      <div class="form-info">
          <form method="POST" action="{{ url('/login') }}" >
            {{ csrf_field() }}
            <input type="text" dir="rtl" class="text" name="email" placeholder="البريد الالكتروني" autofocus required="required">
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            <input type="password" dir="rtl" name="password" placeholder="كلمة المرور"" required="required">
            @if ($errors->has('passwrd'))
                <span class="help-block">
                    <strong>{{ $errors->first('passwrd') }}</strong>
                </span>
            @endif
            <select name="seq_q" dir="rtl" id="sce-q" required="required">
                <option value="0">سؤال الامان</option>
                <option value="1">ما هو نوع اول سياره لك.</option>
                <option value="2">اسم جدك من ناحيه الام</option>
                <option value="3">اسم مدرس الرياضيات لك ف المدرسه الابتدائيه؟</option>
                <option value="4">الرياضة المفضله لك ؟</option>
            </select>
            @if ($errors->has('seq_q'))
                <span class="help-block">
                    <strong>{{ $errors->first('seq_q') }}</strong>
                </span>
            @endif
            <input type="text" name="seq_a" placeholder="اجابه سؤال الامان" required="required">
            @if ($errors->has('seq_a'))
                <span class="help-block">
                    <strong>{{ $errors->first('seq_a') }}</strong>
                </span>
            @endif
              <label class="hvr-sweep-to-right">
                <input type="reset" value="ارسال رمز تأكيد على الهاتف">
              </label>
              <label class="hvr-sweep-to-right">
                <input type="submit" value="دخول">
              </label>              
          </form>
      </div>
      <div class="create">
        <h4>ليس لديك حساب؟</h4>
        <a class="hvr-sweep-to-right" href="{{ url('/register') }}">انشاء حساب جديد</a>
        <div class="clearfix"></div>
      </div>
  </div>
</div>
</div>
<!--//contact-->	
@stop


