<x-app-layout>

    <!-- Hero Section -->
    <section class="banner">
        <img src="{{ asset('storage/images/banner.png') }}" alt="{{ __('banner_alt') }}" class="banner-image">
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
