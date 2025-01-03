<div class="bg-white shadow-lg rounded-lg overflow-hidden">
    @if(count($project->images) > 0)
        <img src="{{ asset('storage/projects/' . $project->images[0]) }}" alt="{{ $project->images[0] }}" class="w-full h-56 object-cover">
    @endif
        <div class="p-4">
        <h3 class="text-xl font-semibold text-gray-800">{{ $project->title }}</h3>
        <p class="text-gray-600 mt-2">{{ $project->summary }}</p>

        <a href="{{ route('projects.index', $project->id) }}" class="mt-4 inline-block text-blue-500 hover:text-blue-700 transition duration-300">Voir le projet</a>

    </div>
</div>
