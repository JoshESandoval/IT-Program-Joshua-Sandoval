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
        
        @foreach($customers AS $customer)
        <tr>
            <td><a class="btn btn-default" href="{{ route('customers.show',['customer'=>$customer->id]) }}">{{ $customer->id}}</a></td>
            <td>{{ $customer->fName}}</td>
            <td>{{ $customer->lName}}</td>
            <td>{{ $customer->cEmail}}</td>
            <td>{{ $customer->cNUmber}}</td>
            
        </tr>
        @endforeach
         
    </table>
    <a href="{{ route('customers.create') }}" class="btn btn-default">Create</a>
@stop


@section('js')
<script>
    
</script>
@stop
