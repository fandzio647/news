<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styl.css">
    <title>Wpisy</title>
</head>

<body>
    <?php
    #połczenie dotyczące przewijania strony 
    $conn = mysqli_connect("localhost", "root", "", "news");
    $sql = "SELECT COUNT(*) as ilosc_wpisów FROM wpisy";
    $res = mysqli_query($conn, $sql);
    $wyn_wpis = mysqli_fetch_assoc($res)['ilosc_wpisów'];
    ?>
    <h1>Wpisy na stronie</h1>
    <br>
    <div class="one">
    <?php
    $a=$wyn_wpis;
    $a_sql="SELECT * FROM wpisy WHERE id=$a";
    $a_res=mysqli_query($conn,$a_sql);
    $a_wyn=mysqli_fetch_assoc($a_res);
    echo '<h2> ID: '.$a_wyn['id']." ".$a_wyn['tytul'].'</h2>';
    echo'<h3>'.$a_wyn['data']."</h3>";
    echo substr($a_wyn['tresc'],0,185)." ... ";
    echo "<a href='wpis.php?id=".$a."'>Czytaj więcej</a>";
    ?>
    </div>
    <div class="two">
    <?php
    $b=$a-1;
    $a_sql="SELECT * FROM wpisy WHERE id=$b";
    $a_res=mysqli_query($conn,$a_sql);
    $a_wyn=mysqli_fetch_assoc($a_res);
    echo '<h2> ID: '.$a_wyn['id']." ".$a_wyn['tytul'].'</h2>';
    echo'<h3>'.$a_wyn['data']."</h3>";
    echo substr($a_wyn['tresc'],0,199)." ... ";
    echo "<a href='wpis.php?id=".$b."'> Czytaj więcej</a>";
    ?>
    </div>
    <div class="three">
    <?php
    $c=$b-1;
    $a_sql="SELECT * FROM wpisy WHERE id=$c";
    $a_res=mysqli_query($conn,$a_sql);
    $a_wyn=mysqli_fetch_assoc($a_res);
    echo '<h2> ID: '.$a_wyn['id']." ".$a_wyn['tytul'].'</h2>';
    echo'<h3>'.$a_wyn['data']."</h3>";
    echo substr($a_wyn['tresc'],0,185)." ... ";
    echo " <a href='wpis.php?id=".$c."'> Czytaj więcej</a>";
    mysqli_close($conn);
    ?>
    </div>
    
    

</body>

</html>