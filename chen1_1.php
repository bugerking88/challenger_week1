<?php
header("Content-Type: text/html; charset=utf-8");
$origin = array(
array(1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
array(1, 1, 0, 1, 1, 0, 0, 0, 0, 0),
array(0, 0, 0, 1, 1, 0, 0, 0, 0, 0),
array(0, 0, 0, 0, 0, 1, 1, 1, 0, 0),
array(1, 1, 1, 1, 1, 0, 0, 0, 0, 0),
array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
array(1, 1, 1, 0, 1, 0, 1, 1, 1, 1),
array(1, 0, 0, 0, 1, 0, 1, 1, 1, 1),
array(1, 0, 0, 0, 1, 0, 1, 1, 1, 1),
array(1, 1, 0, 1, 1, 0, 0, 0, 0, 1)
);
//預備陣列array
for($a=0;$a<10;$a++){
    for($b=0;$b<10;$b++){
        $array[$a][$b] ="0";
    }
}
//最大陣列MAXarray
for($a=0;$a<10;$a++){
    for($b=0;$b<10;$b++){
        $MAXarray[$a][$b] ="0";
    }
}
   $MAXnum=0;//最大相鄰數量
    for($i=0;$i<10;$i++){
        for($j=0;$j<10;$j++){
//判斷最大陣列裡是否有值
            if($origin[$i][$j] && !$MAXarray[$i][$j]){
                $array[$i][$j] = $origin[$i][$j];//丟到預備陣列
                $n =search($i,$j)+1;
//預備陣列數>最大陣列數 則取代
              if($MAXnum < $n){
                    $MAXarray =$array;
                    $MAXnum=$n;
                }
//預設陣列歸零
                    for($a=0;$a<10;$a++){
                        for($b=0;$b<10;$b++){
                            $array[$a][$b] ="0";
                        }
                    }
                }
            }
        }
//印出最大陣列
          foreach($MAXarray as $a){
                    foreach($a as $result){
                        echo $result." ";
                    } echo "<br>";
          }   echo "<br>總共個數",$MAXnum;
    
//丟值給預設陣列 && num+1
    function search($i,$j){
        global $origin,$array;
            if($origin[$i+1][$j] && !$array[$i+1][$j]){//下
                $array[$i+1][$j] = $origin[$i+1][$j];
                $num++;
                $num += search($i+1,$j);
            };
            if($origin[$i][$j+1] && !$array[$i][$j+1]){//右
                $array[$i][$j+1] = $origin[$i][$j+1];
                $num++;
                $num +=search($i,$j+1);
            };
            if($origin[$i-1][$j] && !$array[$i-1][$j]){//上
                $array[$i-1][$j] = $origin[$i-1][$j];
                $num++;
                $num +=search($i-1,$j);
            };
            if($origin[$i][$j-1] && !$array[$i][$j-1]){//左
                $array[$i][$j-1] = $origin[$i][$j-1];
                $num++;
                $num +=search($i,$j-1);
            };
            return $num;
    }
  
?>