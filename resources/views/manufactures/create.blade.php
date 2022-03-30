@extends('adminlte::page')

@section('title','Add Manufacture')

@section('content_header')
    <h1>Add Manufacture</h1>    
@stop

@section('content')
    <form method="post" class="horizoltal-group" onsubmit="alert('hi')" action="{{ route('manufactures.store') }}">
        @csrf
        <div class="form-group">
            Manufacture
            <input type="input" name="title" placeholder="Lenovo"> 
        </div>

        <h4>Sales Info</h4>

        <div class="form-group"> 
            Email          
           <input class="col-sm-6" type="email" name="salesEmail" placeholder="JohnDough@exapmle.com"> 
        </div>

        <div class="form-group">
            Phone #
            <input  type="tel" name="salesNumber" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="909-867-5309">
        </div>

        <h4>Tech Support Info</h4>

        <div class="form-group">
            Email
            <input class="col-sm-6" type="email" name="techEmail" placeholder="BlackSmith@example.net"> 
        </div>
        
        <div class="form-group">
            Phone #
            <input type="tel" name="techNumber" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="909-867-5309">
        </div>

        <input type="submit" class="btn btn-default" label="Submit">
        <br>
        <br>
    </form>
@stop


@section('js')
	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <script> 
    function display(){
        alert(document.manufactureI.TechEmail);
    }
    </script>
@stop