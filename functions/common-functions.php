<?php
include('../includes/connect.php');

//function to retrieve the data for ALL men's products.
function getMaleProducts(){
    //connection to the database contained in a separate connect.php file
    global $con;
    //Assigning an SQL query to a variable named select_query
    //*IMPORTANT: The database is set up so the first 3 categories (1-3) are the
    //3 types of men's clothing (and the 2nd 3 categories are the women's (4-6)).
    //That is why we are only looking for products whose category_id is <= 3 
    //(since we want ONLY men's products).
    $select_query="SELECT * 
                            FROM `products`
                            WHERE category_id <= 3
                            ORDER BY `product_id` ASC";
            //Using the connection and the SQL query above to retrieve the data from the database.
            $result_query=mysqli_query($con,$select_query);
            //Accesses the name, price, and image for each data entry that matches the category_id constraint.
            while($row=mysqli_fetch_assoc($result_query)){
                $product_name=$row['name'];
                $product_price=$row['price'];
                $product_image=$row['image'];
                //HTML code for the product card (repeat for each row in the database).
                echo "<div class='col-md-4'>
                        <div class='card' style='width: 18rem;'>
                            <img src='$product_image' class='card-img-top' alt='card-img-top1'>
                            <div class='card-body'>
                                <h4 class='card-title'>$product_name</h4>
                                <p class='card-text'>$product_price</p>
                                <a href='order.php' class='button'>Order Now!</a>
                            </div>
                        </div>
                    </div>";
            }
}
function getMaleShirts(){
    global $con;
    $select_query="SELECT * 
                            FROM `products`
                            WHERE category_id = 1
                            ORDER BY `product_id` ASC";
            $result_query=mysqli_query($con,$select_query);
            while($row=mysqli_fetch_assoc($result_query)){
                $product_name=$row['name'];
                $product_price=$row['price'];
                $product_image=$row['image'];
                echo "<div class='col-md-4'>
                <div class='card' style='width: 18rem;'>
                    <img src='$product_image' class='card-img-top' alt='card-img-top1'>
                    <div class='card-body'>
                      <h4 class='card-title'>$product_name</h4>
                      <p class='card-text'>$product_price</p>
                      <a href='order.php' class='button'>Order Now!</a>
                    </div>
                </div>
            </div>";
            }
}
function getMaleSweatshirts(){
    global $con;
    $select_query="SELECT * 
                            FROM `products`
                            WHERE category_id = 2
                            ORDER BY `product_id` ASC";
            $result_query=mysqli_query($con,$select_query);
            while($row=mysqli_fetch_assoc($result_query)){
                $product_name=$row['name'];
                $product_price=$row['price'];
                $product_image=$row['image'];
                echo "<div class='col-md-4'>
                <div class='card' style='width: 18rem;'>
                    <img src='$product_image' class='card-img-top' alt='card-img-top1'>
                    <div class='card-body'>
                      <h4 class='card-title'>$product_name</h4>
                      <p class='card-text'>$product_price</p>
                      <a href='order.php' class='button'>Order Now!</a>
                    </div>
                </div>
            </div>";
            }
}
function getMalePants(){
    global $con;
    $select_query="SELECT * 
                            FROM `products`
                            WHERE category_id = 3
                            ORDER BY `product_id` ASC";
            $result_query=mysqli_query($con,$select_query);
            while($row=mysqli_fetch_assoc($result_query)){
                $product_name=$row['name'];
                $product_price=$row['price'];
                $product_image=$row['image'];
                echo "<div class='col-md-4'>
                <div class='card' style='width: 18rem;'>
                    <img src='$product_image' class='card-img-top' alt='card-img-top1'>
                    <div class='card-body'>
                      <h4 class='card-title'>$product_name</h4>
                      <p class='card-text'>$product_price</p>
                      <a href='order.php' class='button'>Order Now!</a>
                    </div>
                </div>
            </div>";
            }
}
function getFemaleProducts(){
    global $con;
    $select_query="SELECT * 
                            FROM `products`
                            WHERE category_id > 3
                            ORDER BY `product_id` ASC";
            $result_query=mysqli_query($con,$select_query);
            while($row=mysqli_fetch_assoc($result_query)){
                $product_name=$row['name'];
                $product_price=$row['price'];
                $product_image=$row['image'];
                echo "<div class='col-md-4'>
                <div class='card' style='width: 18rem;'>
                    <img src='$product_image' class='card-img-top' alt='card-img-top1'>
                    <div class='card-body'>
                      <h4 class='card-title'>$product_name</h4>
                      <p class='card-text'>$product_price</p>
                      <a href='order.php' class='button'>Order Now!</a>
                    </div>
                </div>
            </div>";
            }
}
function getFemaleShirts(){
    global $con;
    $select_query="SELECT * 
                            FROM `products`
                            WHERE category_id = 4
                            ORDER BY `product_id` ASC";
            $result_query=mysqli_query($con,$select_query);
            while($row=mysqli_fetch_assoc($result_query)){
                $product_name=$row['name'];
                $product_price=$row['price'];
                $product_image=$row['image'];
                echo "<div class='col-md-4'>
                <div class='card' style='width: 18rem;'>
                    <img src='$product_image' class='card-img-top' alt='card-img-top1'>
                    <div class='card-body'>
                      <h4 class='card-title'>$product_name</h4>
                      <p class='card-text'>$product_price</p>
                      <a href='order.php' class='button'>Order Now!</a>
                    </div>
                </div>
            </div>";
            }
}
function getFemaleSweatshirts(){
    global $con;
    $select_query="SELECT * 
                            FROM `products`
                            WHERE category_id = 5
                            ORDER BY `product_id` ASC";
            $result_query=mysqli_query($con,$select_query);
            while($row=mysqli_fetch_assoc($result_query)){
                $product_name=$row['name'];
                $product_price=$row['price'];
                $product_image=$row['image'];
                echo "<div class='col-md-4'>
                <div class='card' style='width: 18rem;'>
                    <img src='$product_image' class='card-img-top' alt='card-img-top1'>
                    <div class='card-body'>
                      <h4 class='card-title'>$product_name</h4>
                      <p class='card-text'>$product_price</p>
                      <a href='order.php' class='button'>Order Now!</a>
                    </div>
                </div>
            </div>";
            }
}
function getFemalePants(){
    global $con;
    $select_query="SELECT * 
                            FROM `products`
                            WHERE category_id = 6
                            ORDER BY `product_id` ASC";
            $result_query=mysqli_query($con,$select_query);
            while($row=mysqli_fetch_assoc($result_query)){
                $product_name=$row['name'];
                $product_price=$row['price'];
                $product_image=$row['image'];
                echo "<div class='col-md-4'>
                <div class='card' style='width: 18rem;'>
                    <img src='$product_image' class='card-img-top' alt='card-img-top1'>
                    <div class='card-body'>
                      <h4 class='card-title'>$product_name</h4>
                      <p class='card-text'>$product_price</p>
                      <a href='order.php' class='button'>Order Now!</a>
                    </div>
                </div>
            </div>";
            }
}
function getSaleItems(){
    global $con;
    $select_query="SELECT * 
                            FROM `products`
                            WHERE discount_id > 0
                            ORDER BY `product_id` ASC";
            $result_query=mysqli_query($con,$select_query);
            while($row=mysqli_fetch_assoc($result_query)){
                $product_name=$row['name'];
                $product_price=$row['price'];
                $product_image=$row['image'];
                echo "<div class='col-md-4'>
                <div class='card' style='width: 18rem;'>
                    <img src='$product_image' class='card-img-top' alt='card-img-top1'>
                    <div class='card-body'>
                      <h4 class='card-title'>$product_name</h4>
                      <p class='card-text'>$product_price</p>
                      <a href='order.php' class='button'>Order Now!</a>
                    </div>
                </div>
            </div>";
            }
}

//Displays the available products in the order form dropdown element.
function displayProducts(){
    //Database connection
    global $con;
    //query to determine if a product is in stock, if so: list the product ordered by category, then by name.
    $select_query="SELECT * 
                            FROM `products`
                            WHERE in_stock = '1'
                            ORDER BY `category_id` ASC, `name` ASC";
                            $result_query=mysqli_query($con,$select_query);
                            while($row=mysqli_fetch_assoc($result_query)){
                                $product_name=$row['name'];
                                $product_id=$row['product_id'];
                                $product_category=$row['category_id'];
                                if ($product_category <= 3){
                                    $product_gender="M";
                                } else{
                                    $product_gender="F";
                                }
                                echo "<option value='$product_id'>$product_gender - $product_name</option>";
                            }
}

function displayProductCategories(){
    global $con;
    $select_query="SELECT * 
                            FROM `categories`
                            ORDER BY `category_name` ASC";
            $result_query=mysqli_query($con,$select_query);
            while($row=mysqli_fetch_assoc($result_query)){
                $category_name=$row['category_name'];
                echo "<option value='$category_name'>$category_name</option>";
            }
}

//Function to handle order submissions, updates database tables.
function submitOrder(){
    //Database connection
    global $con;
    //Only attempts to send the following queries if the "submit" button is pressed.
    if(isset($_POST['submit_order'])){
        $first_name=$_POST['firstname'];
        $last_name=$_POST['lastname'];
        $product_id=$_POST['product_id'];
        $quantity=$_POST['quantity'];

        //Get's the quantity of an item that is currently available in the inventory.
        $select_query="SELECT products.product_id, inventory.inventory_id, inventory.quantity
                        FROM `products`
                        INNER JOIN inventory ON products.inventory_id=inventory.inventory_id
                        WHERE products.product_id = $product_id";
        $result_query=mysqli_query($con,$select_query);
        $row=mysqli_fetch_assoc($result_query);
        //inventory id of the product selected
        $inventory_id=$row['inventory_id'];
        //its current quantity
        $current_quantity=$row['quantity'];

        //Error checking to make sure all fields are filled out.
        if($first_name=='' or $last_name=='' or $product_id=='' or $quantity=='' or $quantity<=0){
            echo "<script>alert('Please fill all empty fields.')</script>";
            exit();
        }
        //Checks if there is enough quantity of an item to allow for the purchase to go through.
        else if($quantity > $current_quantity){
            echo "<script>alert('Not enough in stock, only $current_quantity in stock currently.')</script>";
        }else{
            //Inserts the order into the order table.
            $insert_order="INSERT INTO `orders` (first_name,last_name,product_id,quantity,submitted_at)
                                VALUES ('$first_name','$last_name','$product_id','$quantity',NOW())";
            $result_query2=mysqli_query($con,$insert_order);
            if($result_query2){
                echo "<script>alert('Order Submitted!')</script>";
            }
            //If the user buys the remaining amount of product from the inventory -> change boolean in_stock to return false.
            if ($quantity == $current_quantity){
                $update_productAvailablity="UPDATE `products`
                                            SET in_stock = '0'
                                            WHERE inventory_id = $inventory_id";
                $result_query3=mysqli_query($con,$update_productAvailablity);
            }
            //Edits the quantity available in the inventory table.
            $update_inventory="UPDATE `inventory`
                                SET quantity = $current_quantity - $quantity
                                WHERE inventory_id = $inventory_id";
            $result_query4=mysqli_query($con,$update_inventory);
        }
    }
}

?>