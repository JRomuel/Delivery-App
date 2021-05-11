@extends('layouts.app')

@section('content')
    <div class="clearfix">
        <h1 class="float-left">Add new todo?</h1>
        <a href="{{url('todos')}}" class="ml-4 btn btn-primary float-left"><i class="fa fa-list-ul" aria-hidden="true"></i> Show list</a>
    </div>
    <x-alert/>
    <form class="form-inline" method="POST" action="/todos">
        @csrf
        <input class="form-control mr-3" type="text" name="title" id="title">
        <input class="btn btn-primary" type="submit" value="Create">
    </form>
@endsection
