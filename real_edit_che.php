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


//画像ファイル
$real_gazou=$_FILES['gazou'];
$real_naikan1=$_FILES['naikan1'];
$real_naikan2=$_FILES['naikan2'];
$real_naikan3=$_FILES['naikan3'];
$real_naikan4=$_FILES['naikan4'];










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
    <?php if($real_gazou['size']>0){
          if($real_gazou['size']>1000000){
            print '画像が大きすぎます。';
          }else{
            move_uploaded_file($real_gazou['tmp_name'],'./img/'.$real_gazou['name']);
            print '<img src="./img/'.$real_gazou['name'].'" style="width:200px;">';
          }
        }
     ?>
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
            <?php
            if($real_naikan1['size']>0){
              if($real_naikan1['size']>1000000){
                print '画像が大きすぎます。';
              }else{
                move_uploaded_file($real_naikan1['tmp_name'],'./img/'.$real_naikan1['name']);
                print '<img src="./img/'.$real_naikan1['name'].'" style="width:150px;">';
              }
            }
            ?></td>

        <!-- 内観２ -->
          <td class="naikan">
            <?php
              if($real_naikan2['size']>0){
                if($real_naikan2['size']>1000000){
                  print '画像が大きすぎます。';
                }else{
                  move_uploaded_file($real_naikan2['tmp_name'],'./img/'.$real_naikan2['name']);
                  print '<img src="./img/'.$real_naikan2['name'].'" style="width:150px;">';
                }
              }
              ?> </td>

        <!-- 内観３ -->
          <td class="naikan">
            <?php
            if($real_naikan3['size']>0){
              if($real_naikan3['size']>1000000){
                print '画像が大きすぎます。';
              }else{
                move_uploaded_file($real_naikan3['tmp_name'],'./img/'.$real_naikan3['name']);
                print '<img src="./img/'.$real_naikan3['name'].'" style="width:150px;">';
              }
            }
             ?></td>

          <!-- 内観４ -->
          <td class="naikan">
            <?php
            if($real_naikan4['size']>0){
              if($real_naikan4['size']>1000000){
                print '画像が大きすぎます。';
              }else{
                move_uploaded_file($real_naikan4['tmp_name'],'./img/'.$real_naikan4['name']);
                print '<img src="./img/'.$real_naikan4['name'].'" style="width:150px;">';
              }
            }
             ?>


            </td>
        </tr>
      </table>
  </div>




<!--地図へ戻る-->
  <div class="photoGallery3">
    <h3>上記の情報で更新しますか？</h3>
    <div class="bottomLine">
      <table>
        <?php
      	print '<form method="post" action="real_edit_do.php">';
        print '<input type="hidden" name="code" value="'.$real_code.'">';
      	print '<input type="hidden" name="post1" value="'.$real_post1.'">';
      	print '<input type="hidden" name="post2" value="'.$real_post2.'">';
        print '<input type="hidden" name="gazou_name" value="'.$real_gazou['name'].'">';
        print '<input type="hidden" name="address" value="'.$real_address.'">';
        print '<input type="hidden" name="traffic1" value="'.$real_traffic1.'">';
        print '<input type="hidden" name="station1" value="'.$real_station1.'">';
        print '<input type="hidden" name="min1" value="'.$real_min1.'">';
        print '<input type="hidden" name="traffic2" value="'.$real_traffic2.'">';
        print '<input type="hidden" name="station2" value="'.$real_station2.'">';
        print '<input type="hidden" name="min2" value="'.$real_min2.'">';
        print '<input type="hidden" name="yachin" value="'.$real_yachin.'">';
        print '<input type="hidden" name="kanri" value="'.$real_kanri.'">';
        print '<input type="hidden" name="shiki" value="'.$real_shiki.'">';
        print '<input type="hidden" name="rei" value="'.$real_rei.'">';
        print '<input type="hidden" name="hosho" value="'.$real_hosho.'">';
        print '<input type="hidden" name="shikibiki" value="'.$real_shikibiki.'">';
        print '<input type="hidden" name="shokyaku" value="'.$real_shokyaku.'">';
        print '<input type="hidden" name="sonpo" value="'.$real_sonpo.'">';
        print '<input type="hidden" name="sonpoyear" value="'.$real_sonpoyear.'">';
        print '<input type="hidden" name="madori" value="'.$real_madori.'">';
        print '<input type="hidden" name="menseki" value="'.$real_menseki.'">';
        print '<input type="hidden" name="kozo" value="'.$real_kozo.'">';
        print '<input type="hidden" name="tikunen1" value="'.$real_tikunen1.'">';
        print '<input type="hidden" name="tikunen2" value="'.$real_tikunen2.'">';
        print '<input type="hidden" name="floor1" value="'.$real_floor1.'">';
        print '<input type="hidden" name="floor2" value="'.$real_floor2.'">';
        print '<input type="hidden" name="hoi" value="'.$real_hoi.'">';
        print '<input type="hidden" name="ziki" value="'.$real_ziki.'">';
        print '<input type="hidden" name="torihiki" value="'.$real_torihiki.'">';
        print '<input type="hidden" name="setsubi" value="'.$real_setsubi.'">';
        print '<input type="hidden" name="chukai" value="'.$real_chukai.'">';
        print '<input type="hidden" name="naikan1_name" value="'.$real_naikan1['name'].'">';
        print '<input type="hidden" name="naikan2_name" value="'.$real_naikan2['name'].'">';
        print '<input type="hidden" name="naikan3_name" value="'.$real_naikan3['name'].'">';
        print '<input type="hidden" name="naikan4_name" value="'.$real_naikan4['name'].'">';


      	print  '<tr>';
      	print '<td><input type="button" onclick="history.back()" value="戻る" style="margin-right:15px;"></td>';
      	print '<td><input type="submit" value="更新する"></td>';
        print '</tr>';
      	print '</form>';

         ?>

      </table>
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
