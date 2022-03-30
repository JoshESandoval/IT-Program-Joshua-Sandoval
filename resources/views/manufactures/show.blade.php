@extends('adminlte::page')

@section('title','View Manufacture')

@section('content_header')
    <h1>Manufacture Details</h1>    
@endsection

@section('content')
    <div>Name: {{$manufacture->title;}}</div>
    <div>Sales Email: {{$manufacture->salesEmail;}}</div>
    <div>Sales Phone Number: {{$manufacture->salesNumber;}}</div>
    <div>Tech Support Email: {{$manufacture->techEmail;}}</div>
    <div>Tech Support Number: {{$manufacture->techNumber;}}</div>
@stop