<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Création de CV en ligne</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <form id="cvForm" action="submit_cv.php" method="post">
        <!-- Section Expérience professionnelle -->
        <section id="experienceSection">
            <h2>Expérience professionnelle</h2>
            <!-- Un bloc d'expérience exemple à cloner -->
            <div class="experienceBlock">
                <label for="jobTitle[]">Intitulé de la fonction :</label>
                <input type="text" name="jobTitle[]" class="jobTitle" required>

                <label for="employer[]">Employeur :</label>
                <input type="text" name="employer[]" class="employer" required>

                <label for="jobLocation[]">Localité :</label>
                <input type="text" name="jobLocation[]" class="jobLocation" required>

                <label for="jobCountry[]">Pays :</label>
                <select name="jobCountry[]" class="jobCountry">
                    <option value="">Sélectionner</option>
                    <option value="France">France</option>
                    <!-- Ajoutez d'autres pays ici -->
                </select>

                <label for="startDate[]">De :</label>
                <input type="date" name="startDate[]" class="startDate" required>

                <label for="endDate[]">À :</label>
                <input type="date" name="endDate[]" class="endDate">

                <label for="currentJob[]">En cours :</label>
                <input type="checkbox" name="currentJob[]" class="currentJob" value="yes">

                <label for="jobDescription[]">Principales activités et responsabilités :</label>
                <textarea name="jobDescription[]" class="jobDescription"></textarea>

                <button type="button" class="removeExperience">Supprimer cette expérience</button>
            </div>
            <button type="button" id="addExperience">Ajouter une expérience</button>
        </section>

        <!-- Section Formation -->
        <section id="educationSection">
            <h2>Formation</h2>
            <!-- Un bloc de formation exemple à cloner -->
            <div class="educationBlock">
                <label for="degree[]">Diplôme :</label>
                <input type="text" name="degree[]" class="degree" required>

                <label for="institution[]">Établissement :</label>
                <input type="text" name="institution[]" class="institution" required>

                <label for="educationStartDate[]">De :</label>
                <input type="date" name="educationStartDate[]" class="educationStartDate" required>

                <label for="educationEndDate[]">À :</label>
                <input type="date" name="educationEndDate[]" class="educationEndDate">

                <label for="currentEducation[]">En cours :</label>
                <input type="checkbox" name="currentEducation[]" class="currentEducation" value="yes">

                <button type="button" class="removeEducation">Supprimer cette formation</button>
            </div>
            <button type="button" id="addEducation">Ajouter une formation</button>
        </section>

        <!-- Bouton de soumission du CV -->
        <button type="submit" id="saveCV">Sauvegarder le CV</button>
    </form>

    <script src="scripts.js"></script>
</body>
</html>
