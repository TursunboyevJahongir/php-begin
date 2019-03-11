<?php
    $soni = isset($_POST['soni']) ? $_POST['soni'] : 0;
    $fan=isset($_POST['fan']) ? $_POST['fan']:0;
?>
<!DOCTYPE html>
<head>

  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body><br>
<form method="POST">
    <div class="row" style="margin-left:1px">
      <div class="col-lg-3">
        <div class="input-group">
          <input type="text" name='fan' autocomplete="off"  class="form-control" placeholder="Fanning Nomi" style="margin-left:5px" required>    
          <span class="input-group-btn">
    <input type="number" name='soni' max="36" min="0" autocomplete="off"  class="form-control" placeholder="N" style="padding-left:5px;font-size:12px; " required>  
            <button class="btn btn-default" type="submit">Go!</button>
          </span>
        </div>
      </div>
    </div>
</form>
<!-- how to disable autocomplete/suggestion on html input -->
<form method="POST" action="test_update.php">
    <input type="text" name='FAN' value="<?=$fan?>" hidden>    
    <input type="number" name='TheNumberOf' value="<?=$soni?>" hidden>
    <div class="alert alert-success" role="alert" style="font:25px sans-serif;padding-left: 50% "><?=strtoupper($fan)?></div>

    <?
      for($index=1;$index<=$soni;$index++):       
    ?>
        <div style="padding-top:10px;padding-bottom:10px">
          <div class="form-group col-lg-11">
          <label for="exampleInputEmail1"><?=$index?>.Savol</label>
            <input type="text" class="form-control" name="savol<?=$index?>"  placeholder="<?=$index?>.Savol" style=" padding-laft:-20px">
          </div>
          <div class="row" style="margin-left:0px ">
            <div class="col-lg-3">
              <div class="input-group">
                <span class="input-group-addon">
                  <input type="radio" name="togri_javob<?=$index?>" value="A" style="font=35px sans-serif">A</span>
                <input type="text" autocomplete="off" class="form-control" name="first<?=$index?>" placeholder="A-javob">
              </div>
            </div>
          <div class="col-lg-3" >
              <div class="input-group">
                <span class="input-group-addon">
                  <input type="radio"   name="togri_javob<?=$index?>" value="B">B</span>           
                <input type="text" class="form-control" autocomplete="off" name="second<?=$index?>" placeholder="B-javob"> 
              </div>
          </div>
            <div class="col-lg-3" >
              <div class="input-group">
                <span class="input-group-addon">
                  <input type="radio"   name="togri_javob<?=$index?>" value="C">C</span>           
                <input type="text" class="form-control" autocomplete="off" name="third<?=$index?>" placeholder="C-javob">
              </div>
            </div>
          </div>
    <?
      endfor;
    ?>
  <button type="submit" class="btn btn-danger" style="margin-left:15px;margin-top:5px;position:absolute;border:1px solid black">yuklash</button>  
</form>
</body>
</html>
