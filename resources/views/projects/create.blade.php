@extends('layout')
@section('content')
    <h1>Create project</h1>
    <form method="POST" action="/projects">
        {{ @csrf_field() }}
        <div>
            <input name="title" value="{{old('title')}}" type="text" placeholder="poject title" class="{{ $errors->has('title') ? 'is-danger': '' }}" >
        </div>
        <div>
            <textarea name="description" placeholder="description" class="{{ $errors->has('description') ? 'is-danger': '' }}"> {{old('description')}}</textarea>
        </div>
        <div>
            <button type="submit"> save project</button>
        </div>
       @include('error')
    </form>
@endsection
