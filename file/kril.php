<?
error_reporting(0);
$file = isset($_POST['file']) ? $_POST['file'] : '';
$f = file_get_contents($file);
$text = isset($_POST['text']) ? $_POST['text'] : '';
if ($_POST['RuUz'] == 'kril') {
    $array = array('a' => 'а', 'A' => 'А', 'q' => 'қ', 'Q' => 'Қ', 'e' => 'э', 'E' => 'Э', 'r' => 'р', 'R' => 'Р',
        't' => 'т', 'T' => 'Т', 'u' => 'у', 'U' => 'У', 'i' => 'и', 'I' => 'И', 'p' => 'п', 'P' => 'П', 's' => 'с',
        'S' => 'С', 'd' => 'д', 'D' => 'Д', 'f' => 'ф', 'F' => 'Ф', 'h' => 'ҳ', 'H' => 'Ҳ',
        'j' => 'ж', 'J' => 'Ж', 'k' => 'к', 'K' => 'К', 'l' => 'л', 'L' => 'Л', 'z' => 'з', 'Z' => 'З', 'y' => 'й', 'Y' => 'Й',
        'v' => 'в', 'V' => 'В', 'b' => 'б', 'B' => 'Б', 'n' => 'н', 'N' => 'Н', 'm' => 'м', 'o' => 'о', 'O' => 'О');
    $arr = array('йа' => 'я', 'Йа' => 'Я', 'йэ' => 'е', 'Йэ' => 'Е', 'сҳ' => 'ш', 'Сҳ' => 'Ш', 'йу' => 'Ю', 'Йу' => 'Ю', 'cҳ' => 'ч',
        'Cҳ' => 'Ч', 'тс' => 'ц', 'Тс' => 'Ц', 'ЙА' => 'Я', 'ЙЭ' => 'Е', 'СҲ' => 'Ш',
        'ЙУ' => 'Ю', 'CҲ' => 'Ч', 'ТС' => 'Ц', "о'" => "ў", "О'" => "Ў", "о`" => "ў", "О`" => "Ў", "о‘" => "ў", "О‘" => "Ў",
        "g'" => "ғ", "G'" => "Ғ", "g`" => "ғ", "G`" => "Ғ", "g‘" => "ғ", "G‘" => "Ғ", 'g' => 'г', 'G' => 'Г',
        "’" => 'ъ', "'" => 'ъ', "‘" => 'ъ', "`" => 'ъ');
    $yo = array('йо' => 'ё', 'Йо' => 'Ё', 'ЙО' => 'Ё');
    
    $a = strtr($f, $array);
    $b = strtr($text, $array);
    $b = strtr($b, $arr);
    $b = strtr($b, $yo);
    $a = strtr($a, $arr);
    $a = strtr($a, $yo);

} else {
    $array2 = array('а' => 'a', 'А' => 'A', 'қ' => 'q', 'Қ' => 'Q', 'э' => 'e', 'Э' => 'E', 'р' => 'r', 'Р' => 'R',
        'т' => 't', 'Т' => 'T', 'у' => 'u', 'У' => 'U', 'и' => 'i', 'И' => 'I', 'п' => 'p', 'П' => 'P', 'с' => 's',
        'С' => 'S', 'д' => 'd', 'Д' => 'D', 'ф' => 'f', 'Ф' => 'F', 'ҳ' => 'h', 'Ҳ' => 'H',
        'ж' => 'j', 'Ж' => 'J', 'к' => 'k', 'К' => 'K', 'л' => 'l', 'Л' => 'L', 'з' => 'z', 'З' => 'Z', 'й' => 'y', 'Й' => 'Y',
        'в' => 'v', 'В' => 'V', 'б' => 'b', 'Б' => 'B', 'н' => 'n', 'Н' => 'N', 'м' => 'm', 'о' => 'o', 'О' => 'O');
    $arr2 = array('я' => 'ya', 'Я' => 'Ya', 'ё' => 'yo', 'Ё' => 'yo', 'е' => 'ye', 'Е' => 'Ye', 'ш' => 'sh', 'Ш' => 'SH', 'Ю' => 'yu', 'Ю' => 'Yu', 'ч' => 'ch',
        'г' => 'g', 'Г' => 'G', 'Ч' => 'CH', 'ц' => 's', 'Ц' => 's', "ў" => "o'", "Ў" => "O'", "ғ" => "g'", "Ғ" => "G'", "ъ" => "'");
    $a = strtr($f, $array2);
    $b = strtr($text, $array2);
    $b = strtr($b, $arr2);
    $a = strtr($a, $arr2);
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<script src="bootstrap/js/bootstrap.min.js"></script>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="bootstrap/jquery/jquery-3.3.1.slim.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kril Latin</title>
</head>
<body>
    <br>
    <form action="" method='POST'>

    <textarea class="form-control" name='text' rows="10" style="width:98%;margin-left:15px"></textarea>
    <br>
    <input type="file" class="col-md-6" name='file' sryle="border:1px solid">

    <div class="radio rol" >
        <label class="rol-lg-3">
            <input type="radio" name="RuUz" value="kril" checked>
            Kril
        </label>
        <label class="col-lg-3">
            <input type="radio" name="RuUz" value="latin">
            Latin
        </label>
    </div>
    <button class="btn btn-danger col-lg-1" type="submit" style="border-radius: 25px;margin-left:15px"><b>OK</b></button>


    </form><br><br>

<div class="jumbotron">
  <div class="container">
  <p style="font:20px serif"> <?=$a?><br>
    <b><?=$b?></b><br> </p>
  </div>
</div>

</body>
</html>
