@extends('layouts.front')
@section('Hero Banner start')
<table>
<tr>
    <td><b>Book</b></td>
</tr>
@foreach ($category as $cat)
<tr>
    <td>{{$cat['name']}}</td>
</tr>
@endforeach
</table>
@endsection