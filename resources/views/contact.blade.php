<x-app-layout>
    <!-- Contact Section -->
    <section class="contact">
        <div class="container">
            <h2 class="text-center mb-4">{{ __('contact_me') }}</h2>
            <div class="contact-methods">
                <div class="contact-method">
                    <a href="mailto:nyl.sauval@laposte.net" class="contact-link" aria-label="{{ __('email') }} : nyl.sauval@laposte.net">
                        <div class="contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                                <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                            </svg>
                        </div>
                        <h3>{{ __('email') }}</h3>
                    </a>
                </div>
                <div class="contact-method">
                    <a href="https://www.linkedin.com/in/nyl-sauval/" target="_blank" rel="noopener noreferrer" class="contact-link" aria-label="Visiter mon profil {{ __('linkedin') }}">
                        <div class="contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M20.5 2h-17A1.5 1.5 0 002 3.5v17A1.5 1.5 0 003.5 22h17a1.5 1.5 0 001.5-1.5v-17A1.5 1.5 0 0020.5 2zM8 19H5v-9h3zM6.5 8.25A1.75 1.75 0 118.3 6.5a1.78 1.78 0 01-1.8 1.75zM19 19h-3v-4.74c0-1.42-.6-1.93-1.38-1.93A1.74 1.74 0 0013 14.19a.66.66 0 000 .14V19h-3v-9h2.9v1.3a3.11 3.11 0 012.7-1.4c1.55 0 3.36.86 3.36 3.66z"></path>
                            </svg>
                        </div>
                        <h3>{{ __('linkedin') }}</h3>
                    </a>
                </div>
                <div class="contact-method">
                    <a href="https://gitlab.univ-artois.fr/nyl_sauval" target="_blank" rel="noopener noreferrer" class="contact-link" aria-label="Voir mon profil {{ __('gitlab') }}">
                        <div class="contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M23.955 13.587l-1.342-4.135-2.664-8.189a.455.455 0 00-.867 0L16.418 9.45H7.582L4.919 1.263a.455.455 0 00-.867 0L1.388 9.452.045 13.587a.924.924 0 00.331 1.023L12 23.054l11.624-8.443a.92.92 0 00.331-1.024"></path>
                            </svg>
                        </div>
                        <h3>{{ __('gitlab') }}</h3>
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
