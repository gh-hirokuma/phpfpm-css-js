<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./assets/css/main.css" />
</head>
<body>
  <?php
    $ignoreSites = ['us', 'sk'];
    $siteCode = 'os';

    switch ($siteCode) {
      case 'os':
        $element = "<div><h3>TITLE OS</h3>色々</div>";
        $element2 = "<div><h3>TITLE OS</h3>色々</div>";
        $element3 = "<div><h3>TITLE OS</h3>色々</div>";
        $element4 = "<div><h3>TITLE OS</h3>色々</div>";
        break;

      case 'sk':
        $element = "<div><h3>TITLE OS</h3>色々</div>";
        $element2 = "<div><h3>TITLE OS</h3>色々</div>";
        $element3 = "<div><h3>TITLE OS</h3>色々</div>";
        break;

      default:
        break;
    }
  ?>

  <?php if (!in_array($siteCode, $ignoreSites)) {
    echo $element4;
  } ?>

  <h1 class="header">
    <?php echo "こんつわ PHP"; ?>
  </h1>

  <button class="button">CLICK</button>

  <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <script src="./assets/js/main.js"></script>
</body>
</html>
