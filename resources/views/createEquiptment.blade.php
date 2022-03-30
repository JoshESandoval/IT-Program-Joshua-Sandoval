@extends('adminlte::page')

@section('title', 'Create Equiptment')

@section('content_header')
   <h1> Create Equiptment </h1>
@stop

@section('content')
    <h1>Basic Info</h1>
    <br>
    <form  onsubmit="alert('hi')">
        @csrf

        <h4>Manufacturer</h4>
        <select class="btn btn-info" name="Type" id="TypeSelect">
            <option value="Lenovo">Lenovo</option>
            <option value="Apple">Apple</option>
            <option value="Dell">Dell</option>
            <option value="Microsoft">Microsoft</option>
        </select>
        <br>
        <br>
        <h4>Category</h4>
        <input type="input" name="Catagory" placeholder="Tablet"/>
        <br>
        <br>

        <h1>Specs</h1>
        
        <h4>Display</h4>
        <input type ="input" name="Display" placeholder="LED"/>
        <br>
        <br>

        <h4>Memory</h4>
        <select class="btn btn-info" name="Memory" id="MemorySelect">

            <option value ="16GB">16GB</option>
            <option value = "32GB">32GB</option>
            <option value = "64GB" >64GB</option>
            <option value ="128GB">128GB</option>
            <option value ="256GB">256GB</option>
        </select>
        <br>
        <br>

        <h4>Ram</h4>
        <select class="btn btn-info" name="Ram" id="RamSelect">
            <option value = "4GB">4GB</option>
            <option value = "8GB">8GB</option>
            <option value = "16GB">16GB</option>
            <option value = "32GB">32GB</option>
        </select>
        <br>
        <br>
        <h4>Processor</h4>
            <input type="input" placeholder="intel...">
        <br>
        <br>

        <h4>Graphics</h4>        
            <input type="input" placeholder="NVIDIA">
        <br>
        <br>


        <h1>Invoice Information</h1>
        <br>
        <h4>Price</h4>
        <div class="col-xs-2">
            $
            <input type="number" name="Price" min="0" id="PriceArea">
            .00
        </div>
        <br>
        <h4>Date</h4>
        <input type="date" name="PurchaseDate">

        <br>
        <br>

        <input class="btn btn-success" type="submit" value="Submit" label="Submit"/>
        
    </form>
@stop 

@section('js')
	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

@stop