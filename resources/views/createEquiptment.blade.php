@extends('adminlte::page')

@section('title', 'Create Equiptment')

@section('content_header')
   <h1> Create Equiptment </h1>
@stop

@section('content')
    
    <form name="form1" class="horizontal-group" onsubmit="display()">
        @csrf
        <h1>Basic Info</h1>
        <br>
        
        <div class="form-group">
        Manufacture
        <select class="btn btn-info" name="Type" id="TypeSelect">
            <option value="Lenovo">Lenovo</option>
            <option value="Apple">Apple</option>
            <option value="Dell">Dell</option>
            <option value="Microsoft">Microsoft</option>
        </select>
        </div>

        <div class="form-group">
        Category
        <input type="input" name="Catagory" placeholder="Tablet"/>
        </div>
        <br>

        <h1>Specs</h1>
        
        <div class="form-group">
        Display
        <input type ="input" name="Display" placeholder="LED"/>
        </div>

        <div class="form-group">
        Memory
        <select class="btn btn-info" name="Memory" id="MemorySelect">

            <option value ="16GB">16GB</option>
            <option value = "32GB">32GB</option>
            <option value = "64GB" >64GB</option>
            <option value ="128GB">128GB</option>
            <option value ="256GB">256GB</option>
            <option value ="500">500GB</option>
            <option value ="1TB">1TB</option>
        </select>
        </div>

        <div class="form-group">
        Ram
        <select class="btn btn-info" name="Ram" id="RamSelect">
            <option value = "4GB">4GB</option>
            <option value = "8GB">8GB</option>
            <option value = "16GB">16GB</option>
            <option value = "32GB">32GB</option>
        </select>
        </div>

        <div class="form-group">
            Processor
            <input type="input" placeholder="intel...">
        </div>

        <div class="form-group">
            Graphics        
            <input type="input" placeholder="NVIDIA">
        </div>
        <br>


        <h1>Invoice Information</h1>
        <br>
        <div class="form-group">
            Price  $
            <input type="number" name="Price" min="0" id="PriceArea">
            .00
        </div>
        
        <div class="form-group">
            Purchase Date
            <input type="date" name="PurchaseDate">
        </div>

        <input class="btn btn-success" type="submit" label="Submit"/>
        
    </form>
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