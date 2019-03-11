
<!DOCTYPE html>
<html lang="en">
<?php
    $soni = isset($_POST['soni']) ? $_POST['soni'] : 0;
?>

<head>
    <meta charset="UTF-8">
    <title>CopyPast</title>
    <script src="bootstrap/js/bootstrap.min.js"></script>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <style>
}
    </style>
</head>
<html>
<body>
    <form method="post">
    <b style="font:25px sane-serif green">  
        <input type="number" name="soni" style=" border-radius:5px 5px 5px 5px;margin-left:15px" placeholder="Talabalar Soni">
        <button type="submit" class="btn btn-info" style="font:20px sane-serif green;margin-top:-5px">ok</button>
    </form>
    <form method="POST" enctype="multipart/form-data" action="savestudents.php">
        <input type="number" name='TheNumberOf' value="<?=$soni?>" hidden>
    <?
        for($index=0;$index<$soni;$index++):       
    ?>
        <br>
        <div class="form-group col-lg-4">
            <input type="taxt" class="form-control" id="exampleInputPassword1" placeholder="Name" name="name[<?php echo $index ?>]" style="font:25px sane-serif green">
        </div>
        <div class="form-group col-lg-4">
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name='email[<?=$index?>]' style="font:25px sane-serif green">
        </div>
        <div class="form-group col-lg-4">
            <input type="file" id="exampleInputFile" name="fayllar[<?$index?>]">
        </div>
    <?
        endfor;
    ?>
        <button type="submit" class="bnt btn-primary btn-lg" style="margin-left:15px">Yuklash</button>
    </form>
</body>
</html> 