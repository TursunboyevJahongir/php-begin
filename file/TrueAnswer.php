<? 
$file=$_POST['file'];
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
$true=0;
$false=0;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <title> Test </title>
        <meta charset="UTF-8">
        <style>
        .TrueCard{
            border:1px solid green;
            margin-bottom:15px;
            border-radius:3px 7px 7px 3px;
            background:#E1F3FE;
            box-shadow: 1px 4px 8px 2px #80DEEA;
            transition: 0.3s;
            margin-left:20px;
            }
            h3{
                margin-left:20px;
            }
            h1{
                margin-left:20px;
            }
        .TrueCard:hover{
            box-shadow: 0 8px 20px 0 #B2EBF2;
          }
        .answer{
            border:1px solid 2px rgba(0,0,0,0.2);
            border-radius:40px 40px 40px 40px;
            background:#FFECB3;
            box-shadow: 5px 8px 18px 7px #FFE082;
            padding-bottom:50px;
            padding-top:50px;
            width: 350px;
            margin-left: 40%;
            
            }
        .FalseCard{
            border:1px solid RED;
            margin-bottom:15px;
            border-radius:3px 7px 7px 3px;
            background:#FFEBEE;
            box-shadow: 1px 4px 8px 2px #F48FB1;
            transition: 0.3s;          
        }
        .FalseCard:hover{
            box-shadow: 0 8px 20px 0  #F8BBD0;
          }
        .shadow{
            box-shadow: 1px 4px 8px 2px rgba(0,0,0,0.2);
                transition: 0.3s;
        }
            </style>
    </head>
    <body style="background:#E0E0E0">
        <form action="TrueAnswer.php" method="POST">
        <div class="alert alert-success shadow" role="alert" align="center"><h2><b><?=strtoupper($fan)?> fandan tast natijangiz</b></h2></div>
        <?php
           foreach($savollar as $i => $savol) {
                $question = explode(';', $savol);
                
           }
            for($index=0;$index<$i;$index++):
                
        ?>

                <div class="row"  style="margin-left:0px ">
                <?  $answ=isset($_POST["answ$cnt"])?$_POST["answ$cnt"]:0;
                
                    if($answ === $savollar[$index][4])
                    {
                        echo "<div class='col-lg-11 TrueCard'>
                        <div class='' style='border-left:7px solid #01579B;padding-top:1px;border-radius:3px 0px 0px 3px;margin-left:-18px'>";
                        echo '<h2 style="margin-left:20px;color:#004D40">'.$cnt.".".$savollar[$index][0].'<span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:#01579B ;margin-left:15px"></span></h2><br>';
                        echo "Javob Tog`ri: ";
                        echo $savollar[$index][ $savollar[$index][4] - 'A' + 1 ];
                        echo " </div> </div> ";
                        $true++;
                    }
                    else
                    {   
                        echo "<div class='col-lg-11  FalseCard' data-dismiss='alert'>
                        <div style='border-left:7px solid red;padding-top:1px;border-radius:3px 0px 0px 3px;margin-left:-15px'>";
                        echo '<h2 style="margin-left:20px;color:red">'.$cnt.".".$savollar[$index][0].'<span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:red ;margin-left:15px"></span></h2><br/>';
                        echo "Sizning javob: ";
                        $A=(int)ord($answ[0])-64;
                        echo  $savollar[$index][$A];
                        echo "<br>";
                        echo "\nTo`g`ri javob: ";
                        $b=ord($savollar[$index][4])-64; 
                        echo $savollar[$index][$b];
                        echo " </div></div>";
                        $false++;
                    }
                ?>
                </div>
        <?php
        $cnt++;
                endfor;
        ?>
        <div class="answer  " ><H1>
            
        Sizning natijangiz:</H1>
                <?$natija=$true*100/($true+$false);
                if($natija>=56 && $natija<71){
                    ?>
                    <h3>Natija:<?=floor($natija)?>% <samp style="color:#01579B" >Qoniqarli</samp> <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true" style="color:purple ;margin-left:15px"></span></h3>
                <?}
                else if($natija>=71 && $natija<86){
                    ?>
                    <h3>Natija:<?=floor($natija)?>% <samp style="color:purple">Yaxshi</samp><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true" style="color:#purple ;margin-left:15px"></span></h3>
                <?}
                else if($natija>86){
                    ?>
                    <h3>Natija:<?=floor($natija)?>%  <samp style="color:#01579B">A`lo</samp> 
                    <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:#01579B ;margin-left:15px"></h3></span>
                    <?
                    } else{
                        ?>
                        <h3><b>Natija:<?=floor($natija)?>% <samp style="color:red">Qoniqarsiz</samp> <span class="glyphicon glyphicon-thumbs-down" aria-hidden="true" style="color:#01579B ;margin-left:15px"></span></b></h3><?
                    }
                ?>
        </div>

        
        </form>
        
    </body>

</html>