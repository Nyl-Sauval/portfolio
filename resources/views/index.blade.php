<x-app-layout>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <h1 class="hero-title">NYL SAUVAL</h1>
            <p class="hero-subtitle">DÉVELOPPEUR</p>
            <div class="download-cv">
                @php
                    $cvFile = session('locale') == 'fr' ? 'cv_fr.pdf' : 'cv_en.pdf';
                @endphp
                <a href="{{ asset('storage/cv/' . $cvFile) }}" class="btn btn-primary btn-cv" target="_blank">
                    <svg class="download-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10" />
                    </svg>
                    {{__('download_cv')}}
                </a>
            </div>
        </div>
    </section>

    <!-- Main Section -->
    <section class="main-content">
        <!-- Projects Section -->
        <div class="experiences">
            <h2>{{ __('my_experiences') }}</h2>
            <div class="experience_content">
                @foreach($experiences as $experience)
                    <a class="experience_link" href="{{ route('experiences.show', $experience->id) }}">
                        <x-experiences :experience="$experience"/>
                    </a>
                @endforeach
            </div>
        </div>

        <div class="experiences">
            <h2>{{ __('my_education') }}</h2>
            <div class="experience_content">
                @foreach($diplomas as $diploma)
                    <x-diplome :diploma="$diploma"/>
                @endforeach
            </div>
        </div>

        <div class="projects">
            <h2 class="text-center mb-4">{{ __('my_projects') }}</h2>
            <div class="project-cards">
                @foreach($projects as $project)
                    <x-project-card :project="$project" />
                @endforeach
            </div>
        </div>

    </section>
</x-app-layout>
