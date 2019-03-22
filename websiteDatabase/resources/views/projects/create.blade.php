@extends('layout')

@section('content')
    <h1 class="title">Create a New Project</h1>

    <form method="POST" action="/projects">
        {{ csrf_field() }}
        <div>
            <label class="label" for="title">Title</label>

            <div class="control">
                <input type="text" class="input" name="title" placeholder="Project title">
            </div>
        </div>   

        <div>
            <label class="label" for="description">Description</label>

            <div class="control">
                <textarea name="description" class="textarea" placeholder="Project description"></textarea>
            </div>
        </div>   

        <div>
            <button type="submit">Create Project</button>
        </div>   
    </form>
@endsection