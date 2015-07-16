<?php
  session_start();
  require_once("new-connection.php");
  require_once("functions.php");
  require_once('authorize.php');
  $errors = array();
  $errors2 = array();
  $errors3 = array();



if($_POST['action'] == 'register') {

  if(isset($_POST['email']) && $_POST['email'] != null) {
    if(! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $errors[] = "This email is not valid  <br>";
    }
  }else if ($_POST['email'] == null){
    $errors[] = "Email should not be empty<br>";
  }



  if(isset($_POST['name']) && $_POST['name'] == null) {
    $errors[] = "Name should not be empty <br>";
  }

  if(isset($_POST['comment']) && $_POST['comment'] == null) {
    $errors[] = "Comments should not be empty <br>";
  }

  if(isset($_POST['schoolname']) && $_POST['schoolname'] == null) {
    $errors[] = "Schoolname should not be empty <br>";
  }



  if(isset($_POST['password']) && $_POST['password'] == null) {
    $errors[] = "Password should not be empty<br>";
  }else if(strlen($_POST['password']) < 6) {
    $errors[] = "Password must be larger than 6 characters<br>";
  }

  if(isset($_POST['confirmpassword']) && $_POST['confirmpassword'] == null) {
    $errors[] = "Confirm Password should not be empty<br>";
  }

  if($_POST['password'] != $_POST['confirmpassword']) {
    $errors[] = "Passwords do not match<br>";
  }


  if(! empty($errors)) {
    $_SESSION['errors'] = $errors;
    header('Location: index.html.php');
  }else {


    $query = "INSERT INTO admins (name, email, school_name, password)
    VALUES('{$_POST['name']}','{$_POST['email']}','{$_POST['schoolname']}','{$_POST['password']}')";
    run_mysql_query($query);


    $result = "SELECT * FROM admins where email = '{$_POST['email']}' AND password = '{$_POST['password']}'";
    $grab = fetch($result);

        $_SESSION['email'] = $grab['email'];
        $_SESSION['name'] = $grab['name'];
        $_SESSION['school'] = $grab['school_name'];
        $_SESSION['admin_id'] = intval($grab['id']);
//
// var_dump($_POST);
// die();


    header('Location: admin.html.php');
  }



} else if ($_POST['action'] == 'login') {

  if(isset($_POST['email']) && $_POST['email'] != null) {
    if(! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $errors2[] = "This email is not valid  <br>";
    }
  }else if ($_POST['email'] == null){
    $errors2[] = "Email should not be empty<br>";
  }


  if(isset($_POST['password']) && $_POST['password'] == null) {
    $errors2[] = "Password should not be empty<br>";
  }


     if(! empty($errors2)) {
       $_SESSION['errors2'] = $errors2;
       header('Location: index.html.php');
     }else {
       $result = "SELECT * FROM admins where email = '{$_POST['email']}' AND password = '{$_POST['password']}'";
       $grab = fetch($result);

       if($grab) {
       $_SESSION['email'] = $grab['email'];
       $_SESSION['name'] = $grab['name'];
       $_SESSION['school'] = $grab['school_name'];
       $_SESSION['admin_id'] = intval($grab['id']);



       header('Location: admin.html.php');
     }else {

       header('Location: index.html.php');
     }
    }

}  else if ($_POST['action'] == 'contact') {

  if(isset($_POST['email']) && $_POST['email'] != null) {
    if(! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $errors3[] = "This email is not valid  <br>";
    }
  }else if ($_POST['email'] == null){
    $errors3[] = "Email should not be empty<br>";
  }


  if(isset($_POST['subject']) && $_POST['subject'] == null) {
    $errors3[] = "Subject should not be empty<br>";
  }

  if(isset($_POST['comment']) && $_POST['comment'] == null) {
    $errors3[] = "Comment should not be empty<br>";
  }

  if(isset($_POST['name']) && $_POST['name'] == null) {
    $errors3[] = "Name should not be empty <br>";
  }





     if(! empty($errors3)) {
       $_SESSION['errors3'] = $errors3;
       header('Location: contact_us.html.php');
     }else {
       $result = "SELECT * FROM admins where email = '{$_POST['email']}' AND password = '{$_POST['password']}'";
       $grab = fetch($result);

           $_SESSION['email'] = $grab['email'];
           $_SESSION['name'] = $grab['name'];
           $_SESSION['school'] = $grab['school_name'];

       var_dump($_SESSION);
       die();


       header('Location: admin.html.php');
     }


} else if ($_POST['action'] == 'request') {

  if(!empty($_POST['start']) && !empty($_POST['end1'])) {
    $stop = get_prices($_POST['start'], $_POST['end1']);

    if (isset($_POST['car']) && $_POST['car'] == 'uberx') {
        $_SESSION['stop1'] = $stop['prices']['0']['high_estimate'];
    } else if (isset($_POST['car']) && $_POST['car'] == 'uberxl') {
        $_SESSION['stop1'] = $stop['prices']['1']['high_estimate'];
    }
  }

  if (!empty($_POST['end1']) && !empty($_POST['end2'])) {
    $stop = get_prices($_POST['end1'], $_POST['end1']);
    if (isset($_POST['car']) && $_POST['car'] == 'uberx') {
        $_SESSION['stop2'] = $stop['prices']['0']['high_estimate'];
    } else if (isset($_POST['car']) && $_POST['car'] == 'uberxl') {
        $_SESSION['stop2'] = $stop['prices']['1']['high_estimate'];
    }
  }

  if (!empty($_POST['end2']) && !empty($_POST['end3'])) {
    $stop = get_prices($_POST['end2'], $_POST['end3']);
    if (isset($_POST['car']) && $_POST['car'] == 'uberx') {
        $_SESSION['stop3'] = $stop['prices']['0']['high_estimate'];
    } else if (isset($_POST['car']) && $_POST['car'] == 'uberxl') {
        $_SESSION['stop3'] = $stop['prices']['1']['high_estimate'];
    }
  }

  if (!empty($_POST['end3']) && !empty($_POST['end4'])) {
    $stop = get_prices($_POST['end3'], $_POST['end4']);
    if (isset($_POST['car']) && $_POST['car'] == 'uberx') {
        $_SESSION['stop4'] = $stop['prices']['0']['high_estimate'];
    } else if (isset($_POST['car']) && $_POST['car'] == 'uberxl') {
        $_SESSION['stop4'] = $stop['prices']['1']['high_estimate'];
    }
  }

  if (!empty($_POST['end4']) && !empty($_POST['end5'])) {
    $stop = get_prices($_POST['end4'], $_POST['end5']);
    if (isset($_POST['car']) && $_POST['car'] == 'uberx') {
        $_SESSION['stop5'] = $stop['prices']['0']['high_estimate'];
    } else if (isset($_POST['car']) && $_POST['car'] == 'uberxl') {
        $_SESSION['stop5'] = $stop['prices']['1']['high_estimate'];
    }
  }

  if (!empty($_POST['end5']) && !empty($_POST['end6'])) {
    $stop = get_prices($_POST['end5'], $_POST['end6']);
    if (isset($_POST['car']) && $_POST['car'] == 'uberx') {
        $_SESSION['stop6'] = $stop['prices']['0']['high_estimate'];
    } else if (isset($_POST['car']) && $_POST['car'] == 'uberxl') {
        $_SESSION['stop6'] = $stop['prices']['1']['high_estimate'];
    }

  }



  $_SESSION['total'] = 0;

  if(isset($_SESSION['stop1'])) {
    $_SESSION['total'] += $_SESSION['stop1'];
  }

   if (isset($_SESSION['stop2'])) {
    $_SESSION['total'] += $_SESSION['stop2'];
  }

   if (isset($_SESSION['stop3'])) {
    $_SESSION['total'] += $_SESSION['stop3'];
  }

   if (isset($_SESSION['stop4'])) {
    $_SESSION['total'] += $_SESSION['stop4'];
  }

  if (isset($_SESSION['stop5'])) {
    $_SESSION['total'] += $_SESSION['stop5'];
  }

   if (isset($_SESSION['stop6'])) {
    $_SESSION['total'] += $_SESSION['stop6'];
  }

  $_SESSION['postdata'] = $_POST;
  // var_dump($_SESSION['postdata']);
  // var_dump($_SESSION['total']);
  header('Location: admin.html.php');






} else if ($_POST['action'] == 'saveride') {
  $query = "INSERT INTO rides (";
  if (isset($_SESSION['postdata']['end1']) && isset($_SESSION['postdata']['child1']) && isset($_SESSION['stop1'])) {
    $query .= "destination1, kid1, price1, ";
  }
  if (isset($_SESSION['postdata']['end2']) && isset($_SESSION['postdata']['child2']) && isset($_SESSION['stop2'])) {
    $query .= "destination2, kid2, price2, ";
  }
  if (isset($_SESSION['postdata']['end3']) && isset($_SESSION['postdata']['child3']) && isset($_SESSION['stop3'])) {
    $query .= "destination3, kid3, price3, ";
  }
  if (isset($_SESSION['postdata']['end4']) && isset($_SESSION['postdata']['child4']) && isset($_SESSION['stop4'])) {
    $query .= "destination4, kid4, price4, ";
  }
  if (isset($_SESSION['postdata']['end5']) && isset($_SESSION['postdata']['child5']) && isset($_SESSION['stop5'])) {
    $query .= "destination5, kid5, price5, ";
  }
  if (isset($_SESSION['postdata']['end6']) && isset($_SESSION['postdata']['child6']) && isset($_SESSION['stop6'])) {
    $query .= "destination6, kid6, price6, ";
  }
  $query .= "total, admin_id) VALUES ('";
  if (isset($_SESSION['postdata']['end1'])) {
    $query .= $_SESSION['postdata']['end1']."', '".$_SESSION['postdata']['child1']."', '".$_SESSION['stop1']."', '";
  }
  if (isset($_SESSION['postdata']['end2'])) {
    $query .= $_SESSION['postdata']['end2']."', '".$_SESSION['postdata']['child2']."', '".$_SESSION['stop2']."', '";
  }
  if (isset($_SESSION['postdata']['end3'])) {
    $query .= $_SESSION['postdata']['end3']."', '".$_SESSION['postdata']['child3']."', '".$_SESSION['stop3']."', '";
  }
  if (isset($_SESSION['postdata']['end4'])) {
    $query .= $_SESSION['postdata']['end4']."', '".$_SESSION['postdata']['child4']."', '".$_SESSION['stop4']."', '";
  }
  if (isset($_SESSION['postdata']['end5'])) {
    $query .= $_SESSION['postdata']['end5']."', '".$_SESSION['postdata']['child5']."', '".$_SESSION['stop5']."', '";
  }
  if (isset($_SESSION['postdata']['end6'])) {
    $query .= $_SESSION['postdata']['end6']."', '".$_SESSION['postdata']['child6']."', '".$_SESSION['stop6']."', '";
  }
  $query .= $_SESSION['total']."', '".$_SESSION['admin_id']."')";
  run_mysql_query($query);
  header('Location: admin.html.php');
}










?>
