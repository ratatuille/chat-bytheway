<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
  // Ces Sessions ils vont Starté si les inscriptions sont Valides
?>

<?php include_once "header.php"; ?>
<html>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Chat #bytheway</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
<!--    hahah & huraay ça c'est l'index de Chat Inscription ah Oups !! Am I in   
        troubles 🤪 -->
            
              <label>Votre Nom</label>
            <input type="text" name="fname" placeholder="Votre Nom" required>
          </div>
          <div class="field input">
            <label>Votre Prénom</label>
            <input type="text" name="lname" placeholder="Votre Prénom" required>
          </div>
        </div>
        <div class="field input">
          <label>Adress E-email</label>
          <input type="text" name="email" placeholder="Entrez votre e-mail" required>
        </div>
        <div class="field input">
          <label>Mot de Passe</label>
          <input type="password" name="password" placeholder="Entrez votre mot de passe" required>
          <i class="fas fa-eye"></i>
        </div>
        <!-- Ajout des Images🎁 -->
        <div class="field image">
          <label>Selectionez Image</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <!-- Button de continuation vers le Chat👨🏻‍💻 -->
        <div class="field button">
          <input type="submit" name="submit" value="Continuez au Chat">
        </div>
      </form>
      <div class="link">Dejà inscrit? <a href="login.php">Conectez-Vous</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
