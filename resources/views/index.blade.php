<x-app-layout>

    <!-- Hero Section -->
    <section class="banner">
        <img src="{{ asset('storage/images/banner.png') }}" alt="Bannière" class="banner-image">
    </section>


    <!-- Main Section -->
    <section class="main-content">
        <!-- Projects Section -->
        <div class="experiences">
            <h2>Mes Expériences</h2>
            <div class="experience_content">
                @foreach($experiences as $experience)
                    <x-experiences :experience="$experience"/>

                @endforeach
            </div>
        </div>
        <div class="experiences">
            <h2>Mes Diplomes</h2>
            <div class="experience_content">
                @foreach($diplomas as $diploma)
                    <x-diplome :diploma="$diploma"/>

                @endforeach
            </div>
        </div>
        <div class="projects">
            <h2 class="text-center mb-4">Mes Projets</h2>
            <a href="{{ route('projects.create') }}" class="btn-primary">Ajouter un Projet</a>
            <div class="project-cards">
                @foreach($projects as $project)
                    <x-project-card :project="$project" />
                @endforeach
            </div>
        </div>

    </section>
</x-app-layout>
