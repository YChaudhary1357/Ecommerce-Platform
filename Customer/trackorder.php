<?php
include "menu.html";
include "authguard.php";
include "../shared/connection.php";

$userid = $_SESSION['userid'];

$query = mysqli_query($conn, "
    SELECT product.*, cart.order_date 
    FROM product 
    JOIN cart ON product.pid = cart.productid 
    WHERE cart.userid = $userid;
");

echo "<table class='table table-striped'>
        <tr>
            <td>Product_ID</td>
            <td>Product_Name</td>
            <td>Product_Price</td>
            <td>Product_Details</td>
            <td>Order_Date</td>
        </tr>";

while ($row = mysqli_fetch_assoc($query)) {
    echo "<tr> 
            <td>{$row['pid']}</td> 
            <td>{$row['name']}</td> 
            <td>{$row['price']}</td>
            <td>{$row['details']}</td>
            <td>{$row['order_date']}</td>
          </tr>";
}

echo "</table>";

?>
