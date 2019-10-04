@extends('layouts.front')

@section('Hero Banner start')

<a class="btn btn-success" href="{{url('/makes/add')}}">Add Make</a>
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Logo</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($makes as $make)
    <tr>
      <th scope="row">{{$make->id}}</th>
      <td>{{$make->name}}</td>
      <td>{{$make->logo}}</td>
      <td>{{date("d-M-Y H:i:s",strtotime($make->created_at))}}</td>
        <a class="btn btn-sm btn-primary" htef="">Edit</a>
        <a class="btn btn-sm btn-primary" htef="">Remove</a>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection