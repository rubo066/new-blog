@extends('layouts.front')
@section('Hero Banner start')

<form action="{{url('/makes/add')}}" method="POST" enctype="multipart/form-date">
@csrf
    <input type="text" class="form-control" name="name" placeholder="name">
    <input type="file" class="form-control" name="logo">
    <button type="submit" class="btn btn-success">Save</button>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</form>

@endsection