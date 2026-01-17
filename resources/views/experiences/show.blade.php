<x-app-layout>
    <div class="experience-container">
        <h1 class="experience-title">{{ $experience->title }}</h1>
        <p><strong class="experience-label">{{ __('experiences_type') }} :</strong> <span class="experience-value">{{ $experience->type }}</span></p>
        <p><strong class="experience-label">{{ __('experiences_company') }} :</strong> <span class="experience-value">{{ $experience->company }}</span></p>
        <p><strong class="experience-label">{{ __('experiences_location') }} :</strong> <span class="experience-value">{{ $experience->location }}</span></p>
        <p><strong class="experience-label">{{ __('experiences_started_on') }} :</strong> <span class="experience-value">{{ $experience->start_date->format('d/m/Y') }}</span></p>
        <p><strong class="experience-label">{{ __('experiences_ended_on') }} :</strong> <span class="experience-value">{{ $experience->end_date ? $experience->end_date->format('d/m/Y') : 'N/A' }}</span></p>
        <p><strong class="experience-label">{{ __('experiences_description') }} :</strong></p>
        <p class="experience-description">{!! nl2br(e($experience->description)) !!}</p>
        <p><strong class="experience-label">{{ __('experiences_competencies') }} :</strong></p>
        <p class="experience-competency">{{ $experience->competencies }}</p>
        <div class="project-actions">
            <a href="{{ route('welcome') }}" class="btn-back">{{ __('experiences_back') }}</a>
        </div>
    </div>
</x-app-layout>
