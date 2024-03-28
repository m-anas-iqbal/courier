<?php
include "config.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
$email=$_POST['email'];
echo '  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>';
if(isset($_POST["signup"])){

    $query="insert into `users` (`name`, `address`, `phone`, `email`, `password`, `created`) 
    values 
    ('{$_POST['name']}','{$_POST['address']}','{$_POST['phone']}','{$email}','{$_POST['password']}','".date('Y-m-d h:i:s')."')";
    if($db->query($query)){
        $last_id = mysqli_insert_id($db);
        $_SESSION['email'] =$email;
        $_SESSION['userid'] =$last_id;
        $_SESSION['msgs'] = 'Created Successfully!';
        header("Location:../index.php");
    // echo "<script>window.location='../index.php';</script>";
    }
    // $_SESSION['msg'] = 'Created Successfully!';
    // echo "not working <br>";
    // echo $query;
    // echo "<script>window.location='../index.php';</script>";
}
if(isset($_POST["adminaddu"])){
    
    $query="insert into `users` (`name`, `address`, `role`, `phone`, `email`, `password`, `created`, `status`) 
    values 
    ('{$_POST['name']}','{$_POST['address']}','{$_POST['role']}','{$_POST['phone']}','{$_POST['email']}','{$_POST['password']}','".date('Y-m-d h:i:s')."','{$_POST['status']}')";
    if($db->query($query)){
    echo "<script>window.location='../admin/user.php';</script>";
    }
}
if(isset($_POST["admineditu"])){
    $id = $_GET['id'];
    $query="UPDATE `users` SET `name`='{$_POST['name']}',`address`='{$_POST['address']}',`role`='{$_POST['role']}',`phone`='{$_POST['phone']}',`email`='{$_POST['email']}',`password`='{$_POST['password']}',`status`='{$_POST['status']}' WHERE id = $id";
    if($db->query($query)){
    echo "<script>window.location='../admin/user.php';</script>";
    }
}
if(isset($_POST["couieradd"])){
    $query1="INSERT INTO `courior`(`startdate`, `deliverydate`, `weight`, `departure`, `destination`) VALUES ('{$_POST['startdate']}','{$_POST['deliverydate']}','{$_POST['weight']}','{$_POST['departure']}','{$_POST['destination']}')";
      $sel ="select * from priceing";
      $q1=mysqli_query($db,$sel);
      while($row =  mysqli_fetch_assoc($q1))
      {
         $height = ((float)($_POST["height1"]) /(float)($row['height'])) ;
         $width = ((float)($_POST["width1"]) /(float)($row['width'])) ;
         $weight = ((float)($_POST["weight1"]) /(float)($row['weight'])) ;
         if($_POST["city11"] != $_POST["city21"])
         {
             $parcel_cost = (float)($row["parcel_cost"]);
      
      }else {
          $parcel_cost = ((float)($row["parcel_cost"])*2);
      }
    }
        
       $result = ((float)($height*$row["h_cost"])+ (float)($height*$row["h_cost"])+(float)($weight*$row["wt_cost"])+(float)($width*$row["w_cost"])+($parcel_cost));
  
    $query2="INSERT INTO `courier_detail`( `d_departure`, `d_destination`, `height`, `width`, `totalprice`) VALUES ('{$_POST['d_departure']}','{$_POST['d_destination']}','{$_POST['height']}','{$_POST['width']}','{$result}')";
    ($db->query($query2));
    if($db->query($query1)){
    echo "<script>window.location='../admin/courier.php';</script>";
    }
}
if(isset($_POST["couieredit"])){
    $id = $_GET['id'];
    $sel ="select * from priceing";
    $q1=mysqli_query($db,$sel);
    while($row =  mysqli_fetch_assoc($q1))
    {
       $height = ((float)($_POST["height1"]) /(float)($row['height'])) ;
       $width = ((float)($_POST["width1"]) /(float)($row['width'])) ;
       $weight = ((float)($_POST["weight1"]) /(float)($row['weight'])) ;
       if($_POST["city11"] != $_POST["city21"])
       {
           $parcel_cost = (float)($row["parcel_cost"]);
    
    }else {
        $parcel_cost = ((float)($row["parcel_cost"])*2);
    }
  }     
     $result = ((float)($height*$row["h_cost"])+ (float)($height*$row["h_cost"])+(float)($weight*$row["wt_cost"])+(float)($width*$row["w_cost"])+($parcel_cost));
    $query2="UPDATE `courier_detail` SET `d_departure`='{$_POST['d_departure']}',`d_destination`='{$_POST['d_destination']}',`height`='{$_POST['height']}',`width`='{$_POST['width']}',`totalprice`='{$result}' WHERE dc_id = $id";
    $query1="UPDATE `courior` SET `startdate`='{$_POST['startdate']}',`deliverydate`='{$_POST['deliverydate']}',`weight`='{$_POST['weight']}',`departure`='{$_POST['departure']}',`destination`='{$_POST['destination']}' WHERE id = $id";
    ($db->query($query2));
    if($db->query($query1)){
    echo "<script>window.location='../admin/courier.php';</script>";
    }
}
if(isset($_POST["submitpay"])){
    
    $acc_no = $_POST['acc_no'];
    $pin = $_POST['pin'];   
    $payment = $_POST['payment']; 
    $query="INSERT INTO `orders`( `user_id`, `courior_id`, `o_date`, `paid`, `acc_no`) 
    values 
    ('{$_SESSION['userid']}','{$_SESSION['courior_id']}','".date('Y-m-d h:i:s')."','{$_POST['payment']}','{$_POST['acc_no']}')";
    if($db->query($query)){
        // unset($_SESSION['courior_id']);
    $sel = " UPDATE `account` SET `cash`=cash-{$_POST['payment']} where acc_no = {$_POST['acc_no']}";

    if($q = mysqli_query($db, $sel)){
        // $last_id = mysqli_insert_id($db);
        // header("Location:../reportuser.php?id=".$_SESSION['courior_id']."");  
      
        echo "<script>sessionStorage.setItem('courierid',".$_SESSION['courior_id'].");sessionStorage.setItem('email',".$_SESSION['email'].")</script>";   
        header("Location:../index.php");

   
    }
}
}
if (isset($_POST["message1"])) {
    // echo "working";
    $query1 = " INSERT INTO `contactus`( `name`, `email`, `messages`, `phone`) VALUES ('{$_POST['name1']}','{$_POST['email1']}','{$_POST['message1']}','{$_POST['phone1']}')";
    // echo "working2";
    if($db->query($query1)){
        // echo "working3";
   header("Location:../index.php");
    }
}
?></body>
</html>