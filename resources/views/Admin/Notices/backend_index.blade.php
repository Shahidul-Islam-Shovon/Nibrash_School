@extends('layouts.dashboard')

@section('title')
Dashboard
@endsection


@section('content')

<h3>Welcome, {{Auth::user()->name}}</h3>
<br>
<h4>{{__('message.welcome')}}</h4>

<div class="container">
    <div class="row">
        <div style="margin-top: 30px;" class="col-md-12">
            @if(session('message'))
                <div class="alert alert-danger">
                    {{ session('message') }}
                </div>
            @endif
        </div>
    </div>
</div>

@endsection