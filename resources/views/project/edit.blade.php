@extends('layouts.app')

@section('title', 'Create Project')

@section('content')

    <div class="panel panel-default col-md-6 col-md-offset-3">
        <div class="panel-heading text-center"><h1>Edit "{{$project->title}}"</h1></div>
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
                {!! Form::model($project, ['route' => ['project.update', $project->id], 'method' => 'put']) !!}

                <div class="form-group">

                    <div class="col-md-12">
                        {!! Form::label ('title', 'Project Title') !!}
                        {!! Form::text('title', $project->title, ['required', 'class' => 'form-control'] ) !!}
                    </div>

                </div>

                <div class="form-group">

                    <div class="col-md-12">
                        {!! Form::label ('summary', 'Project Summary') !!}
                        {!! Form::text('summary', $project->summary, ['required', 'class' => 'form-control'] ) !!}
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
                            ] , $project->category, ['required', 'class' => 'form-control']) !!}
                    </div>

                </div>

                <div class="form-group">

                    <div class="col-md-12">

                        {!! Form::label ('description', 'Project Description') !!}
                        {!! Form::textarea('description', $project->description, ['required', 'class' => 'form-control'] ) !!}

                    </div>

                </div>

                <div class="form-group text-center">

                        {!! Form::submit ('Save', ['required', 'class' => 'btn btn-success']) !!}

                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection