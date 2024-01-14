<?php
if (session_status() === PHP_SESSION_NONE) {
  // Startet die Session, bzw. stellt sie wieder her, falls vorhanden.
  session_start();
}
foreach ($_SESSION as $key => $value) {
  echo "<pre>";
  echo $key . "=>" . $value;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>


  <?php
  if (session_status() === PHP_SESSION_NONE) {
    // Startet die Session, bzw. stellt sie wieder her, falls vorhanden.
    session_start();
  }



  if (isset($_POST['number1'])) {
    $_SESSION['number1'] = "page number 01";
    $page2 = $_SESSION['number1'];
  }

  if (isset($_POST['number2'])) {
    $_SESSION['number2'] = "page number 02";
    $page3 = $_SESSION['number2'];
  }

  if (isset($_POST['number3'])) {
    $_SESSION['number3'] = "page number 03";
    $page4 = $_SESSION['number3'];
  }

  if (isset($_POST['number4'])) {
    $_SESSION['number4'] = "page number 04";
    $page5 = $_SESSION['number4'];
  }


  ?>

  <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
    <?php


    if (isset($_POST['start'])) {

      echo "<input type='text' name='number1' id='name'>
<input type='submit' value='number1'>";
    } elseif (isset($_POST['number1'])) {
      echo "<input type='text' name='number2' id='name'>
      <input type='submit' value='number2'>";
    } elseif (isset($_POST['number2'])) {
      echo "<input type='text' name='number3' id='name'>
      <input type='submit' value='number3'>";
    } elseif (isset($_POST['number3'])) {
      echo "<input type='text' name='number4' id='name'>
      <input type='submit' value='number4'>";
    } elseif (isset($_POST['number4'])) {
      echo "<input type='text' name='number5' id='name'>
      <input type='submit' value='number5'>";
    }



    ?>
  </form>




</body>

</html>