<div class="project-card">
    @if($project->images)
        <img src="{{ asset('storage/projects/' . $project->images[0]) }}" alt="{{ $project->images[0] }}" class="w-full h-56 object-cover">
    @endif
        <div>
            <div class="project-card first-line">
                <h3>{{ $project->title }}</h3>
                <h4 style="color: {{ $project->status == 'in-progress' ? 'orange' : ($project->status == 'completed' ? 'green' : 'black') }};" >{{ $project->status }}</h4>
            </div>
            <p class="start-date">{{ $project->start_date }}</p>
            <p>{{ $project->summary }}</p>
            <a href="{{ route('projects.show', $project->id) }}">Voir le projet</a>
        </div>
</div>
