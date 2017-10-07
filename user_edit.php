<!DOCTYPE html>
<html lang ="ja">
<head>
<meta charset="UTF-8">
<title>ユーザー管理</title>
<meta name="viewport" content="width=device-width">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
<link rel="stylesheet" href="detail2.css">
<link rel="stylesheet" href="jQuery-Validation-Engine-master/css/validationEngine.jquery.css" type="text/css"/>
<script src="jQuery-Validation-Engine-master/js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="jQuery-Validation-Engine-master/js/languages/jquery.validationEngine-ja.js" type="text/javascript" charset="utf-8"></script>
<script src="jQuery-Validation-Engine-master/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>

</head>

<body>

  <?php

  $user_code=$_GET['usercode'];

  // $user_yaku=$_POST['yaku'];
  // $user_comment=$_POST['comment'];
  // $user_name=htmlspecialchars($user_name);
  // $user_yaku=htmlspecialchars($user_yaku);
  // $user_comment=htmlspecialchars($user_comment);


  $dsn='mysql:dbname=gs_db14;host=localhost;charset=utf8';
  $user='root';
  $password='';
  $dbh=new PDO($dsn,$user,$password);
  $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);



  $sql='SELECT name,lid,lpw FROM gs_user_table WHERE id=?';
  $stmt=$dbh->prepare($sql);
  $data[]=$user_code;
  $stmt->execute($data);

  $rec=$stmt->fetch(PDO::FETCH_ASSOC);
  $user_name=$rec['name'];
  $user_yaku=$rec['lid'];
  $user_comment=$rec['lpw'];

  $dbh=null;



   ?>




<div class="boxA">

  <!--トップ-->
      <div class="boxA-inner">
      <div class="box1">
        <div class="site">
        </div>
      </div>
  <!--//トップ-->

    <!--ヘッダーメニュー-->
    <div class="box2">
        <div class="menu">
          <ul>

          </ul>
        </div>
    </div>
    </div>
  </div>
  <!--//ヘッダーメニュー-->

<div class="boxB">








<!--地図へ戻る-->
  <div class="photoGallery3">




    <div class="bottomLine">
      <form method="post" action="user_edit_do.php">
      <p>名前:<input type="text" name="name" style="font-size:16px;width:190px;" class="validate[required]" value="<?php print $user_name; ?>"></p>
      <span>役職:<input type="text" name="yaku" style="font-size:16px;width:150px;" class="validate[optional]" value="<?php print $user_yaku; ?>"></span>
      <p>一言:<input type="text" name="comment" style="font-size:16px;width:190px;" class="validate[optional]" value="<?php print $user_comment; ?>"></p>
      <input type="hidden" name="code" value="<?php print $user_code; ?>" >

      <br>
      <p style="font-weight:bold;">上記の社員を更新しますか？</p>





  <table>
    <tr>
      <td><input type="button" onclick="history.back()" value="戻る" ></td>
      <td><input type="submit" value="更新する"></td>

    </tr>
  </table>

   </div>

</div>
</div>


</form>




<!--コピーライト-->
  <div class="box6">
    <div class="box6-inner">
    <div class="copyright">
      <p>Copyright &copy; enjoy</p>
    </div>
    </div>
 </div>


 <script type="text/javascript">
 jQuery(document).ready(function(){
    jQuery("#real").validationEngine();
 });
 </script>



</body>

</html>
