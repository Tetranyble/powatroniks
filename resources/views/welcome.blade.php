@extends('layout')
@section('title', 'Home Page')
@section('content')

    <h1>Welcome home. I'm available for work</h1>
    <p>{{$request}} imperial</p>
    <ul>
        @foreach($tasks as $task)
            <li>{{$task}}</li>
        @endforeach
    </ul>
@endsection
