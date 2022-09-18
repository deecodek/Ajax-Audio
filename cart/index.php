<?php
session_start();
require_once 'connection.php';
error_reporting(0);

// add, remove, empty
if (!empty($_GET['action'])){
    switch($_GET['action']){

        //add product to cart
        case 'add':
            if(!empty($_POST['quantity'])){
                $pname=$_GET['pname'];
                $query= "SELECT * FROM gallery WHERE name='$pname'";
                $result=mysqli_query($conn, $query);
                while($product=mysqli_fetch_array($result)){
                    $itemArray=[
                        $product['name'] =>[
                            'name' => $product['name'],
                            'discription' => $product['discription'],
                            'quantity' => $_POST['quantity'],
                            'price' => $product['price'],
                            'image' => $product['picsource']
                        ]
                        ];
                        if (!empty($_SESSION['cart_item'])){
                            if(in_array($product['name'], array_keys($_SESSION['cart_item']))){
                                foreach($_SESSION['cart_item'] as $key=>$value){
                                    if(empty($_SESSION['cart_item']["quantiy"])){
                                        $_SESSION ['cart_item'][$key]['quantity'] += $_POST['quantity'];
                                    }
                                }
                        
                            }else{
                                $_SESSION['cart_item'] += $itemArray;
                            }
                        }else{
                            $_SESSION['cart_item']= $itemArray;
                        }
                }
            }
            break;
            case 'remove':
                if (!empty($_SESSION['cart_item'])) {
                    foreach ($_SESSION['cart_item'] as $key => $value) {
                        if ($_GET['name'] == $key) {
                            unset($_SESSION['cart_item'][$key]);
                        }
                        if (empty($_SESSION['cart_item'])) {
                            unset($_SESSION['cart_item']);
                        }
                    }
                }
                break;
            case 'empty':
                unset($_SESSION['cart_item']);
                break;
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="font.css">
<link rel="stylesheet" href="style.css">
    <title>Products</title>
</head>
<body>
    <?php include 'http://localhost/online_shop3/header.php'?>
    <br> &nbsp;
<a href="http://localhost/online_shop3/index.php" class=
                    "btn btn-danger">Home</a>
    <div class="container py-5">
    <div class="d-flex justify-content-between mb-2">
        <h3>Cart</h3>
        <a href="index.php?action=empty" class="btn btn-danger btn-sm rounded"> Remove All Items </a>

    </div>
    <form action="checkout.php" mehod="post" >
<div class="row">
    <table class="table">
        <tbody>
            <tr>
                <th class="text-left">Name</th>
                <th class="text-left">Discription</th>
                <th class="text-right">Quantity</th>
                <th class="text-right">Item Price</th>
                <th class="text-right">Total Price</th>
                
            </tr>
           <?php
           if (isset($_SESSION['cart_item']) && !empty($_SESSION['cart_item'])){
            foreach ($_SESSION['cart_item'] as $item) {
                $item_price = $item['quantity'] * $item['price'];

            ?>
             <tr>
                <td class="text-left">
                    <img src="<?=$item['image'] ?>" alt="<?= $item['name']?>" class="img-fluid" width="100"><br>
                    <?= $item['name']?>
                </td>
                <td class="text-left"><?= $item['discription']?></td>
                <td class="text-right"><?= $item['quantity']?></td>
                <td class="text-right"><?= $item['price']?></td>
                <td class="text-right"><?= $item_price ?></td>
               
                
                    
            </tr>
            <a href="checkout.php?price=<?= $item_price ?> & prprc=<?= $item['price']?> & prname= <?= $item['name']?> & prqty=<?= $item['quantity']?>" class=
                    "btn btn-danger">Buy Now</a>
            <?php
            $total_quantity += $item["quantity"];
            $total_price += ($item["price"]*$item["quantity"]);
           }
        }
        if (isset($_SESSION['cart_item']) && !empty($_SESSION['cart_item'])){
           ?>
                <td colspan="2" align="right">Total:</td>
                    <td align="right"><strong><?= $total_quantity ?></strong></td>
                    <td></td>
                    <td align="right"><strong>₹<?= number_format($total_price, 2); ?></strong></td>
                    <td></td>
                </tr>

            <?php }

                ?>
        </tbody>
    </table>
</div>

</form>







    <!-- Product Page (first work)--->
        <div class="row">
            <div class="col-md-12">
                <h1>Products List</h1>
                <div class="d-flex">
                    <div class="card-group">
                        <?php
                        $query="SELECT * FROM gallery";
                        $product=mysqli_query($conn, $query);
                        if(!empty($product)){
                            while ($row=mysqli_fetch_array($product)){
                                ?>
                                
                                    <form action="index.php?action=add&pname=<?= $row['name']; ?>" method="post">
                                    <div class="card" style="width:18rem ; padding: 20px;
  margin: 10px" >
<img class="card-img-top" 
src="<?= $row['picsource']; ?>" 
alt="<?=$row['name']; ?>" 
width="150" >
<div class="card-header d-flex justify-content-between">
    <span> <?=$row['name']; ?></span>
    <span><?= $row['price']; ?>₹</span>
   
</div>
<br>
<span justify-content="space-between"> <?=$row['discription']; ?></span>
<div class="card-body d-flex justify-content-between">
    <input type="text"  name="quantity" value="0" size="2">
    <input type="submit" value="Add to Cart" class="btn btn-success btn-sm" style="background: blue">
</div>
                                    </div>
                            </form>
                               
                                <?php

                            }
                        }
                        ?>
                    </div>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>