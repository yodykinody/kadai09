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
  $user_name=$_POST['name'];
  $user_yaku=$_POST['yaku'];
  $user_comment=$_POST['comment'];
  $user_name=htmlspecialchars($user_name);
  $user_yaku=htmlspecialchars($user_yaku);
  $user_comment=htmlspecialchars($user_comment);




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
      <p>名前:<?php print $user_name; ?></p>
      <p>役職:<?php print $user_yaku; ?></p>
      <p>一言:<?php print $user_comment; ?></p>
      <br>
      <p style="font-weight:bold;">上記の社員を追加しますか？</p>

      <?php
      print '<form method="post" action="user_add_do.php">';
    	print '<input type="hidden" name="name" value="'.$user_name.'">';
    	print '<input type="hidden" name="yaku" value="'.$user_yaku.'">';
    	print '<input type="hidden" name="comment" value="'.$user_comment.'">';
       ?>



  <table>
    <tr>
      <td><input type="button" onclick="history.back()" value="戻る" ></td>
      <td><input type="submit" value="追加する"></td>

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
