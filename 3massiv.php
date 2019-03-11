
 <?
    $arr=function($first,$second,$third){
        
        return array_merge($first, $second, $third);
    };

    $ansver = $arr([1,2,3],[4,5,6],[7,8,9]);
    foreach($ansver as $show){
       echo $show. " ";
    }  
?>