<?php
include "authguard.php";
echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js' integrity='sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM' crossorigin='anonymous'></script>
</head>
<body>
    <div class='d-flex justify-content-center align-items-center vh-100'>
        <form method='post' class='w-50 bg-warning p-4' enctype='multipart/form-data'>
            <h4 class='text-center'>Edit Product</h4>
            <input class='form-control mt-3' type='text' name='pname' placeholder='Product Name' required>
            <input class='form-control mt-2' type='number' name='pprice' placeholder='Product Price' required>
            <textarea class='form-control mt-2' name='pdetail' cols='30' rows='3' placeholder='Product Description' required></textarea>
            <input name='pdtimg' class='form-control mt-2' type='file' accept='.jpg,.png' required>
            <div class='text-center mt-3'>
                <button type='submit' class='mt-3 bg-danger text-white'>Edit Product</button>
            </div>
        </form>
    </div>
</body>
</html>";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include "../shared/connection.php";
    
    $pname = mysqli_real_escape_string($conn, $_POST['pname']);
    $pprice = $_POST['pprice'];
    $pdetail = mysqli_real_escape_string($conn, $_POST['pdetail']);
    $productid = 1; 

    $source = $_FILES['pdtimg']['tmp_name'];
    $target = "../shared/images/" . $_FILES['pdtimg']['name'];
    move_uploaded_file($source, $target);
    
    $query = "UPDATE product SET name='$pname', price=$pprice, details='$pdetail', impath='$target' WHERE productid=$productid";
    
    if (mysqli_query($conn, $query)) {
        echo "Product updated successfully.";
    } else {
        echo "Error updating product: " . mysqli_error($conn);
    }
    
    header("location:view.php");
    exit();
}
?>
