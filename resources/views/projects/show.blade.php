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
                <form action="/tasks/{{$task->id}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <label for="completed"  class="{{$task->completed ? 'is-complete' : ''}}">
                        <input type="checkbox" name="completed" onchange="this.form.submit()" {{$task->completed ? 'checked' : ''}}/> {{$task->description}}
                    </label>

                </form>

            @endforeach

    </div>
    @endif
    <!-- Add new task-->
    <form action="/projects/{{$project->id}}/tasks" method="POST">
        @csrf
        <div class="control">
            <label for="description"  class="">New Task</label>
                <input type="text" name="description" />
        </div>
        <div>
            <button type="submit">save</button>
        </div>

        @include('error')
    </form>
@endsection
