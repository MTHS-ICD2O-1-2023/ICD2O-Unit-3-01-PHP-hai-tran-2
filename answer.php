<!DOCTYPE html>
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Area of Trapezoid program, in JS" />
  <meta name="keywords" content="mths, ICD2O" />
  <meta name="author" content="Hai Tran" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.light_blue-green.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Area of Trapezoid webpage, in JS</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Area of Trapezoid program, with JS</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="image">
        <img src="./images/trapezoid.svg" alt="area of trapezoid image" />
      </div>
      <div class="page-content-php">
        <div id="user-info">
          <?php
          // input
          $baseAOfTrapezoid = $_GET["base-a"];
          $baseBOfTrapezoid = $_GET["base-b"];
          $heightOfTrapezoid = $_GET["height"];

          // process
          $areaOfTrapezoid = ($baseAOfTrapezoid + $baseBOfTrapezoid) / 2 * $heightOfTrapezoid;
          // output
          echo "The area is: " . $areaOfTrapezoid . " mm²";
          ?>
        </div>
      </div>
    </main>
  </div>
</body>

</html>