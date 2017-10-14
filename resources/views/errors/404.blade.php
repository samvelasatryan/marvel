@extends('templates.layouts.default')
	@section('title'){{'Страница не найдена'}}@endsection

	@section('keywords'){{'error, 404, not found'}}@endsection

	@section('description'){{'Страница не найдена'}}@endsection
@section('head')
    <link rel="stylesheet" href="{{asset('css/animation.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('css/icons.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('css/error.css')}}" type="text/css">
@endsection

@section('content')
<div class="errorPageContent">
	<div class="container">
		<div class="pageContent">
			<h1>404</h1>
            <h2>Page Not Found</h2>
            <a href="/">Home Page</a> OR
            <a href="javascript:history.back()">Go Back</a>
		</div>
	</div>
</div>
	
@endsection
@section('script')
    {{-- <script src="{{asset('js/about.js')}}"></script> --}}
@endsection
