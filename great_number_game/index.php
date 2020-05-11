<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Great Number Game</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <h1>Welcome to the Great Number Game!</h1>
    <h2>I am thinking of a number between 1 and 100</h2>
    <h3>Take a guess!</h3>
<?php if (isset($_SESSION['result'])) {
        if ($_SESSION['result'] == "low"){ ?>
    <div class="incorrect">
      <h4>Too low!</h4>
    </div>
<?php   } else if ($_SESSION['result'] == "high") { ?>
    <div class="incorrect">
      <h4>Too high!</h4>
    </div>
<?php   } else { ?>
    <div class="correct">
      <h4><?= $_SESSION['number'] ?> was the number!</h4>
      <form action="process.php">
        <input type="hidden" name="reset" value="true">
        <input type="submit" value="Play again!">
      </form>
    </div>
<?php   }
      }  ?>
    <form id="guessing_form" action="process.php">
      <input type="text" name="guess">
      <input type="submit" value="Submit">
    </form>
    <script type="text/javascript">
      <?php if (isset($_SESSION['result']) && ($_SESSION['result'] == "correct")){ ?>
        document.getElementById('guessing_form').remove();
      <?php } ?>
    </script>
  </body>
</html>