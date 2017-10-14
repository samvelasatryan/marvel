<div class="inner animated fade-down-in">
    <div class="headerSocialIcons">
            <a href="{{$obj->globalSettings['fb_link']}}" target="_blank">
                <span class="icon-facebook"></span>
            </a>
            <a href="{{$obj->globalSettings['twitter_link']}}" target="_blank">
                <span class="icon-vk"></span>
            </a>
            <a href="{{$obj->globalSettings['youtube_link']}}" target="_blank">
                <span class="icon-youtube"></span>
            </a>
            <a href="{{$obj->globalSettings['instagram_link']}}" target="_blank">
                <span class="icon-instagram"></span>
            </a>
    </div>
@if(Request::is('/'.Request::route('alias')))
	<div class="logo">
		<img id="logo-top-left"  src="/images/{{$obj->globalSettings['logo']}}" height="50" width="183" alt="Award logo">
	</div>
@else
    <a href="/" title="Award" class="logo">
        <img id="logo-top-left"  src="/images/{{$obj->globalSettings['logo']}}" height="50" width="183" alt="Award logo">
    </a>
@endif
    <div class="navigationContent">
        <div id="mobile-icon">
            <div>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <nav>@include('templates.layouts.navigation')</nav>
    </div>
</div>
