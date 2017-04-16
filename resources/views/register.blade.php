@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <div class="row">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="form-horizontal col-md-6 col-md-offset-3">
            <h1>Create an Account</h1>
            {!! Form::model($user, ['route' => 'registerUser']) !!}

            <div class="form-group">

                <div class="col-md-6">
                    {!! Form::label ('first_name') !!}
                    {!! Form::text('first_name', null, ['class' => 'form-control'] ) !!}
                </div>

                <div class="col-md-6">
                    {!! Form::label ('last_name' ) !!}
                    {!! Form::text('last_name', null, ['required', 'class' => 'form-control']) !!}
                </div>

            </div>

            <div class="form-group">

                {!! Form::label ('user_type', 'I am a...') !!}
                {!! Form::select('user_type', ['', 'student'=> 'Student', 'business'=>'Business User'], null, ['required', 'class' => 'form-control']) !!}

            </div>

            <div class="form-group">

                {!! Form::label ('email') !!}
                {!! Form::email('email', null, ['required', 'class' => 'form-control'] ) !!}

            </div>

            <div class="form-group">

                <div class="col-md-6">

                    {!! Form::label ('password') !!}
                    {!! Form::password('password', ['required', 'class' => 'form-control'] ) !!}

                </div>

                <div class="col-md-6">

                    {!! Form::label ('password_confirmation', 'Confirm Password') !!}
                    {!! Form::password('password_confirmation', ['required', 'class' => 'form-control'] ) !!}

                </div>

            </div>

            <div class="form-group">

                <div class="col-md-6">

                    {!! Form::checkbox('terms', 'true' ) !!}
                    <label for="terms">I agree to the <a href="#">terms and conditions</a></label>
                </div>

            </div>

            <div class="form-group text-center">

                    {!! Form::submit ('Sign up', ['required', 'class' => 'btn btn-success']) !!}

            </div>

            {!! Form::close() !!}
        </div>
    </div>
@endsection