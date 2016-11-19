<ul class="sns_list">
	@foreach( $companys_sns as $company )
	<li><a href="{{ $company -> link }}"><i class="{{ $company -> iconclass }}"></i><span>{{ $company -> title }}</span></a></li>
	@endforeach
</ul>
