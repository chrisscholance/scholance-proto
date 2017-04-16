@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <h2>Hello {!! $user->first_name !!}!</h2>

        <div class="panel panel-default">
            <div class="panel-heading"><h3>Active Projects</h3></div>
            <div class="panel-body text-center">
                {!! Form::open(['route' => 'project.create', 'method' => 'get']) !!}
                    {!! Form::submit ('Post a project', ['required', 'class' => 'btn btn-success']) !!}
                {!! Form::close() !!}
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading"><h3>Manage Business Info</h3></div>
            <div class="panel-body text-center">
            </div>
        </div>
    </div>
@endsection