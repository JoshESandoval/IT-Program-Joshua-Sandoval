@@extends('adminlte::page')

@section('title','Add Manufacture')

@section('content_header')
    <h1>Add Manufacture</h1>    
@stop

@section('content')
    <form name="manufactureI" class="horizoltal-group" onsubmit="display()">
        @csrf
        <div class="form-group">
            Manufacture
            <input type="input" name="Manufacture" placeholder="Manufacture"> 
        </div>
@stop


@section('js')
	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <script> 
    function display(){
        alert(document.form1.Display);
    }
    </script>
@stop