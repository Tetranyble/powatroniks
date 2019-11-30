@extends('layout')
@section('content')
    <h1>{{$project->title}}</h1>
    <div>{{$project->description}}</div>
    <p>
        <a href="/projects/{{$project->id}}/edit">edit</a>
    </p>
    @if($project->tasks->count())
    <div>

            @foreach($project->tasks as $task)
                <form action="/task/{{$task->id}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <label for="completed" >
                        <input type="checkbox" name="completed" onchange="this.form.submit()" {{$task->completed ? 'check' : ''}}}/> {{$task->description}}
                    </label>

                </form>

            @endforeach

    </div>
    @endif
@endsection
