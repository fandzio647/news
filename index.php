<!DOCTYPE html>
<html lang="pl">
<?php
session_start();
$wyn_wpis=0;
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styl.css">
    <title>Wpisy</title>
    <link rel="icon" type="image/x-icon" href="logo.ico">
</head>

<body>
    <div id="lewy">
    <?php
    #połczenie dotyczące przewijania strony 
    $conn = mysqli_connect("localhost", "root", "", "news");
    $sql = "SELECT COUNT(*) as ilosc_wpisów FROM wpisy";
    $res = mysqli_query($conn, $sql);
    $wyn_wpis = mysqli_fetch_assoc($res)['ilosc_wpisów'];
    if(isset($_SESSION['Login'])){
        echo "Zalogowano jako: ".$_SESSION["Login"];
    }
    else{
        $_SESSION["Login"]="user";
        echo "Zalogowano jako: ".$_SESSION["Login"];

    }
    ?>
    </div>
    <div id="prawy">
        <a href="log.php">Logowanie</a>
        <a href="logout.php">Wylogowanie</a>
        
    </div>

    <h1>Wpisy na stronie</h1>
    <br>
    <div class="one">
        <?php
    $a=$wyn_wpis;
    $a_sql="SELECT * FROM wpisy WHERE id=$a";
    $a_res=mysqli_query($conn,$a_sql);
    $a_wyn=mysqli_fetch_assoc($a_res);
    echo '<h2>'.$a_wyn['tytul'].'</h2>';
    echo'<h3>'.$a_wyn['data']."</h3>";
    echo substr($a_wyn['tresc'],0,185)." ... ";
    echo "<a href='wpis.php?id=".$a."'> Czytaj więcej</a>";
    if ($_SESSION['Login'] !== "admin") {
        echo "";
      } else {
        echo "<br><form method='post' action='delete.php'>
    <input type='hidden' name='id' value='" . $a . "'>
    <button type='submit'>Usuń</button>
  </form>";
      }
    ?>
    </div>
    <div class="two">
        <?php
    $b=$a-1;
    $a_sql="SELECT * FROM wpisy WHERE id=$b";
    $a_res=mysqli_query($conn,$a_sql);
    $a_wyn=mysqli_fetch_assoc($a_res);
    echo '<h2>'.$a_wyn['tytul'].'</h2>';
    echo'<h3>'.$a_wyn['data']."</h3>";
    echo substr($a_wyn['tresc'],0,199)." ... ";
    echo "<a href='wpis.php?id=".$b."'> Czytaj więcej</a>";
    if ($_SESSION['Login'] !== "admin") {
        echo "";
      } else {
        echo "<br><form method='post' action='delete.php'>
    <input type='hidden' name='id' value='" . $b . "'>
    <button type='submit'>Usuń</button>
  </form>";
      }
    
    
    ?>
    </div>
    <div class="three">
        <?php
    $c=$b-1;
    $a_sql="SELECT * FROM wpisy WHERE id=$c";
    $a_res=mysqli_query($conn,$a_sql);
    $a_wyn=mysqli_fetch_assoc($a_res);
    echo '<h2>'.$a_wyn['tytul'].'</h2>';
    echo'<h3>'.$a_wyn['data']."</h3>";
    echo substr($a_wyn['tresc'],0,185)." ... ";
    echo " <a href='wpis.php?id=".$c."'> Czytaj więcej</a>";
    if ($_SESSION['Login'] !== "admin") {
        echo "";
      } else {
        echo "<br><form method='post' action='delete.php'>
    <input type='hidden' name='id' value='" . $c . "'>
    <button type='submit'>Usuń</button>
  </form>";
      }
    
    #mysqli_close($conn);
    ?>
    </div>
    <div id="down-left">
    <?php
            if ($_SESSION['Login'] !== "admin") {
                echo "Brak uprawień do dodawania";
            } else {
                echo '<a href="dodawanie.php">Dodawawanie wpisów</a>';
            }
        ?>
    </div>
    <div id="stopka"></div>

</body>

</html>