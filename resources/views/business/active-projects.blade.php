@if($projects->count() < 1)
    <p class="text-center">You have no active projects.</p>
@else
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
            @foreach ($projects as $project)
                <div class="row panel panel-default ">
                    <div class="col-xs-10">

                        <h3>{{ link_to_route("project.show", $project->title, $project->id) }}</h3>
                        <p>{{ $project->summary }}</p>
                    </div>
                    <div class="col-xs-2 text-right">
                        <p>{{ link_to_route('project.edit', 'Edit', $project->id, ['class' => 'btn btn-default form-control']) }}</p>
                        <p>{{ link_to_route('project.delete', 'Delete', $project->id, ['class' => 'btn btn-default form-control', 'on-click' => 'alert("test")']) }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif