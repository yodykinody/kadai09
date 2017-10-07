<!DOCTYPE html>
<html lang ="ja">
<head>
<meta charset="UTF-8">
<title>不動産管理</title>
<meta name="viewport" content="width=device-width">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
<link rel="stylesheet" href="detail3.css">
<link rel="stylesheet" href="jQuery-Validation-Engine-master/css/validationEngine.jquery.css" type="text/css"/>
<script src="jQuery-Validation-Engine-master/js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="jQuery-Validation-Engine-master/js/languages/jquery.validationEngine-ja.js" type="text/javascript" charset="utf-8"></script>
<script src="jQuery-Validation-Engine-master/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>



</head>
<body>
	<div class="boxA">

	  <!--トップ-->
	      <div class="boxA-inner">
	      <div class="box1">
	        <div class="site">
	          <h1><a href="top.html"><img src="image/img/logo.png"></a></h1>
	        </div>
	      </div>
	  <!--//トップ-->

	    <!--ヘッダーメニュー-->
	    <div class="box2">
	        <div class="menu">

	        </div>
	    </div>
	    </div>
	  </div>

<div class="boxB">

	<?php

	try{

	$dsn='mysql:dbname=gs_db14;host=localhost;charset=utf8';
	$user='root';
	$password='';
	$dbh=new PDO($dsn,$user,$password);
	$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	$sql='SELECT id,name,lid,lpw,kanri_flg,flg FROM gs_user_table WHERE 1';
	// $sql='SELECT * FROM mst_product ORDER BY timedate DESC';
	$stmt=$dbh->prepare($sql);
	$stmt->execute();

	// kanri_flg,flg


	$dbh=null;

	print '<p class="title">管理者一覧</p>';

	print '<form method="post" action="user_branch.php">';

	while(true){
		$rec=$stmt->fetch(PDO::FETCH_ASSOC);

		if($rec==false){
			break;
		}
		print '<input type="radio" name="usercode" value="'.$rec['id'].'">';


		print '名前:'.$rec['name'].'　　';
		print '<input type="hidden" name="kanri_flg" value="'.$rec['kanri_flg'].'">';
		print '<input type="hidden" name="flg" value="'.$rec['flg'].'">';

		print '<br>';

	}

  print '<div class="select">';
	print '<input type="submit" name="add" value="追加">';
	print '<input type="submit" name="edit" value="修正">';
	print '<input type="submit" name="delete" value="削除">';
	print '<input type="submit" name="kanri" value="物件管理">';
	print '</form>';
	print '</div>';
}
	catch(Exception $e){
		print 'ただいま障害により大変ご迷惑をお掛けしております。';
		exit();
	}

	 ?>









</div>

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
