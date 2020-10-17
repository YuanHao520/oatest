<?php
  //冒泡排序
$arr = [1,4,22,11,555,23];
function bubbleSort($arr){
    $length = count($arr);
    for($i=0;$i<$length;$i++){
        for($j=$length-1;$j>=$i;$j--){
            if($arr[$j] < $arr[$j-1]){
                $iTemp = $arr[$j];
                $arr[$j] = $arr[$j-1];
                $arr[$j - 1] = $iTemp;
            }
        }
    }
    return $arr;
}
    print_r(bubbleSort($arr));