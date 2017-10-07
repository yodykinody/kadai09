<!DOCTYPE html>
<html lang ="ja">
<head>
<meta charset="UTF-8">
<title>不動産管理</title>
<meta name="viewport" content="width=device-width">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
<link rel="stylesheet" href="detail2.css">
</head>
<body>
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

	        </div>
	    </div>
	    </div>
	  </div>

		<div class="boxB">



<?php

try
{
$real_code=$_POST['code'];

$real_post1=$_POST['post1'];
$real_post2=$_POST['post2'];
$real_address=$_POST['address'];
$real_traffic1=$_POST['traffic1'];
$real_station1=$_POST['station1'];
$real_min1=$_POST['min1'];
$real_traffic2=$_POST['traffic2'];
$real_station2=$_POST['station2'];
$real_min2=$_POST['min2'];
$real_yachin=$_POST['yachin'];
$real_kanri=$_POST['kanri'];
$real_shiki=$_POST['shiki'];
$real_rei=$_POST['rei'];
$real_hosho=$_POST['hosho'];
$real_shikibiki=$_POST['shikibiki'];
$real_shokyaku=$_POST['shokyaku'];
$real_sonpo=$_POST['sonpo'];
$real_sonpoyear=$_POST['sonpoyear'];
$real_madori=$_POST['madori'];
$real_menseki=$_POST['menseki'];
$real_kozo=$_POST['kozo'];
$real_tikunen1=$_POST['tikunen1'];
$real_tikunen2=$_POST['tikunen2'];
$real_floor1=$_POST['floor1'];
$real_floor2=$_POST['floor2'];
$real_hoi=$_POST['hoi'];
$real_ziki=$_POST['ziki'];
$real_torihiki=$_POST['torihiki'];
$real_setsubi=$_POST['setsubi'];
$real_chukai=$_POST['chukai'];

$real_gazou=$_POST['gazou_name'];
$real_naikan1=$_POST['naikan1_name'];
$real_naikan2=$_POST['naikan2_name'];
$real_naikan3=$_POST['naikan3_name'];
$real_naikan4=$_POST['naikan4_name'];

$timedate=date("Y/n/j G:i:s",time());


$real_post1=htmlspecialchars($real_post1);
$real_post2=htmlspecialchars($real_post2);
$real_address=htmlspecialchars($real_address);
$real_traffic1=htmlspecialchars($real_traffic1);
$real_station1=htmlspecialchars($real_station1);
$real_min1=htmlspecialchars($real_min1);
$real_traffic2=htmlspecialchars($real_traffic2);
$real_station2=htmlspecialchars($real_station2);
$real_min2=htmlspecialchars($real_min2);
$real_yachin=htmlspecialchars($real_yachin);
$real_kanri=htmlspecialchars($real_kanri);
$real_shiki=htmlspecialchars($real_shiki);
$real_rei=htmlspecialchars($real_rei);
$real_hosho=htmlspecialchars($real_hosho);
$real_shikibiki=htmlspecialchars($real_shikibiki);
$real_shokyaku=htmlspecialchars($real_shokyaku);
$real_sonpo=htmlspecialchars($real_sonpo);
$real_sonpoyear=htmlspecialchars($real_sonpoyear);
$real_madori=htmlspecialchars($real_madori);
$real_menseki=htmlspecialchars($real_menseki);
$real_kozo=htmlspecialchars($real_kozo);
$real_tikunen1=htmlspecialchars($real_tikunen1);
$real_tikunen2=htmlspecialchars($real_tikunen2);
$real_floor1=htmlspecialchars($real_floor1);
$real_floor2=htmlspecialchars($real_floor2);
$real_hoi=htmlspecialchars($real_hoi);
$real_ziki=htmlspecialchars($real_ziki);
$real_torihiki=htmlspecialchars($real_torihiki);
$real_setsubi=htmlspecialchars($real_setsubi);
$real_chukai=htmlspecialchars($real_chukai);



$dsn='mysql:dbname=php_shop;host=localhost;charset=utf8';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='UPDATE mst_product SET post1=?,post2=?,gazou=?,address=?,traffic1=?,station1=?,min1=?,traffic2=?,station2=?,min2=?,yachin=?,kanri=?,shiki=?,rei=?,hosho=?,shikibiki=?,shokyaku=?,sonpo=?,sonpoyear=?,madori=?,menseki=?,kozo=?,tikunen1=?,tikunen2=?,floor1=?,floor2=?,hoi=?,ziki=?,torihiki=?,setsubi=?,chukai=?,naikan1_name=?,naikan2_name=?,naikan3_name=?,naikan4_name=?,timedate=? WHERE code=?';

$stmt=$dbh->prepare($sql);
$data[]=$real_post1;
$data[]=$real_post2;
$data[]=$real_gazou;
$data[]=$real_address;
$data[]=$real_traffic1;
$data[]=$real_station1;
$data[]=$real_min1;
$data[]=$real_traffic2;
$data[]=$real_station2;
$data[]=$real_min2;
$data[]=$real_yachin;
$data[]=$real_kanri;
$data[]=$real_shiki;
$data[]=$real_rei;
$data[]=$real_hosho;
$data[]=$real_shikibiki;
$data[]=$real_shokyaku;
$data[]=$real_sonpo;
$data[]=$real_sonpoyear;
$data[]=$real_madori;
$data[]=$real_menseki;
$data[]=$real_kozo;
$data[]=$real_tikunen1;
$data[]=$real_tikunen2;
$data[]=$real_floor1;
$data[]=$real_floor2;
$data[]=$real_hoi;
$data[]=$real_ziki;
$data[]=$real_torihiki;
$data[]=$real_setsubi;
$data[]=$real_chukai;
$data[]=$real_naikan1;
$data[]=$real_naikan2;
$data[]=$real_naikan3;
$data[]=$real_naikan4;
$data[]=$timedate;
$data[]=$real_code;





$stmt->execute($data);

$dbh=null;



}
catch (Exception $e)
{
	print 'ただいま障害により大変ご迷惑をお掛けしております。';
	exit();
}

?>

<div class="photoGallery3">
	<h3>更新しました。</h3>
	<div class="bottomLine">

<table>
	<tr>
		<td><a href="real_list.php">戻る</a></td>

	</tr>
</table>

 </div>

</div>
</div>

<div class="box6">
	<div class="box6-inner">
	<div class="copyright">
		<p>Copyright &copy; enjoy</p>
	</div>
	</div>
</div>


</body>
</html>
