<?
$myfile=fopen("testfile.txt","w");
$txt="john Doe ";
fwrite($myfile,$txt);
fwrite($myfile,"::");
$txt = isset($_POST['yoz']) ? $_POST['yoz'] : 0;
fwrite($myfile,$txt);
fclose($myfile);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<form method="post">
  <input type="text" name="yoz" autocomplete="off" method="POST">
  <button type="submit">ok</button>
</form>
</body>
</html>