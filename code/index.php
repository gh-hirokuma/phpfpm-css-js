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
    $isSignedIn = true;
    $favoriteElem = "<button>Like</button>";
    $menues = ['Home', 'Blog', 'Profile'];

    function getInCommon ($elem) {
      return "<div><h3>TITLE OS</h3>{$elem}</div>"
    }

    switch ($siteCode) {
      case 'os':
        $element = getInCommon("色々");
        $element2 = getInCommon("色々2");
        $element3 = getInCommon("色々3");
        $element4 = getInCommon("色々4");
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

  <?php if ($isSignedIn) {
    echo $favoriteElem;
  } ?>

  <?php if ($person === "japanese" && $gender === 'male') {

  } ?>

  <?php if (!in_array($siteCode, $ignoreSites)) {
    echo $element4;
  } ?>

  <ul>
    <?php
      foreach ($menues as $menu) {
          echo "<li>{$menu}</li>";
      }
    ?>
  </ul>

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
