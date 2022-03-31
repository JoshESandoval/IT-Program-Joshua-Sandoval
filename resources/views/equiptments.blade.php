@extends('adminlte::page')

@section('title', 'Customer List')

@section('content_header')
    <h1>Customers</h1>
@stop

@section('content')
    <table id="table" class="table">
        <tr>
            <th data-sort-default >ID</th>
            <th data-sort-default >User</th>
            <th data-sort-default >Manufacture Id</th>
            <th data-sort-default >Category</th>
        </tr>
        
        @foreach($equiptments AS $equiptment)
        <tr>
            <td><a class="btn btn-default" href="{{ route('equiptments.show',['equiptment'=>$equiptment->id]) }}">{{ $equiptment->id}}</a></td>
            <td>{{ $customer[$equiptment->userId]->fName}}</td>
            <td>{{ $equiptment->manufactureId}}</td>
            <td>{{ $equiptment->catagory}}</td>
            

        </tr>
        @endforeach
         
    </table>
    <a href="{{ route('equiptments.create') }}" class="btn btn-default">Create</a>
    
@stop


@section('js')
<script src = 'tablesort.min.js'></script>
<script src='tablesort.number.js'></script>
<script src='tablesort.date.js'></script>

<script>
        new Tablesort(document.getElementById('table'));
      </script>
@stop
