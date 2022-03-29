@extends('adminlte::page')

@section('title', 'Create Equiptment')

@section('content_header')
   <h1> Create Equiptment </h1>
@stop

@section('content')
    <h1>Basic Info</h1>
    <form  method="post" action="{{}}">
        @csrf
        
        <h3>Manufacturer</h3>
        <select class="btn btn-info" name="Type" id="TypeSelect">
            <option value="Lenovo">Lenovo</option>
            <option value="Apple">Apple</option>
            <option value="Dell">Dell</option>
            <option value="Microsoft">Microsoft</option>
        </select>
        <br>

        <h3>Category</h3>
        <input type="input" name="Catagory" placeholder="Tablet"/>

        <br>
        <x-adminlte-button type="submit" label="Submit"/>

        
    </form>
@stop 

@section('js')
	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    

@stop