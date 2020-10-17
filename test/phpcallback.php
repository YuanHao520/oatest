<?php
    //全局函数回调函数
    function fnCallBack($msg1,$msg2,$msg3){
        echo 'msg1:',$msg1;
        echo "<br />\n";
        echo 'msg2:',$msg2;
        echo "<br />\n";
        echo 'msg2:',$msg3;

    }
    $fnName = "fnCallBack";
    $params = array('hello','world','123');
    call_user_func_array($fnName,$params);