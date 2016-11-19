@extends('layouts.master')
@section('googlemap')
<script src="https://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script type="text/javascript">
	window.onload =function initialize() {

		var Y_point			= 37.422348;
		var X_point			= -122.084134;

		var zoomLevel		= 13;
		var markerTitle		= "CONSTRUCTION";	
		var markerMaxWidth	= 300;

		// 말풍선 내용
		var contentString	= '<div>' + '<h2>CONSTRUCTION</h2>'+ '<p>1600 Amphitheatre Parkway<br>Mountain View CA 94043<br>United States</p>' + '</div>';

		var myLatlng = new google.maps.LatLng(Y_point, X_point);
		var mapOptions = {
			zoom: zoomLevel,
			center: myLatlng,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		}
		var map = new google.maps.Map(document.getElementById('map_view'), mapOptions);

		var marker = new google.maps.Marker({
			position: myLatlng,
			map: map,
			title: markerTitle
		});

		var infowindow = new google.maps.InfoWindow({
			content: contentString,
			maxWidth: markerMaxWidth
		});

		google.maps.event.addListener(marker, 'click', function() {
			infowindow.open(map, marker);
		});
	}

</script>
@endsection

@section('contact_header')
<section class="contact_header">
	<div class="inner">
		<h2>Get in touch with us.</h2>
		<p>Contact The Construction Company</p>
	</div>
</section>
@endsection

@section('content')
<div class="inner">
	<h3 class="tit_st1">Contact Us</h3>
	<div class="row">
		<div class="inner">
			<div class="col-md-6">
				<p>Call or submit our online form to request an estimate or for general questions about U.S. Certified Contractors and our services. We look forward to serving you!</p>
				<form action="" method="post">
					<div class="col_2_wrap">
						<div class="inner">
							<div><input type="text" name="u_f_n" placeholder="First Name *" /></div>
							<div><input type="text" name="u_l_n" placeholder="Last Name *" /></div>
						</div>
					</div>
					<div class="col_2_wrap">
						<div class="inner">
							<div><input type="text" name="u_email" placeholder="Your Email *" /></div>
							<div><input type="text" name="u_phone" placeholder="Your Phone Number *" /></div>
						</div>
					</div>
					<input type="text" name="u_s" placeholder="Subject" />
					<textarea name="u_m" id="" cols="30" rows="10" placeholder="Message"></textarea>
					<input type="submit" name="u_submit" value="Send Message" />
				</form>
			</div>
			<div class="col-md-6">
				<div class="col_2_wrap">
					<div class="inner">
						<div class="col-md-6">
							<h3>Mailing Address</h3>
							<p>1600 Amphitheatre Parkway<br>Mountain View CA 94043<br>United States</p>
						</div>
						<div class="col-md-6">
							<h3>Contact Info</h3>
							<p>+1 (312) 380-6650<br><a class="col_y" href="contact@construction.com">contact@construction.com</a><br><span class="col_y">@construction_llc</span></p>
						</div>
					</div>
				</div>
				<div class="google_map" id="map_view">

				</div>
			</div>
		</div>
	</div>
</div>
@endsection