<x-app-layout>

    <!-- Hero Section with Dark Space Design -->
    <section class="hero-section">
        <div class="hero-glow"></div>
        <h1 class="hero-title">NYL SAUVAL</h1>
        <p class="hero-subtitle">DÉVELOPPEUR</p>
    </section>

    <!-- Main Section -->
    <section class="main-content">
        <!-- Button to download CV -->
        <div class="download-cv">
            @php
                $cvFile = session('locale') == 'fr' ? 'cv_fr.pdf' : 'cv_en.pdf';
            @endphp
            <a href="{{ asset('storage/cv/' . $cvFile) }}" class="btn btn-primary" target="_blank">{{__('download_cv')}}</a>
        </div>
        <!-- Experiences Section -->
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

        <!-- Formations Section -->
        <div class="experiences">
            <h2>{{ __('my_education') }}</h2>
            <div class="experience_content">
                @foreach($diplomas as $diploma)
                    <x-diplome :diploma="$diploma"/>
                @endforeach
            </div>
        </div>

        <!-- Projects Section -->
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
