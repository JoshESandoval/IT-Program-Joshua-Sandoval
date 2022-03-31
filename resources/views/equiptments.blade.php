@extends('adminlte::page')

@section('title', 'Customer List')

@section('content_header')
    <h1>Customers</h1>
@stop

@section('content')
    <table id="table" class="table">
        <tr>
            <th onclick="sortTable(0)">ID</th>
            <th onclick="sortTable(1)">User</th>
            <th onclick="sortTable(2)">Manufacture</th>
            <th onclick="sortTable(3)">Category</th>
        </tr>
        
        @foreach($equiptments AS $equiptment)
        <tr>
            <td><a class="btn btn-default" href="{{ route('equiptments.show',['equiptment'=>$equiptment->id]) }}">{{ $equiptment->id}}</a></td>
            <td>{{ $equiptment->userId}}</td>
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
