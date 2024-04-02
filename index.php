<!DOCTYPE html>
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Area of Trapezoid program, in PHP" />
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
  <title>Area of Trapezoid webpage, in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Area of Trapezoid program, with PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <p>Formula</p>
      <br />
      <p>A = [ (a + b) /2 ] h</p>
      <br />
      <p>Please enter integers for dimensions:</p>
      <div class="image">
        <img src="./images/trapezoid.svg" alt="area of trapezoid image" />
      </div>
      <br />
      <form action="answer.php" method="GET">
        <!-- Numeric Textfield with Floating Label -->
        Base A:
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="base-a" aria-label="Base A" />
          <label class="mdl-textfield__label" for="base-b"></label>
          <span class="mdl-textfield__error">Input is not a number!</span>
        </div>
        mm
        <br>
        <!-- Numeric Textfield with Floating Label -->
        Base B:
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="base-b" aria-label="Base B" />
          <label class="mdl-textfield__label" for="base-b"></label>
          <span class="mdl-textfield__error">Input is not a number!</span>
        </div>
        mm
        <br>
        <!-- Numeric Textfield with Floating Label -->
        Height:
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="height" aria-label="Height" />
          <label class="mdl-textfield__label" for="height"></label>
          <span class="mdl-textfield__error">Input is not a number!</span>
        </div>
        mm
        <br>
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
          Calculate
        </button>
      </form>
    </main>
  </div>
</body>

</html>