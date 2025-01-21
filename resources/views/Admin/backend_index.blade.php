@extends('layouts.dashboard')

@section('title')
Dashboard
@endsection


@section('content')

<h3>Welcome, {{Auth::user()->name}}</h3>
<br>
<h4>{{__('message.welcome')}}</h4>


@endsection