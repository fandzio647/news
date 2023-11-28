<!DOCTYPE html>
<html lang="pl">
<?php   
    $conn = mysqli_connect("localhost", "root", "", "news");
   
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styl.css">
    <title>Wpisy</title>
    <link rel="icon" type="image/x-icon" href="logo.ico">
</head>

<body>
    <h1>Wpisy na stronie</h1>
    <br>
    <div class="wpis">
    <?php
    $id_w=$_GET['id'];
    $sql="SELECT * FROM wpisy WHERE id=$id_w";
    $res=mysqli_query($conn,$sql);
    $wyn=mysqli_fetch_assoc($res);
    echo '<h2>'.$wyn['tytul'].'</h2>';
    echo'<h3>'.$wyn['data']."</h3>";
    echo $wyn['tresc'];
    echo " <br><br><a href='index.php?id='>Powrót do strony glównej</a>";
   
    mysqli_close($conn);
    ?>
    </div>
</form>
</form>
</body>

</html>