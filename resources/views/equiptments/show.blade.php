@extends('adminlte::page')

@section('title','View Equiptment')

@section('content_header')
    <h1>Equiptment Details</h1>    
@endsection

@section('content')
    <div>ID: {{$equiptment->id;}}</div>
    <div>category: {{$equiptment->category;}}</div>
    <div>category: {{$equiptment->category;}}</div>
@stop