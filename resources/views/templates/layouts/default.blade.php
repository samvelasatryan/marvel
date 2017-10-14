<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" xml:lang="{{ config('app.locale') }}" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Marvel Travel - @yield('title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="@yield('keywords')">
    <meta name="description" content="@yield('description')">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <meta property="og:title" content="Marvel Travel - @yield('title')" />
    <meta property="og:type" content="Website" />
    <meta property="og:url" content="{{ Request::url() }}" />
    @if(isset($obj->singleNews))
    <meta property="og:image" content="@yield('og-image')" />
    @else
    <meta property="og:image" content="{{asset('images/logo.png')}}" />
    <meta property="article:publisher" content="https://www.facebook.com/MarvelTravel1">
    @endif --}}
    <meta property="og:description" content="@yield('description')">
    <link href="https://plus.google.com/+Freedomdevelopment" rel="publisher">
    {{-- <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon"> --}}
    <link rel="apple-touch-icon-precomposed" href="/images/apple-touch-icon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fingerprintjs2/1.5.1/fingerprint2.min.js"></script>
    <script>
        /*fingerprint = '';
        new Fingerprint2().get(function(result, components){
            fingerprint = result;
            $.ajax({
                url: '/fingerprint-session',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    fingerprint: fingerprint},
                })
            .done(function(data) {
            })
            .fail(function(xhr) {
                console.log(xhr);
            });
        });
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-42807763-1']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();*/
    </script>
    @yield('head')
</head>
<body>
    {{-- <header class="{{Request::is('/') ? 'home' : ''}}">@include('templates.layouts.header')</header> --}}
    <main>
        @yield('content')
    </main>
    @yield('script')
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>