@extends('layout')

@section('content')
    <h1 class="title">Edit Project</h1>

    <form>
        <div class="field">
            <label class="label" for="title">Title</label>

            <div class="control">
                <input type="text" name="title" placeholder="Title" value="{{ $project->title }}">
            </div>
        </div>   

        <div class="field">
            <label class="label" for="description">Description</label>

            <div class="control">
                <textarea name="description" placeholder="Description">{{ $project->description }}</textarea>
            </div>
        </div>  

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Update Project</button>
            </div>
        </div>         
    </form>
@endsection