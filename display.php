<?php
include 'connect.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Crud Operation</title>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col">
                <h1 class="display-1">CRUD Operation</h1>
            </div>
        </div>

        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add user</a>
        </button>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Student#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">mobile</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>

                <?php

                function displayemp()
                {
                    global $con;
                    $sql = "SELECT * FROM `tblStudent`";
                    $result = mysqli_query($con, $sql);
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            $name = $row['name'];
                            $email = $row['email'];
                            $mobile = $row['mobile'];
                            $image = $row['image'];
                            echo '<tr>
            <th scope="row">' . $id . '</th>
            <td>' . $name . '</td>
            <td>' . $email . '</td>
            <td>' . $mobile . '</td>
            <td>' . $image . '</td>

            <td>
            <button class="btn btn-primary"><a href="update.php? updateid=' . $id . '" class="text-light">Update</a></button>
     
            <button class="btn btn-danger"><a href="delete.php? deleteid=' . $id . '" class="text-light">Delete</a></button>
        </td>

        </tr>';
                        }
                    }
                }

                displayemp();

                ?>



            </tbody>
        </table>
    </div>

</body>

</html>