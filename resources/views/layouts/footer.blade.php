<footer>
	<div class="inner">
		{{-- sns list --}}
		<div>
			<h5>Follow us</h5>
			@include('layouts.sns')
		</div>
		
		<div class="row">
			<div class="col-md-3">
				<h3>ABOUT COMPANY</h3>
				{{-- @foreach ($aboutcompany as $company )
				<p></p>
				@endforeach --}}
				<p></p>
			</div>
			<div class="col-md-3">
				<h3>ABOUT COMPANY</h3>
				<ul>
					@foreach( $menus as $menu )
					<li><a href="{{ url( '/'.$menu->slug )}}">{{ucfirst($menu-> title)}}</a></li>
					@endforeach
				</ul>
			</div>
			<div class="col-md-3">
				<h3>CONSTRUCTION OFFICE</h3>
				<ul>
					{{-- @foreach ($office as $company )
					<li><i class=""></i></li>
					@endforeach--}}
				</ul>		
			</div>
			<div class="col-md-3">
				<h3>BUSINESS HOURS</h3>
				<p>Our support available to help you 24 hours a day, seven days a week.</p>
					
			</div>
		</div>
	</div>
</footer>
<footer class="copyright">
	<div class="inner">
		<p>Copyright (c) 2015 Construction Theme - Theme by <a href="#" title="new window" class="col_w" target="_blank">WPCharming</a></p>
		<ul class="service_menu">
			<li><a href="#" title="Our Services">Our Services</a></li>
			<li><a href="#" title="Projects">Projects</a></li>
			<li><a href="#" title="Contact Us">Contact Us</a></li>
			<li><a href="#" title="Disclaimer">Disclaimer</a></li>
			<li><a href="#" title="Privacy Policy">Privacy Policy</a></li>
		</ul>
	</div>
</footer>