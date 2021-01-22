@extends('layouts.master')
@section('title')
Home Page
@endsection
@section('content')
@if($emp ?? '')
@foreach($emp as $item)
<p>{{$item->id}} {{$item->username}} {{$item->password}}
    <span onclick="func({{$item->id}})">Delete</span>
    <a href="/emp/{{$item->id}}/edit">Edit</a>
</p>
@endforeach
@endif
<form method="post" action="/emp">
    @csrf
    <p>Username <input type="text" name="username"></p>
    <p>Password <input type="text" name="password"></p>
    <p><input class="btn btn-primary" type="submit" nme="submit" value="submit"></p>
</form>
@endsection

<script>
    function func(id){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type:'DELETE',
            url:'/emp/'+id,
            data: {
                "id": id // method and token not needed in data
            },
            success:function(data){
                console.log(data)
                location.reload();

            }
        })
    }
</script>

