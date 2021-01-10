<?php 
    error_reporting(0);
    $conn = mysqli_connect("localhost", "root", "", "mydb");//$conn :mysqli數據庫服務氣的連接 localhost,root, mydb
    if (mysqli_connect_error($conn))                        //如果mysqli_connect_error是錯誤
      die("無法連線資料庫");
    $sql="select * from bulletin where bid = {$_GET['bid']}"; 
    //echo $sql;
    $result=mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($result);
   
echo "
<html>
<head><title>修改佈告</title></head>
<body>
  <h2>修改佈告</h2>
  <form action='bulletin_edit.php' method='post'>
    <input type=hidden name=bid value=$row[bid]>
    佈告標題：<input  type='text' name='title' size=200 value='$row[title]'><p>      
    佈告內容：<p>
    <textarea rows='20' cols='100' name='content'>$row[content]</textarea> 
    <p>
    佈告類型：<p>
    <input name='type' value='1' ";//以type' value='1'
    if ($row['type']==1) echo "checked ";//檢查
    echo "type='radio'>系上公告     
    <input name='type' value='2' "; //以type' value='2'
    if ($row['type']==2) echo "checked  ";//檢查
    echo "type='radio'>招生訊息 
    <input name='type' value='3' "; //以type' value='3'
    if ($row['type']==3) echo "checked ";//檢查
    echo "type='radio'>企業徵才<p>      
    發佈時間：<input type=date name='time' value=$row[time]><p>      
    <input type=submit>

  </form>

</body>
</html>
"; 
?>
