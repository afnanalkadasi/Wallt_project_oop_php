<?php
session_start();
class checkout 
{


function check_wallet($total)
{

  $connect=mysqli_connect("localhost","root","","offlinewallet");
  $query1="select amount from wallet";
  $wallet_amount=mysqli_query($connect,$query1)->fetch_object()->amount;

  if($wallet_amount>=$total)
  {
    $wallet_amount=$wallet_amount-$total;
    mysqli_query($connect,"update wallet set amount =  $wallet_amount where user_id =1");
    echo '<script>alert(" payment successfully" )</script>';
    $wallet_amount=mysqli_query($connect,$query1)->fetch_object()->amount;  
    mysqli_query($connect,"insert into check_wallet values(null,$total,now(),1)");

   echo '<script>window.location="index.php"</script>';
    unset($_SESSION["shopping_cart"]);

  }
  else{
    echo '<script>alert(" Sorry !! you dont have enough money please add money to ur wallet" )</script>';
    '<script>window.location="wallet.php"</script>';
  }
 
 
  }
}

$check=new  checkout ();
?>