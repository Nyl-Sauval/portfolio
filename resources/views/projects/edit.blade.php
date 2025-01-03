<x-app-layout>
    <section class="edit-project">
        <div class="container">
            <h2 class="text-center mb-4">Modifier le Projet</h2>
            <form action="{{ route('projects.update', $project->id) }}" method="POST" class="project-form">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Titre</label>
                    <input type="text" id="title" name="title" class="form-control" value="{{ $project->title }}" required>
                </div>
                <div class="form-group">
                    <label for="summary">Summary</label>
                    <input type="text" id="summary" name="summary" class="form-control" value="{{ $project->summary }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" class="form-control" rows="5" required>{{ $project->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="technologies">Technologies</label>
                    <div id="technologies-list">
                        @foreach($project->technologies as $technology)
                            <div class="technology-item">
                                <input type="text" name="technologies[]" class="form-control" value="{{ $technology }}" required>
                                <button type="button" class="btn-remove-technology">Supprimer</button>
                            </div>
                        @endforeach
                    </div>
                    <button type="button" id="add-technology" class="btn-add-technology">Ajouter une technologie</button>
                </div>
                <div class="form-group">
                    <label for="start_date">Start Date</label>
                    <input type="date" id="start_date" name="start_date" class="form-control" value="{{ $project->start_date->format('Y-m-d') }}" required>                </div>
                <div class="form-group">
                    <label for="end_date">End Date</label>
                    <input type="date" id="end_date" name="end_date" class="form-control" value="{{ $project->end_date->format('Y-m-d') }}" required>                </div>
                <div class="form-group">
                    <label for="project_link">Project Link</label>
                    <input type="url" id="project_link" name="project_link" class="form-control" value="{{ $project->project_link }}" required>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" id="status" name="status" class="form-control" value="{{ $project->status }}" required>
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" id="type" name="type" class="form-control" value="{{ $project->type }}" required>
                </div>
                <div class="form-group">
                    <label for="estimated_duration">Estimated Duration</label>
                    <input type="text" id="estimated_duration" name="estimated_duration" class="form-control" value="{{ $project->estimated_duration }}" required>
                </div>
                <button type="submit" class="btn-submit">Modifier</button>
            </form>
        </div>
    </section>
</x-app-layout>
