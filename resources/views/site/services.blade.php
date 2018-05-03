@extends('site.app')

@section('content')
<div class="banner-buying">
	<div class="banner-buying">
		<div class="container">
			<h3><span>خدمات</span> الموقع</h3>
			<!---->
		</div>
	</div>
</div>
<!--contact-->
<div class="services" id="service">
	<div class="container">
		<div class="service-top">
			<h3>خدمات الموقع</h3>
			<p>يهدف الموقع لتسهيل حركة المواطنين وتسهيل عملهم بهدف منع التزوير ومنع العبث بتوقيعات المواطنين</p>
		</div>
		<div class="services-grid">
			<div class="col-md-6 service-top1">
				<div class=" ser-grid">
					<a href="{{ url('/registC') }}" class="hi-icon hi-icon-archive glyphicon glyphicon-file"> </a>
				</div>
				<div class="ser-top">
					<h4>توثيق شهادات</h4>
					<p>Contrary to popular belief, Lorem Ipsum is not simply random text.
						It has roots in a piece of classical.Contrary to popular belief, Lorem Ipsum </p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-6 service-top1">
				<div class=" ser-grid">
					<a href="{{ url('/registK') }}" class="hi-icon hi-icon-archive glyphicon glyphicon-leaf"> </a>
				</div>
				<div class="ser-top">
					<h4>توثيق العقود والممتلكات</h4>
					<p>Contrary to popular belief, Lorem Ipsum is not simply random text.
						It has roots in a piece of classical.Contrary to popular belief, Lorem Ipsum </p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="services-grid">
			<div class="col-md-6 service-top1">
				<div class=" ser-grid">
					<a href="{{ url('/registM') }}" class="hi-icon hi-icon-archive glyphicon glyphicon-user"> </a>
				</div>
				<div class="ser-top">
					<h4>توثيق عقود الزواج</h4>
					<p>Contrary to popular belief, Lorem Ipsum is not simply random text.
						It has roots in a piece of classical.Contrary to popular belief, Lorem Ipsum </p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-6 service-top1">
				<div class=" ser-grid">
					<a href="{{ url('/registT') }}" class="hi-icon hi-icon-archive glyphicon glyphicon-cog"> </a>
				</div>
				<div class="ser-top">
					<h4>توثيق التوكيلات</h4>
					<p>Contrary to popular belief, Lorem Ipsum is not simply random text.
						It has roots in a piece of classical .Contrary to popular belief, Lorem Ipsum</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>


@stop