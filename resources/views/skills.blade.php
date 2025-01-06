<x-app-layout>
    <div class="skills">
        <h1>{{__('skills_title')}}</h1>
        <div class="skills_content">

            <div class="skill">
                <div class="leftPartSkills">
                    <h3>IDE</h3>
                    <p>Idea, PyCharm, PhpStorm, Vsc, Eclipse</p>
                </div>
            </div>
            <div class="skill">

                <div class="leftPartSkills">
                    <h3>{{__('programming_languages')}}</h3>
                    <p>PHP, Java, Python, HTML, CSS</p>
                </div>
            </div>
            <div class="skill">
                <div class="leftPartSkills">
                    <h3>Frameworks</h3>
                    <p>Laravel, JavaFX, Flask, Maven, JUnit</p>
                </div>
            </div>
            <div class="skill">
                <div class="leftPartSkills">
                    <h3>{{__('database')}}</h3>
                    <p>SQLite, MySQL, PostgreSQL</p>
                </div>
            </div>
            <div class="skill">
                <div class="leftPartSkills">
                    <h3>{{__('tools')}}</h3>
                    <p>Github/Gitlab, Docker</p>
                </div>
            </div>
            <div class="skill">
                <div class="leftPartSkills">
                    <h3>{{__('other')}}</h3>
                    <p>Unit Testing, Agile Methodologies</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
