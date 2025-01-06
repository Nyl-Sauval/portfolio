document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('add-technology').addEventListener('click', function () {
        const technologiesList = document.getElementById('technologies-list');
        const newTechnology = document.createElement('div');
        newTechnology.classList.add('technology-item');
        newTechnology.innerHTML = `
            <input type="text" name="technologies[]" class="form-control" required>
            <button type="button" class="btn-remove-technology">Supprimer</button>
        `;
        technologiesList.appendChild(newTechnology);
    });

    document.getElementById('technologies-list').addEventListener('click', function (e) {
        if (e.target.classList.contains('btn-remove-technology')) {
            e.target.parentElement.remove();
        }
    });
});

let currentSlide = 0;

function showSlide(index) {
    const slides = document.querySelectorAll('.carousel-item');
    if (index >= slides.length) {
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
