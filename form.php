<body>
<div class="card">
<form action="" method="post" enctype="multipart/form-data">
    <p class="buttonSub">
      <label for="monfichier">Sélectionnez un fichier : </label>
      <input type="file" name="monfichier" id="monfichier" />
      <link rel="stylesheet" href="style.css">
    </p>
    <p>
      <input class="buttonSub" type="submit" value="Envoyer le fichier" />
    </p>
  </form>
  </div>
</body>

<?php
  $dest = "uploads/";
  if ($_FILES['monfichier']['error'] > 0) {
    $erreur = "Erreur lors du transfert";
  } else {
    $resultat = move_uploaded_file($_FILES['monfichier']['tmp_name'], $dest . $_FILES['monfichier']['name']);
    if ($resultat) {
      echo "<p class='sendmessage'>Fichier envoyé avec succès !</p>";
    } else {
      echo "<p class='sendmessage'>Erreur lors du l'envoie du fichier.</p>";
    }
  }
  ?>
</body>
</html>
