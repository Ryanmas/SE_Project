<?php
    session_start();
    require_once('../mysql-connect.php');
    ?>
<!DOCTYPE html>
<html>

<head>
    <title>Webslesson Tutorial | Simple PHP Mysql Shopping Cart</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
    <br/>
    <div class="container" style="width:700px;">
        <h3 align="center">Simple PHP Mysql Shopping Cart</h3><br />
        <?php  
                $query = "SELECT * FROM products ORDER BY ID_Product ASC";  
                $result = mysqli_query($dbc, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>
        <div class="col-md-4">
            <form method="post" action="Cart.php?action=add&id=<?php echo $row["ID_Product"]; ?>">
                <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;"
                    align="center">
                    <img src="<?php echo '../assests/'.$row["ImageName"].'.jpg'; ?>" class="img-responsive" /><br />
                    <h4 class="text-info"><?php echo $row["PrName"]; ?></h4>
                    <h4 class="text-danger">$ <?php echo $row["Price"]; ?></h4>
                    <input type="text" name="quantity" class="form-control" value="1" />
                    <input type="hidden" name="hidden_name" value="<?php echo $row["PrName"]; ?>" />
                    <input type="hidden" name="hidden_price" value="<?php echo $row["Price"]; ?>" />
                    <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success"
                        value="Add to Cart" />
                </div>
            </form>
        </div>
        <?php  
                     }  
                }  
                ?>
        <div style="clear:both"></div>
        <br />
        <h3>Order Details</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th width="40%">Item Name</th>
                    <th width="10%">Quantity</th>
                    <th width="20%">Price</th>
                    <th width="15%">Total</th>
                    <th width="5%">Action</th>
                </tr>
                <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>
                <tr>
                    <td><?php echo $values["item_name"]; ?></td>
                    <td><?php echo $values["item_quantity"]; ?></td>
                    <td>$ <?php echo $values["item_price"]; ?></td>
                    <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
                    <td><a href="Cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span
                                class="text-danger">Remove</span></a></td>
                </tr>
                <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>
                <tr>
                    <td colspan="3" align="right">Total</td>
                    <td align="right">$ <?php echo number_format($total, 2); ?></td>
                    <td></td>
                </tr>
                <?php  
                          }  
                          ?>
            </table>
        </div>
    </div>
    <br />
</body>
</html>