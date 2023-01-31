	{{-- {{ print_r($listings)}} --}}
	<h1>Laravel Job Listings</h1>
	@foreach($listings as $listing)
	<li><a href="listings/{{$listing['id']}}">{{$listing['desc']}}</a></li>
	@endforeach