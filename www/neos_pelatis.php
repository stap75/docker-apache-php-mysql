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
    <?php echo "<h1>ΝΕΟΣ ΠΕΛΑΤΗΣ</h1>"; ?>

<button type="button" onclick="window.location.href='/main.php'">Επιστροφή</button>

<html>

<body>

<h1>Καταχώρηση στοιχείων</h1>

<form action="insert.php" method="post">

Επώνυμο: <input type="text" name="fname" /><br><br>

Όνομα: <input type="text" name="lname" /><br><br>

Διεύθυνση: <input type="text" name="lname" /><br><br>

<input type="submit" />

</form>

</body>
</html>


    <?php

    // Connexion et sélection de la base
    $conn = mysqli_connect('db', 'root', 'test', "fakos");
	mysqli_set_charset($conn, "utf8");
    $query = 'SELECT * From Pelates';
    $result = mysqli_query($conn, $query);

$sql= "SELECT number FROM `main_no` ORDER BY `number` DESC LIMIT 0 , 1";
$sql_res = mysql_query($sql,$dbc);
$row = mysql_fetch_array($sql_res);
$no_in = $row[0]+1;
 
 
$IN_Document_U_No="$no_in";

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
