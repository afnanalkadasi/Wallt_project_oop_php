

<?php
include 'checkoutClass.php';
include 'dbcontroller.php';
$connect = new DBController();

if(!isset($_SESSION['user_name'])&&$_SESSION["user_name"]==""){
    echo '<script> alert("  you must login")</script>';
      echo '<script>window.location="index.php"</script>';
}


if (isset($_GET["action"])) {
  if ($_GET["action"] == "check") {
    $total=$_GET['total'];
   
    $check->check_wallet($total);
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>checkout</title>
</head>
<style>
  .container {
    display: block;

  }

  .cart table {
    margin: auto;
    width: 50vw;
    padding: 1rem;
   
    background-color: white;
  }

  .cart table tr th {
    margin: 0rem;
    padding: 1rem;
    background-color: #87abab;
  }

  .cart table tr td {
    margin: 0rem;
    padding: 1rem;

  }

  a {
    text-decoration: none;
    color: white;
  }

  body {
    background-color: white;
  }
  .wallet {
    color: white;
    width: 80px;
    margin:10px;
    background-color: #c10097;
    border: none;
    height: 50px;
    border-radius: 50%;

  }
  .wallet4 {
    color: white;
    width: 30px;
    margin:10px;
    background-color: #c10097;
    border: none;
    height: 30px;
    border-radius: 50%;
    display: flex;
    padding: 2% 6%;
    justify-content: space-between;
    align-items: center;
  }

  .wallet:hover {
    color: white;
    background-color: #3f5a5a;
    border: none;
    padding: 0.8rem;

  }
</style>



<body>
  



<h3 style="margin:2rem ;font-size:1.5rem">order datails cart</h3>
      <div class="cart">

        <table >
          <tr>
            <th>item name</th>
            <th>Quantity</th>
            <th>price</th>
            <th>total</th>
            <th>Action</th>
          </tr>
          <?php
          if (!empty($_SESSION["shopping_cart"])) {
            $total = 0;
            foreach ($_SESSION['shopping_cart'] as $keys => $values) {
          ?>
              <tr>
                <td><?php echo $values["item_name"]; ?></td>
                <td><?php echo $values["item_quantity"]; ?></td>
                <td><?php echo $values["item_price"]; ?></td>
                <td><?php echo number_format($values["item_quantity"] * $values["item_price"], 2) ?></td>
                <td><a href="index.php?action=delete&id=<?php echo $values['item_id']; ?>"> <span style="color:red">Remove</span></a></td>
              </tr>



            <?php
              $total = $total + ($values["item_quantity"] * $values["item_price"]);
            }

            ?>
          
            <tr>
              <td>total</td>
              <td>$<?php echo $total; ?></td>   <td>

        
         <a href="checkout.php?action=check&total=<?php echo $total; ?>">  <button class="wallet"  style=" width: 100px;  height: 50px;border-radius: 10px;" onclick="return confirm('Are you sure');"> checkout</button> </a>
     </td>  
            </tr>   
          
          <?php
          }
          ?>
         

 </table>
      </div>
    </div>

</body>
</html>