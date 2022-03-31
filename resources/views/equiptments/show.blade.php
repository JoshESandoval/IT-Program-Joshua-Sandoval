@extends('adminlte::page')

@section('title','View Equiptment')

@section('content_header')
    <h1>Equiptment Details</h1>    
@endsection

@section('content')
    <div>ID: {{$equiptment->id;}}</div>
    <div>category: {{$equiptment->catagory;}}</div>
    <div>category: {{$manufactures[$equiptment->manufactureId]->title;}}</div>
    <div>category: {{$customers[$equiptment->userId]->fName;}}</div>
@stop