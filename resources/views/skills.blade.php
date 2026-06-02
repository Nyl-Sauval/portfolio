<x-app-layout>
    <div class="skills">
        <h1>{{__('skills_title')}}</h1>
        <div class="skills_content">

            <div class="skill">
                <div class="leftPartSkills">
                    <h3>IDE</h3>
                    <p>Idea, PyCharm, PhpStorm, VS Code, Eclipse</p>
                </div>
            </div>
            <div class="skill">

                <div class="leftPartSkills">
                    <h3>{{__('programming_languages')}}</h3>
                    <p>PHP, Java, Python, TypeScript, JavaScript, HTML, CSS</p>
                </div>
            </div>
            <div class="skill">
                <div class="leftPartSkills">
                    <h3>Frameworks & Librairies</h3>
                    <p>React, Angular, Spring Boot, Laravel, Ionic, Tailwind CSS, Vite.js, Flask, JavaFX</p>
                </div>
            </div>
            <div class="skill">
                <div class="leftPartSkills">
                    <h3>{{__('database')}}</h3>
                    <p>MongoDB, MySQL, PostgreSQL, SQLite</p>
                </div>
            </div>
            <div class="skill">
                <div class="leftPartSkills">
                    <h3>{{__('tools')}}</h3>
                    <p>GitHub/GitLab, Docker, Swagger, Netlify, Render, Maven</p>
                </div>
            </div>
            <div class="skill">
                <div class="leftPartSkills">
                    <h3>{{__('other')}}</h3>
                    <p>API REST, JWT, UI/UX (Framer Motion), Agile (Sprints/Scrum), Unit Testing (JUnit)</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
