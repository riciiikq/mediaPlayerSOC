<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST["name"]);
    $surname = htmlspecialchars($_POST["surname"]);
    $email   = htmlspecialchars($_POST["email"]);
    $genre   = htmlspecialchars($_POST["genre"]);
    $plan    = htmlspecialchars($_POST["plan"]);
?>

<!DOCTYPE html>
<html lang="sk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrácia úspešná</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Registrácia úspešná!</h1>
    <nav>
      <ul>
        <li><a href="index.php">Zoznam skladieb</a></li>
        <li><a href="register.php">Registrácia</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <section class="registration-success">
      <p>Ďakujeme, <strong><?php echo $name . " " . $surname; ?></strong>, za registráciu!</p>
      <p>Email: <?php echo $email; ?></p>
      <p>Obľúbený žáner: <?php echo ucfirst($genre); ?></p>
      <p>Vybraný program: <?php echo ucfirst($plan); ?></p>
      <br>
      <p>Registrácia bolá splnená, ste zaznamenaný v systéme.</p>
      <br>
      <a href="index.html"><button>← Späť na zoznam</button></a>
    </section>
  </main>
</body>
</html>

<?php
} else {
?>

<!DOCTYPE html>
<html lang="sk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Spojdify: Registrácia používateľa</title>
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
</head>
<body>
  <header>
    <h1>Registrácia používateľa</h1>
    <nav>
      <ul>
        <li><a href="index.html">Zoznam skladieb</a></li>
        <li><a href="register.php">Registrácia</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <section class="registration-form">
      <form id="regForm" action="" method="POST">
        <div class="form-group">
          <label for="name">Meno:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="surname">Priezvisko:</label>
          <input type="text" id="surname" name="surname" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="genre">Obľúbený žáner hudby:</label>
          <select id="genre" name="genre" required>
            <option value="">Vyberte žáner</option>
            <option value="pop">Pop</option>
            <option value="rock">Rock</option>
            <option value="hip-hop">Hip-Hop</option>
            <option value="electronic">Electronic</option>
            <option value="jazz">Jazz</option>
          </select>
        </div>
        <div class="form-group">
          <label for="plan">Výber programu:</label>
          <select id="plan" name="plan" required>
            <option value="">Vyberte program</option>
            <option value="lite">Lite</option>
            <option value="full">Full</option>
            <option value="paid">Platený</option>
          </select>
        </div>
        <button type="submit">Registrovať</button>
      </form>
      <div id="formMessage"></div>
    </section>
  </main>
</body>
    <footer>
        <p>© 2025 M. Stančik, R. Baboľ</p>
    </footer>
</html>
<?php
}
?>
