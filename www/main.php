<?php
   ob_start();
   include('session.php');
?>

   
<html>
 <head>
  <title>ΚΑΘΑΡΙΣΤΗΡΙΑ ΉΛΙΟΣ</title>

  <meta charset="utf-8"> 

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
    <?php echo "<h1>ΑΡΧΙΚΗ</h1>"; ?>

<button type="button" onclick="window.location.href='/pelates.php'">Πελάτες</button>
<button type="button" onclick="alert('Hello world!')">Υλικό</button>

    <?php

    // Connexion et sélection de la base
    $conn = mysqli_connect('db', 'root', 'test', "fakos");
	mysqli_set_charset($conn, "utf8");
    $query = 'SELECT * From Pelates';
    $result = mysqli_query($conn, $query);

    echo '<table class="table table-striped">';
    echo '<thead><tr><th></th><th>Όνομα</th><th>Επώνυμο</th><th>Διεύθυνση</th></tr></thead>';
    while($value = $result->fetch_array(MYSQLI_ASSOC)){
        echo '<tr>';
        echo '<td><a href="#"><span class="glyphicon glyphicon-search"></span></a></td>';
        foreach($value as $element){
            echo '<td>' . $element . '</td>';
        }

        echo '</tr>';
    }
    echo '</table>';

    /* Libération du jeu de résultats */
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
