@extends('layouts.app')

@section('title', "Project: $project->title")

@section('content')

    <p>{{link_to_route('dashboard', 'Back to dashboard')}} </p>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1>{!! $project->title !!}</h1>
        </div>

        <div class="panel-body">
            <h3>Summary</h3>
            <p>{!! $project->summary !!}</p>
            <br/>
            <h3>Category</h3>
            <p>{!! $project->category !!}</p>
            <br/>
            <h3>Description</h3>
            <p> {!! $project->description !!}</p>
        </div>

        <div class="panel-footer text-center">
            {{ link_to_route('project.edit', 'Edit', $project->id, ['class' => 'btn btn-default']) }}
        </div>
    </div>

@endsection