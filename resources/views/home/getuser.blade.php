<table>
<tr>
    <td><b>Name</b></td>
    <td><b>Email</b></td>
    <td><b>Password</b></td>
</tr>
@foreach ($user as $us)
<tr>
    <td>{{$us['name']}}</td>
    <td>{{$us['email']}}</td>
    <td>{{$us['password']}}</td>
</tr>
@endforeach
</table>