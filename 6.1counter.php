<?php
    error_reporting(0);
    session_start();
    if (!isset($_SESSION["counter1"])){   //使用ISSET讀取SEEESION中的COUNTER1
        $_SESSION["counter1"]=1;          //SEEION 中CIUNTER1=1
    }else{                                //如果不是
        $_SESSION["counter1"]++;          //使COUNTER1=繼續往上增加
    }
    echo "登入{$_SESSION["counter1"]}人次"; //登入SEEION[COUNTER]人數
?>