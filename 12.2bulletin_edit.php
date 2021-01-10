<?php
    session_start();
if (!isset($_SESSION['id'])){   
    echo "請登入系統";
    echo "<meta http-equiv='refresh' content='3;url=index.html''>"; //以refresh' content='3使用index.html
}else{
    $conn = mysqli_connect("localhost", "root", "", "mydb");//$conn :mysqli數據庫服務氣的連接 localhost,root, mydb
    if (mysqli_connect_error($conn))                        //如果mysqli_connect_error是錯誤
      die("無法連線資料庫");
    $sql = "update bulletin set title='{$_POST['title']}', content='{$_POST['content']}', type={$_POST['type']}, time='{$_POST['time']}' where bid={$_POST['bid']}"; 
    //echo $sql; 以上面的程式用的話
    if (!mysqli_query($conn, $sql)){
     echo("Error description: " . mysqli_error($conn));  //如果mysqli_connect_error是錯誤 
    }
    else  
       echo "修改成功";   
    mysqli_close($conn);
    echo "<meta http-equiv='refresh' content='3;url=bulletin.php''>"; //則使用bulletin.php
}
?>
