<!DOCTYPE html>
<html lang ="ja">
<head>
<meta charset="UTF-8">
<title>不動産管理</title>
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

try
{

  $real_code=$_GET['realcode'];

  $dsn='mysql:dbname=php_shop;host=localhost;charset=utf8';
  $user='root';
  $password='';
  $dbh=new PDO($dsn,$user,$password);
  $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

  $sql='SELECT post1,post2,gazou,address,traffic1,station1,min1,traffic2,station2,min2,yachin,kanri,shiki,rei,hosho,shikibiki,shokyaku,sonpo,sonpoyear,madori,menseki,kozo,tikunen1,tikunen2,floor1,floor2,hoi,ziki,torihiki,setsubi,chukai,naikan1_name,naikan2_name,naikan3_name,naikan4_name FROM mst_product WHERE code=?';
  $stmt=$dbh->prepare($sql);
  $data[]=$real_code;
  $stmt->execute($data);

  $rec=$stmt->fetch(PDO::FETCH_ASSOC);

  $real_post1=$rec['post1'];
  $real_post2=$rec['post2'];
  $real_gazou_name=$rec['gazou'];

  $real_address=$rec['address'];
  $real_traffic1=$rec['traffic1'];
  $real_station1=$rec['station1'];
  $real_min1=$rec['min1'];
  $real_traffic2=$rec['traffic2'];
  $real_station2=$rec['station2'];
  $real_min2=$rec['min2'];
  $real_yachin=$rec['yachin'];
  $real_kanri=$rec['kanri'];
  $real_shiki=$rec['shiki'];
  $real_rei=$rec['rei'];
  $real_hosho=$rec['hosho'];
  $real_shikibiki=$rec['shikibiki'];
  $real_shokyaku=$rec['shokyaku'];
  $real_sonpo=$rec['sonpo'];
  $real_sonpoyear=$rec['sonpoyear'];
  $real_madori=$rec['madori'];
  $real_menseki=$rec['menseki'];
  $real_kozo=$rec['kozo'];
  $real_tikunen1=$rec['tikunen1'];
  $real_tikunen2=$rec['tikunen2'];
  $real_floor1=$rec['floor1'];
  $real_floor2=$rec['floor2'];
  $real_hoi=$rec['hoi'];
  $real_ziki=$rec['ziki'];
  $real_torihiki=$rec['torihiki'];
  $real_setsubi=$rec['setsubi'];
  $real_chukai=$rec['chukai'];
  $real_naikan1_name=$rec['naikan1_name'];
  $real_naikan2_name=$rec['naikan2_name'];
  $real_naikan3_name=$rec['naikan3_name'];
  $real_naikan4_name=$rec['naikan4_name'];


  $dbh=null;



  if($real_gazou_name=='') //=が２つないとエラーになる。
  {
    $disp_gazou1='';
  }else{
    $disp_gazou1='<img src="./img/'.$real_gazou_name.'" style="width:200px;">';
  }

  if($real_naikan1_name=='') //=が２つないとエラーになる。
  {
    $disp_gazou2='';
  }else{
    $disp_gazou2='<img src="./img/'.$real_naikan1_name.'" style="width:200px;">';
  }

  if($real_naikan2_name=='') //=が２つないとエラーになる。
  {
    $disp_gazou3='';
  }else{
    $disp_gazou3='<img src="./img/'.$real_naikan2_name.'">';
  }

  if($real_naikan3_name=='') //=が２つないとエラーになる。
  {
    $disp_gazou4='';
  }else{
    $disp_gazou4='<img src="./img/'.$real_naikan3_name.'">';
  }

  if($real_naikan4_name=='') //=が２つないとエラーになる。
  {
    $disp_gazou5='';
  }else{
    $disp_gazou5='<img src="./img/'.$real_naikan4_name.'">';
  }

}

catch(Exception $e){
  print 'ただいま障害により大変ご迷惑をお掛けしております。';
  exit();
}
 ?>








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
          <ul>

          </ul>
        </div>
    </div>
    </div>
  </div>
  <!--//ヘッダーメニュー-->

<div class="boxB">



  <div class="side" style="margin-right:20px">
    <?php print $disp_gazou1; ?>
  </div>

  <div class="info1">
    <table>
      <tr>
        <td id="kuro">住　所 :</td>
        <td><span>〒</span><?php print $real_post1; ?>-<?php print $real_post2; ?>
        <?php print $real_address; ?>
        </td>
      </tr>
    </table>

    <table>
      <tr>
        <td id="kuro">交　通 :</td><td id="trafficLine1"><?php print $real_traffic1; ?></td>
        <td><?php print $real_station1; ?></td>
        <td>駅まで　</td><td id="trafficDistance1">徒歩<?php print $real_min1; ?> 分</td>
      </tr>

      <tr>
        <td>　　　</td><td id="trafficLine2"><?php print $real_traffic2; ?></td><td id="trafficStation2"><?php print $real_station2; ?></td>
        <td>駅まで　</td><td id="trafficDistance2">徒歩<?php print $real_min2;?>分</td>      </tr>

    </table>
  </div>





  <div class="info2">
      <ul class="firstLine">
        <li>家　賃 :<span> </span><span><?php print $real_yachin; ?></span><span>万円</span></li>
        <li>管理費 :<span> </span><span><?php print $real_kanri; ?></span><span>万円</span></li>
        <li>敷　金 :<span> </span><span><?php print $real_shiki; ?></span><span>ヶ月</span></li>
        <li>礼　金 :<span> </span><span><?php print $real_rei; ?></span><span>ヶ月</span></li>
        <li>保証金 :<span> </span><span><?php print $real_hosho; ?></span><span></span></li>
        <li>敷　引 :<span> </span><span><?php print $real_shikibiki; ?></span><span></span></li>
        <li>償　却 :<span> </span><span><?php print $real_shokyaku; ?></span><span></span></li>
        <li>損　保 :<span> </span><span><?php print $real_sonpo; ?></span><span>万円/</span>
        <span id="insuranceYear"><?php print $real_sonpoyear; ?></span><span>年</span></li>
      </ul>
  </div>


<div class="info3">
  <ul class="secondLine">
    <li>間取り　 :<span> </span><span><?php print $real_madori; ?>K</span></li>
    <li>専有面積 :<span> </span><span><?php print $real_menseki; ?></span><span>㎡</span></li>
    <li>構　造　 :<span> </span><span><?php print $real_kozo; ?></span><span>造</span></li>
    <li>築年数　 :<span> </span><span><?php print $real_tikunen1; ?></span><span>/</span>
                  <span id="buildMonth"><?php print $real_tikunen2; ?></span></li>

    <li>階　　数 :<span> </span><span><?php print $real_floor1; ?></span><span>階</span><span>/</span>
                  <span><?php print $real_floor2; ?></span><span>階建</span></li>
    <li>方　　位 :<span> </span><span><?php print $real_hoi; ?></span><span></span></li>
    <li>入居時期 :<span> </span><span><?php print $real_ziki; ?></span>
    <li>取　引　 :<span> </span><span><?php print $real_torihiki; ?></span>
  </ul>
</div>


<div class="info4">
  <ul class="thirdLine">
    <!--roomFacilityは黒字-->
    <div id="roomFacility">
        <li>部屋の設備</li>
        <li>
          <?php print $real_setsubi; ?>
        </li>

    </div>

    <!--改行-->
    <li><br></li>

    <li>仲介手数料 :<span> </span><span><?php print $real_chukai; ?></span><span>ヶ月</span></li>



  </ul>
</div>


  <!--写真タイトル-->
  <div class="photoGallery1">
      <h2>Photo Gallery</h2>
  </div>


  <!--1列目写真-->
  <div class="photoGallery2">
      <table>
        <tr>

        <!-- 内観１ -->
          <td class="naikan">
            <?php print $disp_gazou2; ?></td>

        <!-- 内観２ -->
          <td class="naikan">
            <?php print $disp_gazou3; ?></td>


        <!-- 内観３ -->
          <td class="naikan">
            <?php print $disp_gazou4; ?></td>

          <!-- 内観４ -->
          <td class="naikan">
            <?php print $disp_gazou5; ?></td>

        </tr>
      </table>
  </div>




<!--地図へ戻る-->
  <div class="photoGallery3">
    <div class="bottomLine">
        <input type="button" onclick="history.back()" value="戻る" style="float:left;">
   </div>


<!--写真2列目-->



</div>
</div>






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
