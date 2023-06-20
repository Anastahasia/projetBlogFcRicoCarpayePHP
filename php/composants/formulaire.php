<div>
    <h1>Nouvel article</h1>
    <form method="POST" action="resultatform.php">
        
        <label for="titre">Titre :</label>
        <input type="text" name="titre" id="titre" required><br><br>

        <label for="chapeau">Chapeau :</label>
        <textarea name="chapeau" id="chapeau" cols="30" rows="10"></textarea><br><br>

        <label for="photo">Photo :</label>
        <input type="text" name="photo" id="photo" required><br><br>

        <label for="intertitre1">Premier intertitre :</label>
        <input type="text" name="intertitre1" id="intertitre1" required><br><br>

        <label for="intertitre2">Second intertitre :</label>
        <input type="text" name="intertitre2" id="intertitre2" required><br><br>

        <label for="paragraphe1">Premier paragraphe :</label>
        <textarea name="paragraphe1" id="paragraphe1" cols="80" rows="20"></textarea><br><br>

        <label for="paragraphe2">Second paragraphe :</label>
        <textarea name="paragraphe2" id="paragraphe2" cols="80" rows="20"></textarea><br><br>
        
        <button type="submit">Ajouter</button>
    </form>
</div>