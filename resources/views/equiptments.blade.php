@extends('adminlte::page')

@section('title', 'Customer List')

@section('content_header')
    <h1>Customers</h1>
@stop

@section('content')
    <table id="table" class='table table-hover'>
        <tr>
            <td>ID</td>
            <td>User</td>
            <td>Manufacture</td>
            <td>Category</td>
            <td>Specs</td>
            <td>Invoice ID</td>
            <td>Notes</td>
        </tr>
        
        @foreach($equiptments AS $equi)
        <tr>
            <td><a class="btn btn-default" href="{{ route('equiptments.show',['equiptment'=>$equi->id]) }}">{{ $equiptment->title }} </a></td>
            <td>{{ $equi->id}}</td>
            <td>{{ $equi->userID}}</td>
            <td>{{ $equi->manufactureID}}</td>
            <td>{{ $equi->category}}</td>
            <td>{{ $equi->specs}}</td>
            <td>{{ $equi->notes}}</td>

            
            
        </tr>
        @endforeach
         
    </table>
    <a href="{{ route('customers.create') }}" class="btn btn-default">Create</a>
@stop


@section('js')
<script>
    
</script>
@stop
