@extends('adminlte::page')

@section('title', 'Customer List')

@section('content_header')
    <h1>Customers</h1>
@stop

@section('content')
    <table id="table" >
        <tr>
            <th onClick="sortTable(0)">ID</th>
            <th onClick="sortTable(1)">User</th>
            <th onClick="sortTable(2)">Manufacture</th>
            <th onClick="sortTable(3)">Category</th>
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
    <a href="{{ route('equiptments.create') }}" class="btn btn-default">Create</a>\
    <script>
            function sortTable(n){
                vat table,rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
                table = document.getElementById('table');
                switching=true;
                dir='asc';
                while(switching){
                    switching=false;
                    rows = table.rows;
                    for(i = 1; i < (rows.length - 1); i++){
                        shouldSwitch=false;
                        x=rows[i].getElementsByTagName('TD')[n];
                        y=rows[i+1].getElementsByTagName('TD')[n];
                        
                        if(dir=="asc"){
                            if(x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()){
                                shouldSwitch = true;
                                break;
                            }
                        }
                        else if(dir =="desc"){
                            if(x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()){
                                shouldSwitch = true;
                                break;
                            }
                        }
                    }
                    if(shouldSwitch){
                        rows[i].parentNode.insertBefore(rows[i+1],rows[i]);
                        switching=true;
        
                        switchcount++;
                    }
                    else{
                        if(switchcount == 0 && dir == "asc"){
                            dir = "desc";
                            switching = true;
                        }
                    }
        
                }
        
            }
    </script>
@stop


@section('js')
<script>
    
</script>
@stop
