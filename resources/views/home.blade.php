@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="jumbotron">
        <h1>Welcome to Scholance</h1>
        <h3>The world's first resource for open educational freelancing.</h3>
        <p></p>
    </div>

    <div class="row">
        <div class="col-md-6">
            <h2>For Students</h2>
            <p>Build your portfolio with projects from some of the world's best organizations.</p>
            <ul>
                <li>Learn from industry experts</li>
                <li>Build professional experience</li>
                <li>Expand your portfolio</li>
            </ul>
        </div>
        <div class="col-md-6">
            <h2>For Businesses and Organizations</h2>
            <p>Tap into the potential of the world's new brightest minds with nothing to lose.</p>
        </div>
    </div>

    <hr/>
    <div class="row">
        <p class="text-center">
            {{ link_to_route('register', 'Create an account', null, ['class' => 'btn btn-default']) }}
        </p>
    </div>
@endsection