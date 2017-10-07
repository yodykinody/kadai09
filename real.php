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
            <li><a href=""><img src="image/img/room.png"></a></li>
            <li><a href=""><img src="image/img/money.png"></a></li>
            <li><a href=""><img src="image/img/station.png"></a></li>
            <li><a href=""><img src="image/img/map.png"></a></li>
          </ul>
        </div>
    </div>
    </div>
  </div>
  <!--//ヘッダーメニュー-->

<div class="boxB">



<form method="post" action="real_add_che.php" enctype="multipart/form-data" id="real">
  <div class="side" style="border:2px solid #ddd;width:220px;margin-right:20px">
    <span style="padding-top:20px;">外観の画像を選んで下さい。</span>
    <input type="file" name="gazou" style="width:400px"><br>
  </div>

  <div class="info1">
    <table>
      <tr>
        <td id="kuro">住　所 :</td>
        <td><span>〒</span><input type="text" name="post1" maxlength="3" style="width:35px;font-size:16px;" class="validate[required,custom[number]]"> − <input type="text" name="post2" maxlength="4" style="width:40px;font-size:16px;" class="validate[required,custom[number]]">
        <input type="text" name="address" style="width:300px;font-size:16px;" class="validate[required]">
        </td>
      </tr>
    </table>

    <table>
      <tr>
        <td id="kuro">交　通 :</td><td id="trafficLine1"><input type="text" name="traffic1"  style="width:90px;font-size:16px;" class="validate[required]"></td>
        <td><input type="text" name="station1"  style="width:100px;font-size:16px;" class="validate[required]"></td>
        <td>駅まで　</td><td id="trafficDistance1">徒歩<input type="text" name="min1" maxlength="2" style="width:20px;font-size:16px;" class="validate[required,custom[number]]"> 分</td>
      </tr>

      <tr>
        <td>　　　</td><td id="trafficLine2"><input type="text" name="traffic2"  style="width:90px;font-size:16px;" class="validate[required]"></td><td id="trafficStation2"><input type="text" name="station2"  style="width:100px;font-size:16px;" class="validate[required]"></td>
        <td>駅まで　</td><td id="trafficDistance2">徒歩<input type="text" name="min2" maxlength="2" style="width:20px;font-size:16px;" class="validate[required,custom[number]]">分</td>      </tr>

    </table>
  </div>






  <div class="info2">
      <ul class="firstLine">
        <li>家　賃 :<span> </span><span><input type="text" name="yachin" maxlength="4" style="width:25px;font-size:16px;" class="validate[required,custom[number]]"></span><span>万円</span></li>
        <li>管理費 :<span> </span><span><input type="text" name="kanri" maxlength="3" style="width:25px;font-size:16px;" class="validate[required,custom[number]]"></span><span>万円</span></li>
        <li>敷　金 :<span> </span><span><input type="text" name="shiki" maxlength="2" style="width:25px;font-size:16px;" class="validate[required,custom[number]]"></span><span>ヶ月</span></li>
        <li>礼　金 :<span> </span><span><input type="text" name="rei" maxlength="2" style="width:25px;font-size:16px;" class="validate[required,custom[number]]"></span><span>ヶ月</span></li>
        <li>保証金 :<span> </span><span><input type="text" name="hosho" maxlength="2" style="width:25px;font-size:16px;" class="validate[optional,custom[number]]"></span><span></span></li>
        <li>敷　引 :<span> </span><span><input type="text" name="shikibiki" maxlength="2" style="width:25px;font-size:16px;" class="validate[optional,custom[number]]"></span><span></span></li>
        <li>償　却 :<span> </span><span><input type="text" name="shokyaku" maxlength="2" style="width:25px;font-size:16px;" class="validate[optional,custom[number]]"></span><span></span></li>
        <li>損　保 :<span> </span><span><input type="text" name="sonpo" maxlength="4" style="width:25px;font-size:16px;" class="validate[optional,custom[number]]"></span><span>万円/</span>
        <span id="insuranceYear"><input type="text" name="sonpoyear" maxlength="2" style="width:25px;font-size:16px;" class="validate[optional,custom[number]]"></span><span>年</span></li>
      </ul>
  </div>


<div class="info3">
  <ul class="secondLine">
    <li>間取り　 :<span> </span><span><input type="text" name="madori" maxlength="2" style="width:25px;font-size:16px;" class="validate[required,custom[number]]">K</span></li>
    <li>専有面積 :<span> </span><span><input type="text" name="menseki" maxlength="6" style="width:50px;font-size:16px;" class="validate[required,custom[number]]"></span><span>㎡</span></li>
    <li>構　造　 :<span> </span><span><input type="text" name="kozo" style="width:50px;font-size:16px;" class="validate[required]">
</span><span>造</span></li>
    <li>築年数　 :<span> </span><span><input type="text" name="tikunen1" maxlength="4" style="width:50px;font-size:16px;" class="validate[required,custom[number]]"></span><span>/</span>
                  <span id="buildMonth"><input type="text" name="tikunen2" maxlength="2" style="width:25px;font-size:16px;" class="validate[required,custom[number]]"></span></li>

    <li>階　　数 :<span> </span><span><input type="text" name="floor1" maxlength="2" style="width:25px;font-size:16px;" class="validate[required,custom[number]]"></span><span>階</span><span>/</span>
                  <span><input type="text" name="floor2" maxlength="2" style="width:25px;font-size:16px;" class="validate[required,custom[number]]"></span><span>階建</span></li>
    <li>方　　位 :<span> </span><span><input type="text" name="hoi" maxlength="1" style="width:25px;font-size:16px;" class="validate[required]"></span><span></span></li>
    <li>入居時期 :<span> </span><span><input type="text" name="ziki" maxlength="2" style="width:40px;font-size:16px;" class="validate[optional]"></span>
    <li>取　引　 :<span> </span><span><input type="text" name="torihiki" maxlength="2" style="width:40px;font-size:16px;" class="validate[optional]"></span>
  </ul>
</div>


<div class="info4">
  <ul class="thirdLine">
    <!--roomFacilityは黒字-->
    <div id="roomFacility">
        <li>部屋の設備</li>
        <li>
          <textarea name="setsubi" rows="4" cols="40"></textarea>
        </li>

    </div>

    <!--改行-->
    <li><br></li>

    <li>仲介手数料 :<span> </span><span><input type="text" name="chukai" maxlength="3" style="width:25px;font-size:16px;" class="validate[required,custom[number]]"></span><span>ヶ月</span></li>



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
          <td class="naikan"><span>内観1の写真を選んで下さい。</span><br>
            <input type="file" name="naikan1" style="width:200px;margin-right:20px;"></td>
          <td class="naikan"><span>内観2の写真を選んで下さい。</span><br>
            <input type="file" name="naikan2" style="width:200px;margin-right:20px;"></td>
          <td class="naikan"><span>内観3の写真を選んで下さい。</span><br>
            <input type="file" name="naikan3" style="width:200px;margin-right:20px;"></td>
          <td class="naikan"><span>内観4の写真を選んで下さい。</span><br>
            <input type="file" name="naikan4" style="width:200px;margin-right:20px;"></td>
        </tr>
      </table>
  </div>




<!--地図へ戻る-->
  <div class="photoGallery3">
    <div class="bottomLine">

  <table>
    <tr>
      <td><input type="button" onclick="history.back()" value="戻る" ></td>
      <td><input type="submit" value="確認する"></td>

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
