@extends('adminlte::page')

@section('title','View Customer')

@section('content_header')
    <h1>Customer Details</h1>    
@endsection

@section('content')
    <div>ID: {{$customer->id;}}</div>
    <div>First Name: {{$customer->fName;}}</div>
    <div>Last Name: {{$customer->slName;}}</div>
    <div>Email: {{$customer->cEmail;}}</div>
    <div>Phone : {{$customer->cNumber;}}</div>
    <a class='btn btn-default' href="{{route('customers.edit', ['customer'=>$customer->id]) }}">Edit</a>
    @stop