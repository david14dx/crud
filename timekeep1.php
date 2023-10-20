<?php
include 'connect.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ... your head content ... -->
</head>

<body class="bg-info">
    <div class="container-fluid">
        <div class="row mt-5">
            <!-- ... your header content ... -->
        </div>
        <div class="row">
            <!-- ... date and time ... -->
        </div>

        <div class="row">
            <!-- ... your form ... -->
            <div class="col-sm-11">
                <form method="POST" id="searchForm">
                    <h1>Employee ID: <span id="employeeId"><?php echo $_SESSION["id"]; ?></span></h1>
                    <input type="text" name="search" id="search" placeholder="Search Data">
                    <button class="btn btn-primary" type="submit" name="submit">Search</button>
                </form>
            </div>
        </div>

        <div class="row">
            <!-- ... footer ... -->
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script>
        // Add an event listener to the form for handling the search
        document.getElementById("searchForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent the form from submitting and refreshing the page

            // Fetch and display the employee ID
            fetchEmployeeId(document.getElementById("search").value);
        });

        function fetchEmployeeId(searchTerm) {
            // Make an AJAX request to fetch the employee ID
            fetch("search_employee.php?search=" + searchTerm) // Change this URL to the PHP script that handles the search
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        document.getElementById("employeeId").textContent = data.id;
                    } else {
                        document.getElementById("employeeId").textContent = "No records found.";
                    }
                })
                .catch(error => {
                    console.error("An error occurred:", error);
                });
        }

        // ... your date and time script ...
    </script>
</body>

</html>