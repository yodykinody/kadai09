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

    $user_kanri=$_POST['kanri_flg'];


    if(isset($_POST['disp'])==true){
      if(isset($_POST['usercode'])==false){
        header('Location:user_ng.php');
        exit();
      }
      $user_code=$_POST['usercode'];
      header('Location:user_disp.php?realcode='.$user_code);
      exit();
    }

    if(isset($_POST['add'])==true){
      header('Location:user_add.php');
      exit();
    }

    if(isset($_POST['edit'])==true){

      if(isset($_POST['usercode'])==false){
        header('Location:user_ng.php');
        exit();
      }

      $user_code=$_POST['usercode'];
      header('Location:user_edit.php?usercode='.$user_code);
      exit();
    }
    if(isset($_POST['delete'])==true){

      if(isset($_POST['usercode'])==false){
        header('Location:user_ng.php');
        exit();
      }

      $user_code=$_POST['usercode'];
      header('Location:user_delete.php?usercode='.$user_code);
      exit();
    }




    if(isset($_POST['kanri'])==true){
      if($user_kanri==0){
        header('Location:real_list.php');
        exit();

    }  else{
      header('Location:user_ng2.php');
        exit();
        //
        // $user_code=$_POST['usercode'];
        // header('Location:user_disp.php?realcode='.$user_code);
        // exit();

      }

    }



     ?>


  </body>
</html>
