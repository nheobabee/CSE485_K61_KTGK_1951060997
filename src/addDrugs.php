<?php include('./config.php') ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="container">
    <br>
    <h1>ADD DRUGS</h1>
    <br>
    <a href="./index.php"><button type="button" class="btn btn-primary"><i class="fas fa-undo-alt"></i> BACK</button></a>
    <br><br>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group row">
            <label for="empMobile" class="col-sm-2 col-form-label">name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name">
            </div>


            <label for="empMobile" class="col-sm-2 col-form-label">type</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="type" name="type">
            </div>

            <label for="empMobile" class="col-sm-2 col-form-label">barcode</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="barcode" name="barcode">
            </div>

            <label for="empMobile" class="col-sm-2 col-form-label">dose</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="dose" name="dose">
            </div>

            <label for="empMobile" class="col-sm-2 col-form-label">code</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="code" name="code">
            </div>

            <label for="empMobile" class="col-sm-2 col-form-label">cost_pricese</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="cost_price" name="cost_price">
            </div>

            <label for="empMobile" class="col-sm-2 col-form-label">selling_price</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="selling_price" name="selling_price">
            </div>

            <label for="empMobile" class="col-sm-2 col-form-label">expiry</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="expiry" name="expiry">
            </div>

            <label for="empMobile" class="col-sm-2 col-form-label">company_name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="company_name" name="company_name">
            </div>

            <label for="empMobile" class="col-sm-2 col-form-label">production_date</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="production_date" name="production_date">
            </div>

            <label for="empMobile" class="col-sm-2 col-form-label">expiration_date</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="expiration_date" name="expiration_date">
            </div>

            <label for="empMobile" class="col-sm-2 col-form-label">place</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="place" name="place">
            </div>

            <label for="empMobile" class="col-sm-2 col-form-label">quantity</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="quantity" name="quantity">
            </div>


        </div>
        <br>
        <button type="submit" name="submit" class="btn btn-primary">ADD DRUGS</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $type = $_POST['type'];
        $barcode = $_POST['barcode'];
        $dose = $_POST['dose'];
        $code = $_POST['code'];
        $cost_price = $_POST['cost_price'];
        $selling_price = $_POST['selling_price'];
        $expiry = $_POST['expiry'];
        $company_name = $_POST['company_name'];
        $production_date = $_POST['production_date'];
        $expiration_date = $_POST['expiration_date'];
        $place = $_POST['place'];
        $quantity = $_POST['quantity'];

        $sql = "INSERT INTO tb_drugs(name,type,barcode,dose,code,cost_price,selling_price,expiry,company_name,production_date,
        expiration_date,place,quantity) values('$name','$type','$barcode','$dose','$code','$cost_price','$selling_price','$expiry','$company_name','$production_date',
        '$expiration_date','$place','$quantity')";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            header("Location:index.php");
        } 
    }
    ?>
</div>
</div>