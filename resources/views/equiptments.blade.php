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
        
        @foreach($equiptments AS $equiptment)
        <tr>
            <td>{{ $equiptment->id}}</td>
            <td>{{ $equiptment->userID}}</td>
            <td>{{ $equiptment->manufactureID}}</td>
            <td>{{ $equiptment->category}}</td>
        </tr>
        @endforeach
         
    </table>
    <a href="{{ route('equiptments.create') }}" class="btn btn-default">Create</a>
@stop


@section('js')
<script>
    
</script>
@stop
