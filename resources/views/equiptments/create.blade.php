@extends('adminlte::page')

@section('title', 'Create Equiptment')

@section('content_header')
   <h1> Create Equiptment </h1>
@stop

@section('content')
    
    <form method='post' action="{{ route('equiptments.store') }}"  class="horizontal-group" >

        @csrf

        <h1>Customer Information</h1>
        <select class="btn btn-info" name="userId" id="TypeSelect">
            @foreach ($customers AS $customer)
                <option value={{$customer->id}} > {{$customer->fName}}  {{$customer->lName}} </option>
            @endforeach
        </select>
        
        <div id="customerDisplay">
        </div>
        <br>

        <h1>Basic Info</h1>
        <br>
        
        <div class="form-group">
        Manufacture
        <select class="btn btn-info" name="manufactureId" id="TypeSelect" >
            @foreach ($manufactures AS $manufacture)
                <option value={{$manufacture->id}} > {{$manufacture->title}}
            @endforeach
        </select>
        </div>

        <div class="form-group">
        Category
        <input type="input" name="catagory" placeholder="Tablet"/>
        </div>
        <br>

        


        <h1>Specs</h1>
        
        <div class="form-group">
        Display
        <input type ="input" name="display" placeholder="LED"/>
        </div>

        <div class="form-group">
        Memory
        <select class="btn btn-info" name="memory" id="MemorySelect">
            <option value =  "8GB">  8GB</option>
            <option value = "16GB"> 16GB</option>
            <option value = "32GB"> 32GB</option>
            <option value = "64GB"> 64GB</option>
            <option value ="128GB">128GB</option>
            <option value ="256GB">256GB</option>
            <option value ="500GB">500GB</option>
            <option value =  "1TB">  1TB</option>
            <option value =  "2TB">  2TB</option>
        </select>
        </div>

        <div class="form-group">
        Ram
        <select class="btn btn-info" name="ram" id="RamSelect">
            <option value = "--">--</option>
            <option value = "4GB">4GB</option>
            <option value = "8GB">8GB</option>
            <option value = "16GB">16GB</option>
            <option value = "32GB">32GB</option>
        </select>
        </div>

        <div class="form-group">
            Processor
            <input type="input" name='processor' placeholder="intel...">
            /*not necessary*/
        </div>

        <div class="form-group">
            Graphics        
            <input type="input" name='graphics' placeholder="NVIDIA">
            /*not necessary*/
        </div>
        <br>

        <div class="form-group">
                Misc. Info        
                <input type="input" name='misc' placeholder="any information not specified">
                /*not necessary*/
        </div>
        <br>



        <h1>Invoice Information</h1>
        <br>

        <div class="form-group">
            Location / Store
            <input type="input" name="location" placeholder="BestBuy">
        </div>

        <div class="form-group">
            Price  $
            <input type="number" name="price" min="0" id="PriceArea">
            .00
        </div>

        <div class="form-group">
            Purchase Date
            <input type="date" name="purchaseDate">
        </div>
        <br>


        <input class="btn btn-success" type="submit" label="Submit"/>
        <br>
        <br>



    </form>
@stop 

@section('js')
	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <script> 
    function display(){
        alert(document.form1.Display);
    }
    let customer = document.getElementById('customerDisplay');
    </script>
@stop