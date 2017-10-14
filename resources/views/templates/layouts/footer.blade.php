<div id="footer-container">
	<div class="footer-content">
		<ul>
			@foreach($obj->pages as $page)
				<li>
					@if(Request::is($page->slug))
					<span>{{$page->title}}</span>
					@else
					<a href="{{url($page->slug)}}">{{$page->title}}</a>
					@endif
				</li>
			@endforeach
		</ul>
	</div>
	<div class="infoText">Copyright &copy {{ date('Y') }} All rights reserved</div>
</div>