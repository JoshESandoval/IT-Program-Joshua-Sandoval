@extends('adminlte::page')

@section('title','Add Customer')

@section('content_header')
    <h1>Add Customer</h1>    
@stop

@section('content')
    <form method="post" class="horizoltal-group"  action="{{ route('customers.update', $customer->id)}}">
        @csrf
        <div class="form-group">
            First Name :
            <input type="input" name="fName" placeholder="Will" value="{{$customer->fName}}"> 
        </div>
        <div class="form-group">
                Last Name :
                <input type="input" name="lName" placeholder="Twist" value="{{$customer->lName}}"> 
            </div>
        

        <div class="form-group"> 
            Email          
           <input class="col-sm-6" type="email" name="cEmail" placeholder="JohnDough@exapmle.com" value="{{$customer->cEmail}}"> 
        </div>

        <div class="form-group">
            Phone #
            <input  type="tel" name="cNumber" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="909-867-5309" value="{{$customer->cNumber}}">
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