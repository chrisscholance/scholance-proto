@extends('layouts.app')

@section('title', "Projects")

@section('content')

    <h1>Available Projects</h1>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Title</th>
                <th>Poster</th>
                <th>Summary</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
                <td>{{$project->title}}</td>
                <td>{{\App\User::where('id', $project->poster_id)->first()->first_name}}</td>
                <td>{{$project->summary}}</td>
                <td>{{$project->category}}</td>
            @endforeach
        </tbody>
    </table>

@endsection