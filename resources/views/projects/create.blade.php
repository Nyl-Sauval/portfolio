<x-app-layout>
    <section class="create-project">
        <div class="container">
            <h2 class="text-center mb-4">Créer un Projet</h2>
            <form action="{{ route('projects.store') }}" method="POST" class="project-form">
                @csrf
                <div class="form-group">
                    <label for="title">Titre</label>
                    <input type="text" id="title" name="title" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="summary">Summary</label>
                    <input type="text" id="summary" name="summary" class="form-control">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" class="form-control" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="complexity">Complexité</label>
                    <input type="text" id="complexity" name="complexity" class="form-control" rows="5"></input>
                </div>
                <div class="form-group">
                    <label for="technologies">Technologies</label>
                    <div id="technologies-list">
                        <div class="technology-item">
                            <input type="text" name="technologies[]" class="form-control">
                            <button type="button" class="btn-remove-technology">Supprimer</button>
                        </div>
                    </div>
                    <button type="button" id="add-technology" class="btn-add-technology">Ajouter une technologie</button>
                </div>
                <div class="form-group">
                    <label for="start_date">Start Date</label>
                    <input type="date" id="start_date" name="start_date" class="form-control">
                </div>
                <div class="form-group">
                    <label for="end_date">End Date</label>
                    <input type="date" id="end_date" name="end_date" class="form-control">
                </div>

                <div class="form-group">
                    <label for="github_link">GitHub Link</label>
                    <input type="url" id="github_link" name="github_link" class="form-control">
                </div>
                <div class="form-group">
                    <label for="hosted_link">Hosted App Link</label>
                    <input type="url" id="hosted_link" name="hosted_link" class="form-control">
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" id="status" name="status" class="form-control">
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" id="type" name="type" class="form-control">
                </div>
                <div class="form-group">
                    <label for="estimated_duration">Estimated Duration</label>
                    <input type="text" id="estimated_duration" name="estimated_duration" class="form-control">
                </div>
                <button type="submit" class="btn-submit">Créer</button>
            </form>
        </div>
    </section>
</x-app-layout>
