{{ $emp }}
<form method="POST" action="/emp/{{$emp->id}}">
    @csrf
    @method('PUT')
    <p>username <input type="text" name="username" value="{{$emp->username}}"></p>
    <p>password <input type="text" name="password" value="{{$emp->password}}"></p>
    <p><input type="submit" value="submit" name="submit"></p>
</form>
