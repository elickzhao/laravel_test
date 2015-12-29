@extends('layouts.master')
@section('title','Page Title')
@section('sidebar')
    @parent
    <p>This is appended to the master siderbar</p>
@endsection

@section('content')
    <p>This is my body content.</p>
     @datetime
@endsection