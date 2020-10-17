<?php
//类静态回调函数 call_user_func_array()
namespace gakki;
class Speaking{
    static function Speak($a,$b){
        echo "He can speak ".$a;
        echo "<br />";
        echo "She can speak ".$b;
        echo "<br />";
    }
}

class Writting{
    function Write($a,$b){
        echo "He can Write".$a;
        echo "<br />";
        echo "She can write".$b;
    }
}

call_user_func_array(array(Speaking::class,'Speak'),array('english','chinese'));
call_user_func_array(array(new Writting(),'Write'),array('english','chinese'));

