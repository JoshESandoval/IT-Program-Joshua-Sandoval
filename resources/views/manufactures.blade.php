@extends('adminlte::page')

@section('title', 'Manufactures List')

@section('content_header')
    <h1>Manufactures</h1>
@stop

@section('content')
    <table id="table" class='table table-hover'>
        <tr>
            <td>Name</td>
            <td>Sales Email</td>
            <td>Sales Number</td>
            <td>Tech Support Email</td>
            <td>Tech Support Number</td>
        </tr>
        
        @foreach($manufactures AS $manufacture)
        <tr>
            <td>{{$manufacture->title}}</td>
            <td>{{$manufacture->salesEmail}}</td>
            <td>{{$manufacture->salesNumber}}</td>
            <td>{{$manufacture->techEmail}}</td>
            <td>{{$manufacture->techNumber}}</td>
        </tr>
        @endforeach
        <a href="{{ route('manufactures.create') }}" class="btn btn-default">Create</a> 
    </table>
@stop


@section('js')
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
@stop
