<?
$fan=isset($_POST["FAN"]) ? $_POST["FAN"]:0;
$fwrite=fopen("$fan.txt","w");
$soni=isset($_POST["TheNumberOf"]) ? $_POST["TheNumberOf"]:0; 
fwrite($fwrite,$fan);
fwrite($fwrite,";");
fwrite($fwrite,$soni."\n");
for($i=1;$i<=$soni;$i++):
    echo $savol=isset($_POST["savol$i"])? $_POST["savol$i"]:0;
    echo $javob=isset($_POST["togri_javob$i"])? $_POST["togri_javob$i"]:0;
    echo $first=isset($_POST["first$i"])?$_POST["first$i"]:0;
    echo $second=isset($_POST["second$i"])?$_POST["second$i"]:0;
    echo $third=isset($_POST["third$i"])?$_POST["third$i"]:0;
    fwrite($fwrite,$savol . ";" . $first . ";" . $second. ";" . $third . ";". $javob ."\n");
endfor;
fclose($fwrite);
?>
<!DOCTYPE html>
<head>

  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
        </head>
            <body>
                <form action="test_ride.php">
                    <div class="alert alert-warning" role="alert" style="font:35px sans-seif" href="test_ride.php"><?=$fan?> fanidan test tayyor savollar soni <?=$soni?></div>
                    
                </form>
            </body>
        </html>

