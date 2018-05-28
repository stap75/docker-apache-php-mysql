<?php
   ob_start();
   include('session.php');
?>

   
<html>
 <head>
  <title>ΚΑΘΑΡΙΣΤΗΡΙΑ ΉΛΙΟΣ</title>

  <meta charset="utf-8"> 

</head>
<body>
    <div class="container">
    <?php echo "<h1>ΠΕΛΑΤΟΛΟΓΙΟ</h1>"; ?>

<button type="button" onclick="window.location.href='/neos_pelatis.php'">Νέος Πελάτης</button>
<button type="button" onclick="alert('Hello world!')">Αλλαγή στοιχείων</button>
<button type="button" onclick="window.location.href='/main.php'">Επιστροφή</button>

    <?php

    // Connexion et sélection de la base
    $conn = mysqli_connect('db', 'root', 'test', "fakos");
	mysqli_set_charset($conn, "utf8");
    $query = 'SELECT * From Pelates';
    $result = mysqli_query($conn, $query);



    $result->close();
    mysqli_close($conn);

    ?>
    </div>
</body>
</html>
   
   <body>
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html> 
