<?
    $arr=array('birinchi' => 'Jahongir','Alisher','Umid');
for($i=0;$i<3;$i++){
    // echo "Name:{$arr[$i]}<br>";
}
// foreach($arr as $key)
//      echo "Name:{$key}<br>";
foreach($arr as $key =>$new){
    echo $key;
    echo "::";
    echo "Name:".$new;
    echo "<br>";
}
?>