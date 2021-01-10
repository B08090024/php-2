<?php
    session_start();
if (!isset($_SESSION['id'])){   
    echo "請登入系統";
    echo "<meta http-equiv='refresh' content='3;url=index.html''>";  //以refresh' content='3使用index.html
}else{
    $conn = mysqli_connect("localhost", "root", "", "mydb");//$conn :mysqli數據庫服務氣的連接 localhost,root, mydb
    if (mysqli_connect_error($conn))//如果mysqli_connect_error是錯誤
      die("無法連線資料庫");
    $sql="insert into bulletin(title, content, type, time) values ('{$_POST['title']}', '{$_POST['content']}', {$_POST['type']},'{$_POST['time']}')"; 
    //echo $sql;
    if (!mysqli_query($conn, $sql)){
     echo("Error description: " . mysqli_error($conn));   //如果mysqli_connect_error是錯誤
    }
    else  
       echo "新增佈告成功";   
    mysqli_close($conn);
    echo "<meta http-equiv='refresh' content='3;url=bulletin.php''>"; //則使用bulletin.php
}
?>
