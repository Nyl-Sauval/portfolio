<div class="project-card">
    <div class="project-image-wrapper" data-initial="{{ strtoupper(substr($project->getTranslation('title', app()->getLocale()), 0, 1)) }}">
        @if($project->images)
            <img src="{{ asset('storage/projects/' . $project->images[0]) }}" alt="{{ $project->images[0] }}" class="project-image">
        @endif
    </div>
    <div>
        <div class="first-line">
            <h3>{{ $project->getTranslation('title', app()->getLocale()) }}</h3>
            <h4 style="color: {{ $project->status == 'En cours' ? 'orange' : ($project->status == 'Terminé' ? 'green' : 'black') }};">
                {{ __($project->status) }}
            </h4>
        </div>
        <p class="start-date">{{ $project->start_date->format('d/m/y') }}</p>
        <p>{{ $project->getTranslation('summary', app()->getLocale()) }}</p>
        <a href="{{ route('projects.show', $project->id) }}" class="btn-primary">{{ __('view_project') }}</a>
    </div>
</div>
