<?php
include "authguard.php";
include "menu.html";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
    <form action="upload.php" method="post" class="w-50 bg-warning p-4" enctype="multipart/form-data">
        <h4 class="text-center">Upload Product</h4>
        <input class="form-control mt-3" type="text" name="pname" placeholder="Product Name">
        <input class="form-control mt-2" type="number" name="pprice" placeholder="Product Price">
        <textarea  class="form-control mt-2"name="pdetail" col="30" rows="5" placeholder="Product Description"></textarea>
            <input name="pdtimg"  class="form-control mt-2" type="file" accept=".jpg,.png">

            <div class="text-center mt-3">
            <button class="btn btn-danger">Upload Product</button>
        </div>
    </form>
</div>
</body>
</html