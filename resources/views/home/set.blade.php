<table>
<tr>
    <td><b>Name</b></td>
    <td><b>Email</b></td>
    <td><b>Password</b></td>
</tr>
@foreach ($data as $da)
<tr>
    <td>{{$da['name']}}</td>
    <td>{{$da['email']}}</td>
    <td>{{$da['password']}}</td>
</tr>
@endforeach
</table>