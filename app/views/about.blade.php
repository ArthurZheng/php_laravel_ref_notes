@extends('master')

@section('header')
<h1>About This Site</h1>
@stop

@section('content')
<p>There are over cats on this page.</p>

<hr>

<h2>Detecting App Env</h2>

@if (App::environment('local'))

  The environment is local


@elseif (App::environment('local', 'staging'))

 The environment is either local OR staging...

@endif

@stop