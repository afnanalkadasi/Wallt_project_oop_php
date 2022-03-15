<?php

 include 'WalletClass.php';

 require_once("dbcontroller.php");
 $connect = new DBController();
 if(isset($_POST['submit']))
{
  $amount=$_POST['amount'];
  $wallet->insert( $amount);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add To Wallet</title>
</head>

<style>
  body
  {
    background-color:#1f1f2e ;
  }
div
{
  display: flex;
  justify-content: center;

}
form{
  border-radius: 0.3rem;
 background-color:#e0e0eb;
 padding: 3rem;
 padding-bottom:1rem;

}
.submit
{
 margin: auto;
 margin: 1rem;
 padding:0.6rem;
 border-radius: 0.3rem;
 background-color: #1f1f2e;
 color: #e0e0eb;
 width: 9rem;

}
input{
  margin: 0;
  padding:0.6rem;
 border-radius: 0.3rem;
 border:1px solid #1f1f2e;
 width:17rem;
}
</style>

<body>
<div>
 <form action="addToWallet.php" method="POST">
  <input type="number" name="amount" id="" require ><br>
  <input class="submit" type="submit" name="submit"></form>  
</div></body>
</html>