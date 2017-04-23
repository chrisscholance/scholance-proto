@extends('layouts.app')

@section('title', 'Register')

@section('content')

    <div class="panel panel-default col-md-6 col-md-offset-3">
        <div class="panel-heading text-center"><h1>Create an Account</h1></div>
        <div class="panel-body">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="form-horizontal">
                {!! Form::open(['route' => 'register']) !!}

                <div class="form-group">

                    <div class="col-md-6">
                        {!! Form::label ('first_name') !!}
                        {!! Form::text('first_name', null, ['required', 'class' => 'form-control'] ) !!}
                    </div>

                    <div class="col-md-6">
                        {!! Form::label ('last_name' ) !!}
                        {!! Form::text('last_name', null, ['required', 'class' => 'form-control']) !!}
                    </div>

                </div>

                <div class="form-group">

                    <div class="col-md-12">
                        {!! Form::label ('user_type', 'I am a...') !!}
                        {!! Form::select('user_type', ['', 'student'=> 'Student', 'business'=>'Business User'], null, ['required', 'class' => 'form-control']) !!}
                    </div>

                </div>

                <div class="form-group">

                    <div class="col-md-12">
                        {!! Form::label ('email') !!}
                        {!! Form::email('email', null, ['required', 'class' => 'form-control'] ) !!}
                    </div>

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

                <div class="form-group hidden">

                    <div class="col-md-2 text-right">
                        {!! Form::checkbox('terms', 'true' ) !!}
                    </div>
                    <div class="col-md-10">
                        <label for="terms">I agree to the <a href="#">terms and conditions</a></label>
                    </div>

                </div>

                <div class="form-group text-center">

                        {!! Form::submit ('Sign up', ['required', 'class' => 'btn btn-success']) !!}

                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection