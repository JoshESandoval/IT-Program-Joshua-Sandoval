@extends('adminlte::page')

@section('title', 'Manufactures List')

@section('content_header')
    <h1>Manufactures</h1>
@stop

@section('content')
    <table class='table table-hover'>
        <tr>
            <td>Name</td>
            <td>Sales Email</td>
            <td>Sales Number</td>
            <td>Tech Support Email</td>
            <td>Tech Support Number</td>
        </tr>
        @foreach($manufactures AS $manufacture)
        <tr>
            <td>{{$manufacture->title}}</td>
            <td>{{$manufacture->salesEmail}}</td>
            <td>{{$manufacture->salesNumber}}</td>
            <td>{{$manufacture->techEmail}}</td>
            <td>{{$manufacture->techNumber}}</td>
        </tr>
        @endforeach
    </table>