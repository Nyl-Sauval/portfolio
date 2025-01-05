<x-app-layout>
    <div class="project-details card">
        <h1 class="title">{{ $project->title }}</h1>
        <p class="updated-at">Mis à jour le : {{ $project->updated_at }}</p>

        <div class="project-body">
            <!-- Main Image -->
            @if($project->images)
                <div class="main-image">
                    <img src="{{ asset('storage/projects/' . $project->images[0]) }}" alt="{{ $project->images[0] }}" class="img-fluid">
                </div>
            @else
                <p>Aucune image disponible pour ce projet.</p>
            @endif

            <!-- Description -->
            <div class="description">
                <h3>Status : {{ $project->status }}</h3>
                <h3>Description</h3>
                <p>{{ $project->description }}</p>
            </div>
        </div>

        <div class="project-details-info">
            <h3>Détails</h3>
            <ul class="details-list">
                <!-- Complexité -->
                <li>
                    <strong>Complexité :</strong>
                    <div class="complexity-stars">
                        @for ($i = 1; $i <= 5; $i++)
                            <svg xmlns="http://www.w3.org/2000/svg" fill="{{ $i <= $project->complexity ? '#fbbf24' : '#d1d5db' }}" viewBox="0 0 24 24" stroke="currentColor" class="star-icon">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 17.27l4.95 2.73-1.26-5.38L21 9.24l-5.45-.47L12 2 8.45 8.77 3 9.24l4.31 4.38-1.26 5.38L12 17.27z"/>
                            </svg>
                        @endfor
                    </div>
                </li>
                <li><strong>Projet commencé le :</strong> {{ $project->start_date->format('d/m/y') }}</li>
                @if($project->end_date)
                    <li><strong>Projet terminé le :</strong> {{ $project->end_date->format('d/m/y') }}</li>
                @endif
                <li><strong>Durée estimée :</strong> {{ $project->estimated_duration }} heures</li>
                <li><strong>Categorie :</strong> {{ $project->type }}</li>
                <li><strong>Technologies utilisées :</strong> {{ implode(', ', $project->technologies) }}</li>
                <li><strong>Lien vers le <a href="{{$project->project_link}}" target="_blank">projet</a></strong></li>
            </ul>
        </div>

        @if($project->images)
            <div class="other-images">
                <h3>Autres images</h3>
                <div class="image-gallery">
                    @foreach($project->images as $image)
                        <div class="gallery-item">
                            <img src="{{ asset('storage/projects/' . $image) }}" alt="{{ $image }}" class="img-fluid">
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        <div class="project-actions">
            <a href="{{ route('welcome') }}" class="btn-back">Retour à la liste des projets</a>
            <a href="{{ route('projects.edit', $project->id) }}" class="btn-edit">Modifier</a>
            <form action="{{ route('projects.destroy', $project->id) }}" method="POST" class="inline-form">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-delete">Supprimer</button>
            </form>
        </div>
    </div>
</x-app-layout>
