@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="jumbotron">
        <h1>Welcome to Scholance</h1>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h2>For Students</h2>
            <p>Start working on projects!</p>
            <p class="text-center">
                {{link_to_route('registrationPage', 'Create an account', null, ['class' => 'btn btn-default'])}}
            </p>
        </div>
        <div class="col-md-6">
            <h2>For Businesses</h2>
            <p>Start posting projects!</p>
            <p class="text-center">
                {{link_to_route('registrationPage', 'Create an account', null, ['class' => 'btn btn-default'])}}
            </p>
        </div>
    </div>
@endsection