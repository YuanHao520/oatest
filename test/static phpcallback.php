<?php
    //回调函数 call_user_func_array()
    function Speak($a,$b){
        echo "He can speak".$a;
        echo "<br>";
        echo "She can speak".$b;
    }
    function Speak_Test(){
        return call_user_func_array('Speak',array('enlish','chinese'));
    }
    Speak_Test();
