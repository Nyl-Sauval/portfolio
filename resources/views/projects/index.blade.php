<x-app-layout>

    <x-slot name="header">
        <div class="container mx-auto p-4">
            <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Mes projets</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($projects as $project)
                    <x-project-card :project="$project" />
                @endforeach
            </div>
        </div>
    </x-slot>
</x-app-layout>>
