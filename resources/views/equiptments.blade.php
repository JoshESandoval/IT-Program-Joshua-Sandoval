@extends('adminlte::page')

@section('title', 'Customer List')

@section('content_header')
    <h1>Customers</h1>
@stop

@section('content')
    <table sortable="true" id="table" class='table table-hover'>
        <tr>
            <td>ID</td>
            <td>User</td>
            <td>Manufacture</td>
            <td>Category</td>
        </tr>
        
        @foreach($equiptments AS $equiptment)
        <tr>
            <td><a class="btn btn-default" href="{{ route('equiptments.show',['equiptment'=>$equiptment->id]) }}">{{ $equiptment->id}}</a></td>
            <td>{{ $equiptment->userId}}</td>
            <td>{{ $manufactures[$equiptment->manufactureId]->title}}</td>
            <td>{{ $equiptment->catagory}}</td>
            
        </tr>
        @endforeach
         
    </table>
    <a href="{{ route('equiptments.create') }}" class="btn btn-default">Create</a>
@stop


@section('js')
<script>
    
</script>
@stop
