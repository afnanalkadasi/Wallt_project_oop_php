<?php
$connect=mysqli_connect("localhost","root","","offlinewallet");


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="style.css" type="text/css" rel="stylesheet" media="all">
  <title>Wallet</title>
</head>
<body>
  
<style>

.total{
  background-color:#cc99ff;
 color: while;
 padding: 1rem;
 font-size: 1.5rem;
 border-radius: 0.3rem;
}
a{
  text-decoration: none;
  background-color: #990099;
  margin: 1rem;
  padding: 1rem;
  border-radius: 0.3rem;
  color: white;
}
a:hover{
  text-decoration: none;
  background-color:#cc00cc;
  margin: 1rem;
  padding: 1rem;
  border-radius: 0.3rem;
  color: white;
}
h3{
  margin: 1rem;
  font-size: 1.5rem;
  padding-left: 1rem;
  margin-top: 4rem;
}
h2{
  margin: 2% 35%;
  font-size: 1.6rem;
  font-weight: 900;
  padding-left: 1rem;
  margin-top: 4rem;
  color: #c10097;
}
body {
    background-color: white;
  }
table {
    margin: auto;
    width: 50vw;
    padding: 1rem;
   
    background-color: white;
  }

table tr th {
    margin: 0rem;
    padding: 1rem;
    background-color: #87abab;
  }

 table tr td {
    margin: 0rem;
    padding: 1rem;

  }
</style>




  
 <?php
$query="select amount from wallet";
$result=mysqli_query($connect,$query);
if(mysqli_num_rows($result)!=0)
{
  while($row=mysqli_fetch_assoc($result))
  {
  
    ?>
    <br>
    <a href="index.php"> Home </a>
<div class="total">
    
 <p style="margin:0 30rem;">total money in your wallet :<?php echo $row['amount'];?>
<?php
  }
}

 ?>


</p>
</div>
<a style="margin:0 0 0 60rem;" href="addToWallet.php"> Add to your wallet </a>
<br>
<h3>Notifications</h3>
<h2>Money Added To Wallet</h2>
<?php
$result=mysqli_query($connect,"select * from add_wallet");
if(mysqli_num_rows($result)!=0)
while($row=mysqli_fetch_assoc($result))
{

  
  ?>
  <div>


  <table>
     <tr>
       <th>Money Added</th>
       <th>Date</th>
     </tr>
         <tr>
           <td> <?php echo $row['amount']?></td>
           <td><?php echo $row['date']?></td>
         </tr>




  
     
    
    

</table>

</div>

<?php
}
else 
echo" NO notifications is found " ;

$result1=mysqli_query($connect,"select * from check_wallet");
  {
    echo" <h2>Money Checked For Wallet</h2>";
    while($rows=mysqli_fetch_assoc($result1))
    {
      ?>
<div>

  <table>
     <tr>
       <th>Money checked</th>
       <th>Date</th>
     </tr>
         <tr>
           <td>  <?php echo $rows['amount']?></td>
           <td> <?php echo $rows['date']?></td>
         </tr>

</table>
</div>
     <?php

    }
  }
?>



</body>
</html>