<?php include('./config.php'); ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>

    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand">ADMIN - DRUGS</a>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>

 
    <br>
        <a href="./addDrugs.php"><button type="button" class="btn btn-primary"> ADD</button></a>
        <br> <br> <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">type</th>
                    <th scope="col">barcode</th>
                    <th scope="col">dose</th>
                    <th scope="col">code</th>
                    <th scope="col">cost_price</th>
                    <th scope="col">selling_price</th>
                    <th scope="col">expiry</th>
                    <th scope="col">company_name</th>
                    <th scope="col">production_date</th>
                    <th scope="col">expiration_date</th>
                    <th scope="col">place</th>
                    <th scope="col">quantity</th>
                    <th scope="col">UPDATE</th>
                    <th scope="col">DELETE</th>
                    <th scope="col">DETAILS</th>
                    

                </tr>
            </thead>
            <tbody>
                <?php
         
                $sql = "SELECT * FROM tb_drugs";
                $res = mysqli_query($conn, $sql);
                $count = mysqli_num_rows($res);
                if ($count > 0) {
                    while ($row = mysqli_fetch_assoc($res)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $type = $row['type'];
                        $barcode = $row['barcode'];
                        $dose = $row['dose'];
                        $code = $row['code'];
                        $cost_price = $row['cost_price'];
                        $selling_price = $row['selling_price'];
                        $expiry = $row['expiry'];
                        $company_name = $row['company_name'];
                        $production_date = $row['production_date'];
                        $expiration_date = $row['expiration_date'];
                        $place = $row['place'];
                        $quantity = $row['quantity'];
                       
                ?>
                        <tr>

                            <td><?php echo $id ?></td>
                            <td><?php echo $name ?></td>
                            <td><?php echo $type ?></td>
                            <td><?php echo $barcode ?></td>
                            <td><?php echo $dose ?></td>
                            <td><?php echo $code ?></td>
                            <td><?php echo $cost_price ?></td>
                            <td><?php echo $selling_price ?></td>
                            <td><?php echo $expiry ?></td>
                            <td><?php echo $company_name ?></td>
                            <td><?php echo $production_date ?></td>
                            <td><?php echo $expiration_date ?></td>
                            <td><?php echo $place ?></td>
                            <td><?php echo $quantity ?></td>
                            <td>
                                <a href="http://localhost/CSE485_K61_KTGK_1951060997/src/updDrugs.php?id=<?php echo $bd_id; ?>"><button type="button" class="btn btn-success"><i class="fas fa-user-edit"></i></button></a>
                            </td>
                            <td>
                                <a href="http://localhost/CSE485_K61_KTGK_1951060997/src/delDrugs.php?id=<?php echo $id; ?>"><button type="button" class="btn btn-danger"><i class="fas fa-user-minus"></i></button></a>
                            </td>
                            <td>
                                <a href="http://localhost/CSE485_K61_KTGK_1951060997/src/detailsDrugs.php?id=<?php echo $bd_id; ?>"><button type="button" class="btn btn-info"><i class="fas fa-info-circle"></i></button></a>
                            </td>
                        </tr>
                <?php

                    }
                }
                else{
                    header("Location:error.php");
                }
                ?>

            </tbody>
        </table>
 
</body>