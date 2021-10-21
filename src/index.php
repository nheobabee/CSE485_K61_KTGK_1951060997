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


    <div class="container">
        <br>
        <a href="./addDrugs.php"><button type="button" class="btn btn-primary"> ADD DRUGS</button></a>
        <br> <br> <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">drugs name</th>
                    <th scope="col">drugs type</th>
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
                            <td>
                                <a href="http://localhost/CSE485_K61_KTGK_1951060997/src/updDrugs.php?id=<?php echo $id; ?>"><button type="button" class="btn btn-success"><i class="fas fa-user-edit"></i>UPDATE</button></a>
                            </td>
                            <td>
                                <a href="http://localhost/CSE485_K61_KTGK_1951060997/src/delDrugs.php?id=<?php echo $id; ?>"><button type="button" class="btn btn-danger"><i class="fas fa-user-minus"></i>DELETE</button></a>
                            </td>
                            <td>
                                <a href="http://localhost/CSE485_K61_KTGK_1951060997/src/detailsDrugs.php?id=<?php echo $id; ?>"><button type="button" class="btn btn-info"><i class="fas fa-info-circle"></i>DETAILS</button></a>
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

    </div>
</body>