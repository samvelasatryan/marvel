@extends('panelViews::mainTemplate')
@section('page-wrapper')
@if (!empty($message))
    <div class="alert-box success">
        <h2>{{ $message }}</h2>
    </div>
@endif
    <h1>Website Configuration</h1>
        {!!
         Form::model($settings, ['url' => 'update-settings','files' => true])
        !!}
    <div class="col-sm-6 well well-lg">
        {!! Form::label('site_title', \Lang::get('Site Title')) !!}
        {!! Form::text('site_title', Input::old('site_title'), array('class' => 'form-control','placeholder'=>'Type Your Site Title')) !!}
        <br />
        {!! Form::label('site_description', \Lang::get('Site Description')) !!}
        {!! Form::textarea('site_description', Input::old('site_description'), array('class' => 'form-control','placeholder'=>'Type Your Site Description')) !!}
        <br />
        {!! Form::label('site_keywords', \Lang::get('Site Keywords')) !!}
        {!! Form::textarea('site_keywords', Input::old('site_keywords'), array('class' => 'form-control','placeholder'=>'Type Your Site Keywords')) !!}
        <br />
        {!! Form::label('image', \Lang::get('Site Logo')) !!}
        {!! Form::file('image') !!}
        @if (isset($settings->logo) && $settings->logo != '')
            <img src="{{asset('images/'.$settings->logo)}}" alt="" width="100" height="100">
            <p>{{$settings->logo}}</p>
        @endif
        <br />
    </div>
    <div class="col-sm-6 well well-lg">
        <legend>Contact Information:</legend>
        {!! Form::text('address', Input::old('address'), array('class' => 'form-control','placeholder'=>'Address')) !!}
        <br />
        {!! Form::email('email', Input::old('email'), array('class' => 'form-control','placeholder'=>'Email Address')) !!}
        <br />
        {!! Form::text('tel', Input::old('tel'), array('class' => 'form-control','placeholder'=>'Phone number')) !!}
        <br />
        {!! Form::text('fax', Input::old('fax'), array('class' => 'form-control','placeholder'=>'Fax number')) !!}
        <br />
        <legend>Social Links:</legend>
        {{--  {!! Form::label('social_links', \Lang::get('Social Links')) !!}  --}}
        {!! Form::text('fb_link', Input::old('fb_link'), array('class' => 'form-control','placeholder'=>'Facebook account link')) !!}
        <br />
        {!! Form::text('twitter_link', Input::old('twitter_link'), array('class' => 'form-control','placeholder'=>'Twitter account link')) !!}
        <br>
        {!! Form::text('youtube_link', Input::old('youtube_link'), array('class' => 'form-control','placeholder'=>'Youtube account link')) !!}
        <br>
        {!! Form::text('instagram_link', Input::old('instagram_link'), array('class' => 'form-control','placeholder'=>'Instagram account link')) !!}
        <br>
        <legend>Line-up image:</legend>
        {{--  {!! Form::label('line-up', \Lang::get('Line-up image')) !!}  --}}
        {!! Form::file('line-up') !!}
        @if (isset($settings->lineup) && $settings->lineup != '')
            <img src="{{asset('images/'.$settings->lineup)}}" alt="" width="100" height="100">
            <p>{{$settings->lineup}}</p>
        @endif
        <br />
        <br>
        <legend>Buy tickets images:</legend>
        {!! Form::label('buy_ticket_first', \Lang::get('First image')) !!} 
        {!! Form::file('buy_ticket_first') !!}
        @if (isset($settings->buy_ticket_first) && $settings->buy_ticket_first != '')
            <img src="{{asset('images/'.$settings->buy_ticket_first)}}" alt="" width="100" height="100">
            <p>{{$settings->buy_ticket_first}}</p>
        @endif
        <br />
        {!! Form::label('buy_ticket_second', \Lang::get('Second image')) !!} 
        {!! Form::file('buy_ticket_second') !!}
        @if (isset($settings->buy_ticket_second) && $settings->buy_ticket_second != '')
            <img src="{{asset('images/'.$settings->buy_ticket_second)}}" alt="" width="100" height="100">
            <p>{{$settings->buy_ticket_second}}</p>
        @endif
        <br />
        <legend>Voting Interval day(s):</legend>
        {!! Form::number('vote_interval', Input::old('vote_interval'),array('class' => 'form-control','value'=>0,'max'=>31,'min'=>1)) !!}
        <br>
    </div>
    <div class="col-sm-12">
        {!! Form::submit(\Lang::get('Save Settings'), array('class' => 'btn btn-primary')) !!}
        {!! Form::close() !!}
    </div>
@endsection