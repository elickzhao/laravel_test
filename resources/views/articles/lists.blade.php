@extends('app')
@section('content')
<h1>{{ $title }}</h1>
<br>
{!! $name !!}
{!! Form::open(array('url' => 'foo/bar')) !!}
{!! Form::label('email', 'E-Mail Address', array('class' => 'awesome')) !!}
{!! Form::text('email', 'example@gmail.com') !!}
{!! Form::close() !!}
@endsection