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
