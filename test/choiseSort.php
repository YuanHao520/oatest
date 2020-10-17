<?php
    //插入排序
    $arr = [1,4,22,11,555,23];
    function choiseSort($arr){
        $length = count($arr);
        for($i = 0;$i < $length - 1;$i++){
            //暂存当前值
            $iTemp = $arr[$i];
            //暂存当前位置
            $iPos = $i;
            for($j = $i + 1;$j < $length;$j++){
                if($arr[$j] < $iTemp){
                    $iTemp = $arr[$j];
                    $iPos = $j;
                }
            }
            //把算好的值赋值到算好的位置
            $arr[$iPos]  = $arr[$i];
            $arr[$i] = $iTemp;
        }
        return $arr;
    }

    print_r(choiseSort($arr));