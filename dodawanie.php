<?php
session_start();
if(isset($_SESSION["Login"])=="admin") {
    if(count($_POST)>0) {
        $id=$_POST['id'];
        $tytul=$_POST['tytul'];
        $data=$_POST['data'];
        $tresc=$_POST['tresc'];
        $con = mysqli_connect('localhost','root','','news') or die('Unable To connect');
        $result = mysqli_query($con,"INSERT INTO wpisy (id,tytul, data, tresc) VALUES ('$id','$tytul', '$data', '$tresc')");
        header("Location:index.php");
    }
    
}
else{
    header("Location:index.php");
}
?>
<html>
<head>
<title>NEW NEWS</title>
<link rel="stylesheet" type="text/css" href="styl.css">

</head>

<body>
<div class="dod">
    <h1> DODAWANIE NEWSA NA STRONE </h1>
<form action="" method="post">
  <label for="id">Id:</label>
  <input type="text" id="id" name="id" required>
  <br>
  <label for="tytul">Name:</label>
  <input type="text" id="tytul" name="tytul" required>
  <br>

  <label for="data">Data:</label>
  <input type="text" id="data" name="data" required>
  <br>

  <label for="tresc">Treść:</label>
  <textarea id="tresc" name="tresc" rows="20" required></textarea>
  <br>

  <input type="submit" value="DODAJ ">
</form>
</div>
</body>
</html>
