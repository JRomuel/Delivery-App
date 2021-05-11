@extends('layouts.app')

@section('content')
    <div class="clearfix">
        <h1 class="float-left">Edit this todo</h1>
        <a href="{{url('todos')}}" class="ml-4 btn btn-primary float-left"><i class="fa fa-list-ul" aria-hidden="true"></i> Show list</a>
    </div>
    <x-alert/>
    <form class="form-inline" method="POST" action="/todos/{{$todo->id}}">
        @csrf
        @method('patch')
        <input class="form-control mr-3" type="text" name="title" value="{{$todo->title}}" id="title">
        <input class="btn btn-primary" type="submit" value="Save">
    </form>
@endsection
