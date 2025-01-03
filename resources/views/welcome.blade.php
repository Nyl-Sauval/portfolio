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
                    <p>Je suis étudiant en informatique, passionné par le développement web et le design. J'aime résoudre des problèmes complexes avec des solutions élégantes.</p>
                    <p><strong>École :</strong> Mon École</p>
                    <p><strong>Année d'études :</strong> 2ème année de BUT Informatique</p>
                    <p><strong>Langages utilisés :</strong> PHP, JavaScript, Python, Java, SQL, HTML, CSS</p>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
