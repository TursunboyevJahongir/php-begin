<? 
$file=isset($_POST["name"]) ?  $_POST["name"] :0;
$get_file=file_get_contents($file);
$rows = explode(PHP_EOL, $get_file);
$arr = [];
$i = 0;
foreach ($rows as $item) {
    $arr[$i++]=explode(';', $item);
}
$cnt=1;

$fan = $arr[0][0];
$savollar = [];
$k = 0;
for($j = 1; $j < $i; $j++) {
    $savollar[$k++] = $arr[$j];
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>

  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <title> Test </title>
        <meta charset="UTF-8">
        <style>
        .shadow{
            box-shadow: 1px 4px 8px 2px rgba(0,0,0,0.2);
                transition: 0.3s;
        }
        .Card{
            
            box-shadow: 1px 4px 8px 2px #4CAF50;
            transition: 0.3s;          
        }
        .Card:hover{
            box-shadow: 0 8px 20px 0  #4CAF50;
          }
          .h3{
              
          }
        </style>
       
    </head>
    <body  style="background:#E0E0E0">
        <form method=POST>
                <input type="file" name="name">
                <input class="btn btn-danger" type="submit" value="ok">
        </form>
        <form action="TrueAnswer.php" method="POST">
        <input type="hidden" name='file' value="<?=$file?>">
        <div class="alert alert-success shadow" role="alert" style="padding-left: 50% "><h2><b><?=strtoupper($fan)?></b></h2></div>
        <?php
            foreach($savollar as $i => $savol) {}
            for($index=0;$index<$i;$index++):
                        echo '<h2 style="margin-left:20px;color:#004D40">'.$cnt.".".$savollar[$index][0].'</h2><br/>';
                        
                ?>
                        <div class="row" style="margin-left:30px ">
                            <h3 class="" style="color:#004D40"><label class=" col-md-3 Card" style=" margin-left:5px;border-bottom:3px solid #388E3C;border-right:3px solid #388E3C;border-radius:20px 20px 20px 20px;border-left:3px solid #388E3C"><input type="radio" name='answ<?=$cnt?>' value="A"> <?= $savollar[$index][1] ?></label></h3>
                            <h3 style="color:#004D40"><label class=" col-md-3 Card" style="margin-left:5px;border-bottom:3px solid #388E3C;border-right:3px solid #388E3C;border-radius:20px 20px 20px 20px;border-left:3px solid #388E3C"><input type="radio" name='answ<?=$cnt?>' value="B"> <?= $savollar[$index][2] ?></label></h3>
                            <h3 style="color:#004D40"><label class=" col-md-3 Card" style="margin-left:5px;border-bottom:3px solid #388E3C;border-right:3px solid #388E3C;border-radius:20px 20px 20px 20px;border-left:3px solid #388E3C"><input type="radio" name='answ<?=$cnt?>' value="C"> <?= $savollar[$index][3] ?></label></h3>
                        </div>
                <?php
                $cnt++;
            endfor;
                ?>

        <br><br>
        <button type="submit" class="btn btn-success btn-lg btn-block Card" ><h3>Javob</h3></button>
        
        </form>
        
    </body>

</html>