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
            <td><a class="btn btn-default" href="{{route('manufactures.show',['manufacture'=>$manufacture->id]) }}">{{ $manufacture->title }} </a></td>
            <td>{{ $manufacture->salesEmail}}</td>
            <td>{{ $manufacture->salesNumber}}</td>
            <td>{{ $manufacture->techEmail}}</td>
            <td>{{ $manufacture->techNumber}}</td>
        </tr>
        @endforeach
         
    </table>
    <a href="{{ route('manufactures.create') }}" class="btn btn-default">Create</a>
@stop


@section('js')
<script>
    
</script>
@stop
