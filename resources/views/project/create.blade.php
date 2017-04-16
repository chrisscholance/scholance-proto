@extends('layouts.app')

@section('title', 'Create Project')

@section('content')

    <div class="panel panel-default col-md-6 col-md-offset-3">
        <div class="panel-heading text-center"><h1>Post a Project</h1></div>
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
                {!! Form::open(['route' => 'project.store']) !!}

                <div class="form-group">

                    <div class="col-md-12">
                        {!! Form::label ('title', 'Project Title') !!}
                        {!! Form::text('title', null, ['required', 'class' => 'form-control'] ) !!}
                    </div>

                </div>

                <div class="form-group">

                    <div class="col-md-12">
                        {!! Form::label ('summary', 'Project Summary') !!}
                        {!! Form::text('summary', null, ['required', 'class' => 'form-control'] ) !!}
                    </div>

                </div>

                <div class="form-group">

                    <div class="col-md-12">
                        {!! Form::label ('category') !!}
                        {!! Form::select('category',
                            [
                                '',
                                'graphic-design'=>'Graphic Design',
                                'web-design'=> 'Web Design',
                                'programming'=>'Programming',
                            ] , null, ['required', 'class' => 'form-control']) !!}
                    </div>

                </div>

                <div class="form-group">

                    <div class="col-md-12">

                        {!! Form::label ('description', 'Project Description') !!}
                        {!! Form::textarea('description', null, ['required', 'class' => 'form-control'] ) !!}

                    </div>

                </div>

                <div class="form-group text-center">

                        {!! Form::submit ('Submit', ['required', 'class' => 'btn btn-success']) !!}

                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection