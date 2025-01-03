<x-app-layout>

    <!-- Hero Section -->
    <section class="banner">
        <img src="{{ asset('storage/images/banner.png') }}" alt="Bannière" class="banner-image">
    </section>


    <!-- Main Section -->
    <section class="main-content">
        <!-- Projects Section -->
        <div class="projects">
            <h2 class="text-center mb-4">Mes Projets</h2>
            <a href="{{ route('projects.create') }}" class="btn-primary">Ajouter un Projet</a>
            <div class="project-cards">
                @foreach($projects as $project)
                    <x-project-card :project="$project" />
                @endforeach
            </div>
        </div>

        <!-- About Section -->
        <div class="about">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('storage/images/mon_image.jpg') }}" alt="{{ asset('images/mon_image.jpg') }}" class="profile-image">
                </div>
                <div class="col-md-8">
                    <h2>À propos de moi</h2>
                    <p>Je suis un étudiant en deuxième année de BUT Informatique, passionné par le développement web et logiciel. Curieux et motivé, je m'efforce d'apprendre constamment de nouvelles technologies pour enrichir mes compétences. J'aime particulièrement créer des applications interactives et trouver des solutions créatives à des problématiques techniques.</p>

                    <p>J'ai acquis de l'expérience à travers divers projets académiques et personnels, allant de la création de sites web dynamiques à la conception d'applications Java. Je me spécialise actuellement dans le développement full-stack, avec une préférence pour les technologies back-end.</p>

                    <p><strong>École :</strong>
                        Institut universitaire de technologie de Lens</p>
                    <p><strong>Année d'études :</strong> 2ème année de BUT Informatique</p>
                    <p><strong>Langages utilisés :</strong> PHP, Java, Python, SQL, HTML, CSS</p>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
