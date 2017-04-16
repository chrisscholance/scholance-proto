@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <h2>Hello {!! $user->first_name !!}!</h2>

        <div class="panel panel-default">
            <div class="panel-heading"><h3>Active Projects</h3></div>
            <div class="panel-body text-center">
                <a href="#">Start working on projects!</a>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading"><h3>Manage Portfolio</h3></div>
            <div class="panel-body text-center">
            </div>
        </div>
    </div>
@endsection