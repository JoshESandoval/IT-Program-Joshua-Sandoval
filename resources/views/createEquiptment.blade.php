@extends('adminlte::page')

@section('title', 'Create Equiptment')

@section('content_header')
   <h1> Create Equiptment </h1>
@stop

@section('content')
    <p>Edit Information to create Equiptment</p>
    <form method="post" action="{{colsole.log()}}">
        @csrf 
        <x-adminlte-input name="Manufacturer" />
        <p>Type</p>
        <select name="Type" id="TypeSelect">
            <option value="Lenovo">Lenovo</option>
            <option value="Apple">Apple</option>
            <option value="Dell">Dell</option>
            <option value="Microsoft">Microsoft</option>
        </select>

        <x-adminlte-button type="submit" label="Submit"/>
@stop 

