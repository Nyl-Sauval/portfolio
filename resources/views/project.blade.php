<x-app-layout>

    <!-- Hero Section -->
    <section class="banner">
        <img src="{{ asset('storage/images/banner.png') }}" alt="{{ __('banner_alt') }}" class="banner-image">
    </section>

    <!-- Main Section -->
    <section class="main-content">
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
