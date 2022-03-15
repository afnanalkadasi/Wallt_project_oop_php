<?php


class wallet
{


  function insert($amount)
  {
    $connect=mysqli_connect("localhost","root","","offlinewallet");
    $query="insert into add_wallet values(null,$amount,now(),1)";
    $result= mysqli_query($connect, $query);
  if ($result) {
    $total=mysqli_query($connect,"select amount from wallet")->fetch_object()->amount;
$total_amount=$amount+ $total;
if(mysqli_query($connect,"update wallet set amount= $total_amount"))
{
   echo "<script>alert('You have successfully inserted the data');</script>";
    echo "<script type='text/javascript'> document.location ='wallet.php'; </script>";
}
   
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }

  }

}


$wallet = new wallet();

?>