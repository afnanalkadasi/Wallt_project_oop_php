<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "offlinewallet");

if(isset($_POST['submit']))
{
 
  $email=$_POST['email'];
  $password=$_POST['password'];
 
 $querey="select * from user where user_name='$email' && password= $password";
 $result=mysqli_query($connect,$querey);
 $row=mysqli_fetch_array($result);
if($row)
  {
    $_SESSION["user_name"]=$row["user_name"];
    $_SESSION["password"]=$row["password"];
   header("Location:index.php");
}
else{
  echo '<script>alert(" Sorry !! username or password is wrong !" )</script>';
}

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<style>
 body
  {
    width: 100vw;
    height: 100vh;
   background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)), url('assets/img1.jpg');
     background-repeat: no-repeat;
     background-position: bottom;
    background-size: cover;
    display: flex;
    align-items: flex-end;
    justify-content: center;
    overflow: hidden;
    font-size: 20px;
  }
  b{
  margin: 2rem 6rem;
  font-size: 30px;
}
.signup
{
  margin: auto;
  display: flex;
  justify-content: center;
}
.signup input
{
  margin:0.5rem;
  padding:0.8rem;
  width: 400px;
  border-radius: 0.3rem;
  background-color:rgba(102, 153, 153,0.4);
  border: none;
}
.signup form
{
  background-color:rgba(20, 31, 31,0.7);
  margin: auto;
  border-radius: 0.4rem;
  padding:3rem ;
}

.submit:hover
{
  background-color: rgba(70, 109, 109,0.5)
}
.submit
{
  background-color: rgb(70, 109, 109)
}

em{
  color:#b1cdcd;
  margin: 0 10px 0 70px;
}
a
{
  text-decoration: none;
}
</style>

<body>
<div class="signup">
<form action="login.php" method="POST">
<b><em>Login</em></b><br><br>
<input type="email" require placeholder=" your email" name="email"><br>
<input type="password" require placeholder=" your password" name="password"><br>
<input class="submit" type="submit" value="login" name="submit"><br>
<br>
 <em>you don't have acount </em> 
<a href="signup.php"> sign up </a>
</form>

</div>





</body>
</html>