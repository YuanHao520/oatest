<?php
//插入排序
$arr = [1,4,22,11,555,23];
function bubbleSort($arr){
    $length = count($arr);
    for($i=1;$i<$length;$i++){
        $iTemp = $arr[$i];
        $iPos = $i - 1;
        while(($iPos >= 0) && ($iTemp < $arr[$iPos])){
            $arr[$iPos+1] = $arr[$iPos];
            $iPos--;
        }
        $arr[$iPos+1] = $iTemp;
    }
    return $arr;
}
print_r(bubbleSort($arr));
