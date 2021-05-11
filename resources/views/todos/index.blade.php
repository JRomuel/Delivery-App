@extends('layouts.app')

@section('content')
    <div class="clearfix">
        <h1 class="float-left">Todo List</h1>
        <a href="{{url('todos/create')}}" class="ml-4 btn btn-primary float-left"><i class="fa fa-plus" aria-hidden="true"></i> Create New</a>
    </div>
    <x-alert/>
    @foreach ($todos as $todo)
    <div class="clearfix mb-2">
        <h5 class="float-left {{$todo->completed?'text-strike-through':''}}">{{$todo->title}}</h5>

        <a href="{{url('todos/'.$todo->id.'/edit')}}" class="ml-2 btn btn-warning float-right">Edit</a>
        <a onclick="event.preventDefault();document.getElementById('{{'form-complete-'.$todo->id}}').submit();" class="ml-2 {{$todo->completed?'btn-success':'btn-secondary'}} btn text-white float-right cursor-pointer"><i class="fa fa-check" aria-hidden="true"></i></a>
        <form action="{{route('todo.complete', $todo->id)}}" id="{{'form-complete-'.$todo->id}}" method="post" class="d-none">
            @csrf
            @method('put')
        </form>
    </div>

    @endforeach

@endsection

