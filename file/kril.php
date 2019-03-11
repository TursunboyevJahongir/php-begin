<?

$f = isset($_POST['file']) ? file_get_contents($_POST['file']) : '';
$text = isset($_POST['text']) ? $_POST['text'] : '';
if ($_POST['til']) {
    $array = array('a' => 'а', 'A' => 'А', 'q' => 'қ', 'Q' => 'Қ', 'e' => 'э', 'E' => 'Э', 'r' => 'р', 'R' => 'Р',
        't' => 'т', 'T' => 'Т', 'u' => 'у', 'U' => 'У', 'i' => 'и', 'I' => 'И', 'p' => 'п', 'P' => 'П', 's' => 'с', 'S' => 'С', 'd' => 'д', 'D' => 'Д', 'f' => 'ф', 'F' => 'Ф', 'h' => 'ҳ', 'H' => 'Ҳ',
        'j' => 'ж', 'J' => 'Ж', 'k' => 'к', 'K' => 'К', 'l' => 'л', 'L' => 'Л', 'z' => 'з', 'Z' => 'З', 'y' => 'й', 'Y' => 'Й',
        'v' => 'в', 'V' => 'В', 'b' => 'б', 'B' => 'Б', 'n' => 'н', 'N' => 'Н', 'm' => 'м', 'o' => 'о', 'O' => 'О');
    $arr = array('йа' => 'я', 'Йа' => 'Я', 'йо' => 'ё', 'Йо' => 'Ё', 'йэ' => 'е', 'Йэ' => 'Е', 'сҳ' => 'ш', 'Сҳ' => 'Ш', 'йу' => 'Ю', 'Йу' => 'Ю', 'cҳ' => 'ч',
        'Cҳ' => 'Ч', 'тс' => 'ц', 'Тс' => 'Ц', 'ЙА' => 'Я', 'ЙО' => 'Ё', 'ЙЭ' => 'Е', 'СҲ' => 'Ш',
        'ЙУ' => 'Ю', 'CҲ' => 'Ч', 'ТС' => 'Ц', "о'" => "ў", "О'" => "Ў", "о`" => "ў", "О`" => "Ў", "о‘" => "ў", "О‘" => "Ў", "g'" => "ғ", "G'" => "Ғ", "g`" => "ғ", "G`" => "Ғ", "g‘" => "ғ", "G‘" => "Ғ", 'g' => 'г', 'G' => 'Г', "’" => 'ъ', "‘" => 'ъ', "`" => 'ъ');
    $a = strtr($f, $array);
    $b = strtr($text, $array);
    $b = strtr($b, $arr);
    $a = strtr($a, $arr);} else {
    $array = array('a' => 'а', 'A' => 'А', 'q' => 'қ', 'Q' => 'Қ', 'e' => 'э', 'E' => 'Э', 'r' => 'р', 'R' => 'Р',
        't' => 'т', 'T' => 'Т', 'u' => 'у', 'U' => 'У', 'i' => 'и', 'I' => 'И', 'p' => 'п', 'P' => 'П', 's' => 'с',
        'S' => 'С', 'd' => 'д', 'D' => 'Д', 'f' => 'ф', 'F' => 'Ф', 'h' => 'ҳ', 'H' => 'Ҳ',
        'j' => 'ж', 'J' => 'Ж', 'k' => 'к', 'K' => 'К', 'l' => 'л', 'L' => 'Л', 'z' => 'з', 'Z' => 'З', 'y' => 'й', 'Y' => 'Й',
        'v' => 'в', 'V' => 'В', 'b' => 'б', 'B' => 'Б', 'n' => 'н', 'N' => 'Н', 'm' => 'м', 'o' => 'о', 'O' => 'О');
    $arr = array('йа' => 'я', 'Йа' => 'Я', 'йо' => 'ё', 'Йо' => 'Ё', 'йэ' => 'е', 'Йэ' => 'Е', 'сҳ' => 'ш', 'Сҳ' => 'Ш', 'йу' => 'Ю', 'Йу' => 'Ю', 'cҳ' => 'ч',
        'Cҳ' => 'Ч', 'тс' => 'ц', 'Тс' => 'Ц', 'ЙА' => 'Я', 'ЙО' => 'Ё', 'ЙЭ' => 'Е', 'СҲ' => 'Ш',
        'ЙУ' => 'Ю', 'CҲ' => 'Ч', 'ТС' => 'Ц', "о'" => "ў", "О'" => "Ў", "о`" => "ў", "О`" => "Ў", "о‘" => "ў", "О‘" => "Ў", "g'" => "ғ", "G'" => "Ғ", "g`" => "ғ", "G`" => "Ғ", "g‘" => "ғ", "G‘" => "Ғ", 'g' => 'г', 'G' => 'Г', "’" => 'ъ', "‘" => 'ъ', "`" => 'ъ');
    $a = strtr($f, $array);
    $b = strtr($text, $array);
    $b = strtr($b, $arr);
    $a = strtr($a, $arr);
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
    <title>Document</title>
</head>
<body>
    <form action="" method='POST'>

    <textarea class="form-control" name='text' rows="10"></textarea>
    <input type="file" class="col-md-6" name='file' sryle="border:1px solid">
     <div class="">
            <div class="radio">
    <label>
        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
        Option one is this and that&mdash;be sure to include why it's great
    </label>
    </div>
        <div class="radio">
            <label>
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                Option two can be something else and selecting it will deselect option one
        </label>
        </div>
        <button class="btn btn-danger col-lg-6" type="submit">ok</button>
    </div>
    </form>
    <?printf("%s", $a);?>
    <b>"<?printf("%s", $b);?>"</b><br>
</body>
</html>