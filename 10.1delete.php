<?php
    error_reporting();
    $conn=mysqli_connect("localhost","root","","mydb");//$conn :mysqli數據庫服務氣的連接 localhost,root, mydb
    // delete from bulletin where bid=???
    $sql="delete from bulletin where bid={$_GET[bid]}";
    //echo $sql;
    if (!mysqli_query($conn, $sql))   //mysqli數據庫服務氣的連接conn,sq1
        echo "刪除錯誤";
    else{
        echo "刪除成功；回前頁中...";
        echo "<meta http-equiv='refresh' content='3;url=bulletin.php'>"; //則使用bulletin.php
    }
?>