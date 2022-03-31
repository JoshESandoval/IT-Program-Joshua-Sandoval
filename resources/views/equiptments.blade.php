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
            <td>Invoice ID</td>
        </tr>
        
        @foreach($equiptments AS $equiptment)
        <tr>
            <td>{{ $equiptment->id}}</td>
            <td>{{ $customers[$equiptment->userId]->fName}}</td>
            <td>{{ $manufactures[$equiptment->manufactureId]->title}}</td>
            <td>{{ $equiptment->catagory}}</td>
            <td>{{ $equiptment->invoiceId}}
        </tr>
        @endforeach
         
    </table>
    <a href="{{ route('equiptments.create') }}" class="btn btn-default">Create</a>
@stop


@section('js')
<script>
    
</script>
@stop
