@extends('layouts.main-layout')
@section('content')
<h1>hello</h1>    
<videogame-component user='{{Auth::check()}}'></videogame-component>
@endsection