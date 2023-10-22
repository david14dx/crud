<?php

include 'connect.php';
if (isset($_POST['input'])) {
    $input = $_POST['input'];

    $query = "SELECT * FROM `tblstudent` WHERE ID='{$input}'";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) { ?>

        <body class="bg-info" id="body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col"></div>
                    <div class="col-sm-4 bg-light">
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            $name = $row['name'];
                            $email = $row['email'];
                            $mobile = $row['mobile'];
                            $image = $row['image'];
                            if (empty($image)) {
                                $image = "/images/ICIlogo.jpg";
                            }
                        }
                        ?>

                        <img src="<?php echo $image; ?>" class="img-fluid" alt="Responsive image" width="100%">
                    </div>
                    <div class="col-sm-6 bg-body-tertiary">
                        <div class="row mt-3" style="padding-top: 80px;">
                            <div class="col "></div>
                            <div class="col-sm-11">

                                <h1> Employee ID : <?php echo $id; ?></h1>
                                <h1> Name : <?php echo $name; ?></h1>
                                <h1> Email : <?php echo $email; ?></h1>
                                <h1> Mobile : <?php echo $mobile; ?></h1>

                            </div>
                            <div class="col "></div>
                        </div>
                    </div>
                    <div class="col-sm-1 bg-light">

                    </div>
                    <div class="col"></div>
                </div>
                <div class="row">
                    <div class="col"></div>
                    <div class="col-11 bg-info-subtle">
                        <p class="h1"> https://iciap.edu.ph/ | Telephone No. (044) 795-9609 </p>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </body>



<?php
    } else {
        echo "<h1 class='text-danger text-center mt-3 bg-warning'>No data Found </h1>";
    }
}
?>