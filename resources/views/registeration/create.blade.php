@extends('site.app')

@section('content')
<div class="banner-buying">
	<div class="banner-buying">
		<div class="container">
			<h3><span>تسجيل حساب </span>جديد</h3>
			<!---->
		</div>
	</div>
</div>
<!--//-->
<!--contact--> 
<div class="login-right">
	<div class="container">
		<h3>انضم الينا</h3>
		<div class="login-top">
			<div class="form-info">
				<form method="POST" action="{{ url('/register') }}">
					{{ csrf_field() }}
					<input type="text" name="name"  placeholder="الاسم" required="required" >
					@if ($errors->has('name'))
	                    <span class="help-block">
	                        <strong>{{ $errors->first('name') }}</strong>
	                    </span>
	                @endif
					<input type="text" name="email"  placeholder="البريد الالكترونى" required="required" >
					@if ($errors->has('email'))
	                    <span class="help-block">
	                        <strong>{{ $errors->first('email') }}</strong>
	                    </span>
	                @endif
					<input type="password" name="password" placeholder="كلمه المرور" required="required">
					@if ($errors->has('password'))
	                    <span class="help-block">
	                        <strong>{{ $errors->first('password') }}</strong>
	                    </span>
	                @endif
					<input type="password" name="password_confirmation" placeholder="كلمه المرور" required="required">
					@if ($errors->has('password_confirmation'))
	                    <span class="help-block">
	                        <strong>{{ $errors->first('password_confirmation') }}</strong>
	                    </span>
	                @endif			
                    <select name="seq_q" id="sce-q" required="required">
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
                    <input type="text" name="seq_a_confirmation" placeholder="اجابه سؤال الامان" required="required">
                    @if ($errors->has('seq_a_confirmation'))
	                    <span class="help-block">
	                        <strong>{{ $errors->first('seq_a_confirmation') }}</strong>
	                    </span>
	                @endif
					<label class="hvr-sweep-to-right">
			           	<input type="submit" value="انضم">
			        </label>
				</form>
				<p>لديك حساب بالفعل<a href="{{ url('/login') }}"> تسجيل الدخول</a></p>
			</div>			
		</div>
	</div>
</div>

@stop
