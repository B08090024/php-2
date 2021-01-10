<?php
    error_reporting(0);
    
    $conn = mysqli_connect("localhost","root","", "mydb");//$conn :mysqli數據庫服務氣的連接 localhost,root, mydb
    if (mysqli_connect_error($conn))                      //如果mysqli_connect_error是錯誤
        die("資料庫連線錯誤");                             //參數表示 :資料庫連線錯誤

    mysqli_set_charset($conn, "utf8");                   //如果mysqli_connect_error是utf-8
    $result=mysqli_query($conn, "select * from user");   //$result:取出mysqli從$conn, "select * from user")  符合顯示
    
    $login=FALSE;                                        //登入錯誤
    while ($row=mysqli_fetch_array($result)) {           //如果mysqli_connect_error是錯誤
        if ($_POST["id"] == $row["id"] && $_POST["pwd"]==$row["pwd"]) //如果POST=ID ==ROW==ID&&POST==PWD==ROW=PWD
        $login=TRUE;                                     //登入成功
    }
    
    if  (!$_POST["id"] || !$_POST["pwd"]){                //如果POST==ID||PSIT==PWD
           echo "請輸入帳號/密碼";                          //請輸入帳號及密碼
           echo "<meta http-equiv='refresh' content='3;url=login.html''>";      //使用bulletin.php      
    }
    elseif ($login==TRUE){                                //假如登入成功
      session_start();
      $_SESSION["id"] = $_POST['id'];                     //SESSION=ID=POST=ID
      echo "歡迎登入";                                     
      echo "<meta http-equiv='refresh' content='0;url=bulletin.php''>";  //使用bulletin.php
    }
    else{
      echo "帳號密碼錯誤";                                 //如果密碼錯誤
      echo "<meta http-equiv='refresh' content='3;url=login.html''>";    //使用login.html   
    }
?>