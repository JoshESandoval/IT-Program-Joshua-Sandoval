@extends('adminlte::page')

@section('title', 'Customer List')

@section('content_header')
    <h1>Customers</h1>
@stop

@section('content')
    <table id="table" class='table table-hover'>
        <tr>
            <td>ID</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Email</td>
            <td>Number</td>
        </tr>
        
        @foreach($customers AS $cust)
        <tr>
            <td><a class="btn btn-default" href="{{ route('customers',['customers'=>$customer->id]) }}">{{ $manufacture->title }} </a></td>
            <td>{{ $cust->id}}</td>
            <td>{{ $cust->fName}}</td>
            <td>{{ $cust->lName}}</td>
            <td>{{ $cust->cEmail}}</td>
            <td>{{ $cust->cNUmber}}</td>
            
        </tr>
        @endforeach
         
    </table>
    <a href="{{ route('customers.create') }}" class="btn btn-default">Create</a>
@stop


@section('js')
<script>
    
</script>
@stop
