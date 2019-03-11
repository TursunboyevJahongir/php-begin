 <?
   $arr=function($first,$second){
    $ans=[];
    $cnt=0;
    foreach($first as $i => $f)
    {     
        foreach($second as $j => $s)
        {
            if ($i == $j)
            {
                $ans[$cnt++]=$first[$i]+$second[$j];
                $first[$i]=false;
                $second[$j]=false;
            }
        }
    }
    foreach($first as $f){
        if($f){ $ans[$cnt++]=$f;}
    }
    foreach($second as $s){
        if($s){$ans[$cnt++]=$s;}
    }
    return $ans;
};
$ansver = $arr(['one'=>1,'two'=>2,'three'=>3],['two'=>4,'five'=>5,'one'=>6]);
    foreach($ansver as $show){
        echo $show. " ";
     } 
?>