<!-- answer.php -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Positive or Negative #, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Kyle Matthew" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Positive or Negative #, in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <script defer src="./js/script.js"></script>

  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Positive or Negative #, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/positive_negative.jpg" alt="Positive or Negative image" />
      </div>

      <div class="page-content">
        <?php
        if (isset($_POST['kind-of-number'])) {
          $choice = $_POST['kind-of-number'];

          if ($choice === "positive") {
            $randomNumber = rand(1, 9);
            echo "<h5>You chose a Positive Number.</h5>";
          } elseif ($choice === "negative") {
            $randomNumber = rand(-9, -1);
            echo "<h5>You chose a Negative Number.</h5>";
          } else {
            $randomNumber = 0;
            echo "<h5>Invalid option selected.</h5>";
          }

          echo "<h5>Generated number: $randomNumber</h5>";
        } else {
          echo "<h5>No option selected.</h5>";
        }
        ?>

        <br>
        <a href="index.php" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
          Return
        </a>
      </div>
    </main>
  </div>
</body>

</html>