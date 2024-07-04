// script.js

document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('student-form');
    const photoInput = document.getElementById('photo');
    const photoPreview = document.getElementById('photo-preview');

    form.addEventListener('submit', function(event) {
        const matricule = document.getElementById('matricule').value.trim();
        const nom = document.getElementById('nom').value.trim();
        const prenom = document.getElementById('prenom').value.trim();
        const dateNaissance = document.getElementById('date_naissance').value.trim();
        const lieuNaissance = document.getElementById('lieu_naissance').value.trim();
        const filiere = document.getElementById('filiere').value.trim();
        const classe = document.getElementById('classe').value.trim();
        const contact = document.getElementById('contact').value.trim();
        const photo = document.getElementById('photo').value.trim();

        if (!matricule || !nom || !prenom || !dateNaissance || !lieuNaissance || !filiere || !classe || !contact || !photo) {
            event.preventDefault(); // Empêche l'envoi du formulaire
            alert('Veuillez remplir tous les champs obligatoires.');
        }
    });

    photoInput.addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                photoPreview.src = e.target.result;
                photoPreview.style.display = 'block';
            };
            reader.readAsDataURL(file);
        }
    });
});
