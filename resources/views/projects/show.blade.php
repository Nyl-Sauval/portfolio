<x-app-layout>
    <div class="project-details card">
        <h1 class="title">{{ $project->getTranslation('title', app()->getLocale())}}</h1>
        <p class="updated-at">{{ __('updated_at') }} : {{ $project->updated_at }}</p>

        <div class="project-body">
            <!-- Main Image -->
            @if($project->images)
                <div class="main-image">
                    <img src="{{ asset('storage/projects/' . $project->images[0]) }}" alt="{{ $project->images[0] }}" class="img-fluid">
                </div>
            @else
                <p>{{ __('no_image_available') }}</p>
            @endif

            <!-- Description -->
            <div class="description">
                <h3>{{ __('status') }} : {{ __($project->status) }}</h3> <!-- Traduction du statut -->
                <h3>{{ __('description') }}</h3>
                <p>{{ $project->getTranslation('description', app()->getLocale()) }}</p>
            </div>
        </div>

        <div class="project-details-info">
            <h3>{{ __('details') }}</h3>
            <ul class="details-list">
                <!-- Complexité -->
                <li>
                    <strong>{{ __('complexity') }} :</strong>
                    <div class="complexity-stars">
                        @for ($i = 1; $i <= 5; $i++)
                            <svg xmlns="http://www.w3.org/2000/svg" fill="{{ $i <= $project->complexity ? '#fbbf24' : '#d1d5db' }}" viewBox="0 0 24 24" stroke="currentColor" class="star-icon">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 17.27l4.95 2.73-1.26-5.38L21 9.24l-5.45-.47L12 2 8.45 8.77 3 9.24l4.31 4.38-1.26 5.38L12 17.27z"/>
                            </svg>
                        @endfor
                    </div>
                </li>
                <li><strong>{{ __('project_started_on') }} :</strong> {{ $project->start_date->format('d/m/y') }}</li>
                @if($project->end_date)
                    <li><strong>{{ __('project_ended_on') }} :</strong> {{ $project->end_date->format('d/m/y') }}</li>
                @endif
                <li><strong>{{ __('estimated_duration') }} :</strong> {{ $project->estimated_duration }} {{ __('hours') }}</li>
                <li><strong>{{ __('category') }} :</strong> {{ $project->getTranslation('type', app()->getLocale()) }}</li> <!-- Traduction du type -->
                <li><strong>{{ __('technologies_used') }} :</strong> {{ implode(', ', $project->technologies) }}</li>
                <li><strong>{{ __('link_to_project') }} <a href="{{$project->project_link}}" target="_blank">{{ __('project_link') }}</a></strong></li>
            </ul>
        </div>

        @if($project->images)
            <div class="other-images">
                <h3>{{ __('other_images') }}</h3>
                <div class="carousel">
                    <div class="carousel-inner">
                        @foreach($project->images as $index => $image)
                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                <img src="{{ asset('storage/projects/' . $image) }}" alt="Project Image">
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" onclick="prevSlide()">&#10094;</button>
                    <button class="carousel-control-next" onclick="nextSlide()">&#10095;</button>
                </div>
            </div>
        @endif

        <div class="project-actions">
            <a href="{{ route('welcome') }}" class="btn-back">{{ __('back_to_projects') }}</a>
        </div>
    </div>
    <script>
        let currentSlide = 0;

        function showSlide(index) {
            const slides = document.querySelectorAll('.carousel-item');
            if (index >= slides.length-1) {
                currentSlide = 0;
            } else if (index < 0) {
                currentSlide = slides.length - 1;
            } else {
                currentSlide = index;
            }
            const offset = -currentSlide * 100;
            document.querySelector('.carousel-inner').style.transform = `translateX(${offset}%)`;
        }

        function nextSlide() {
            showSlide(currentSlide + 1);
        }

        function prevSlide() {
            showSlide(currentSlide - 1);
        }

        document.addEventListener('DOMContentLoaded', () => {
            showSlide(currentSlide);
        });
    </script>
</x-app-layout>
