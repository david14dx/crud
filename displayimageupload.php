<?php

include 'connect.php';
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $mobile = $_POST['mobile'];
    $image = $_FILES['file'];

    // echo $username;
    // echo "<br>";
    // echo $mobile;
    // echo "<br>";
    // print_r($image);
    // echo "<br>";

    $imagefilename = $image['name'];
    // print_r($imagefilename);
    // echo "<br>";
    $imagefileerror = $image['error'];
    // print_r($imagefileerror);
    // echo "<br>";
    $imagefiletemp = $image['tmp_name'];
    // print_r($imagefiletemp);
    // echo "<br>";

    $filename_seperate = explode('.', $imagefilename);
    // print_r($filename_seperate);
    // echo "<br>";
    $file_extension = strtolower(end($filename_seperate));
    // print_r($file_extension);
    // echo "<br>";

    $extension = array('jpeg', 'jpg', 'png');
    if (in_array($file_extension, $extension)) {
        $upload_image = 'images/' . $imagefilename;
        move_uploaded_file($imagefiletemp, $upload_image);
        $sql = "INSERT INTO `tblregistration` (name, mobile, image) VALUES('$username', '$mobile', '$upload_image')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            //echo "Data inserted successfully";     
            echo '<div class="alert alert-success" role="alert">
            <strong>Success</strong> Data inserted successfully
                </div>';
        } else {
            die(mysqli_error($con));
        }
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Image Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        img{
            width:80px;
        }
    </style>
</head>

<body>
    <h1 class="text-center my-4">Displaying Image Upload Data</h1>
    <div class="container mt-5 d-flex justify-content-center">
        <table class="table table-hover table-bordered w-70">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Username</th>
                    <th scope="col">Image</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `tblregistration`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $image = $row['image'];
                        echo '<tr>
                            <th scope="row">' . $id . '</th>
                            <td>' . $name . '</td>
                            <td><img src=' . $image . ' /></td>                     
                            <td>
                            <button class="btn btn-primary"><a href="update.php? updateid=' . $id . '" class="text-light">Update</a></button>
                     
                            <button class="btn btn-danger"><a href="delete.php? deleteid=' . $id . '" class="text-light">Delete</a></button>
                        </td>
    
                        </tr>';
                    }
                }
                ?>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>

    </div>

</body>

</html>