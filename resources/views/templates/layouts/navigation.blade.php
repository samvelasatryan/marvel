<ul>
	@foreach($obj->pages as $page)
		<li>
			@if(Request::is($page->slug))
			<span class="active">{{$page->title}}</span>
			@else
			<a href="{{url($page->slug)}}">{{$page->title}}</a>
			@endif
		</li>
	@endforeach
</ul>
