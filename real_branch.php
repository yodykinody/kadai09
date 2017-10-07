<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <title></title>
    <script src="jquery-2.1.3.min.js"></script>
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <script src="sample.js"></script>
    <link rel="stylesheet" href="sample.css">
  </head>
  <body>


    <?php

    if(isset($_POST['disp'])==true){
      if(isset($_POST['realcode'])==false){
        header('Location:real_ng.php');
        exit();
      }
      $real_code=$_POST['realcode'];
      header('Location:real_disp.php?realcode='.$real_code);
      exit();
    }

    if(isset($_POST['add'])==true){
      header('Location:real_add.php');
      exit();
    }

    if(isset($_POST['edit'])==true){

      if(isset($_POST['realcode'])==false){
        header('Location:real_ng.php');
        exit();
      }

      $real_code=$_POST['realcode'];
      header('Location:real_edit.php?realcode='.$real_code);
      exit();
    }
    if(isset($_POST['delete'])==true){

      if(isset($_POST['realcode'])==false){
        header('Location:real_ng.php');
        exit();
      }

      $real_code=$_POST['realcode'];
      header('Location:real_delete.php?realcode='.$real_code);
      exit();
    }


    if(isset($_POST['shinki'])==true){


      header('Location:real.php');
      exit();
    }


     ?>


  </body>
</html>
