@if($projects->count() > 0)
    @foreach($projects as $project)
        <div class="col-md-6 project-item-box">
            <div class="project-item">
                <div class="project-image">
                    <img src="{{ asset('storage/' . $project->project_image) }}" alt="">
                </div>
                <div class="project-tag">
                    <a href="#">{{ $project->project_sector }}</a>
                </div>
                <div class="project-content">
                    <h3><a href="{{ route('project-showcase.slug', $project->project_slug) }}">{{ $project->project_title }}</a></h3>
                </div>
            </div>
        </div>
    @endforeach
@else
    <p class="text-center">No projects found.</p>
@endif
