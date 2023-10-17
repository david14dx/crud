<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="/style.css" class="rel">

</head>

<body class="bg-info">
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col"></div>
            <div class="col-11 text-bg-light ">
                <p class="h1 h1david text-center">Immaculate Conception I-College of Arts and Technology</p>
                <p class="h1 text-center">#47 A. Bonifacio St. Poblacion Santa Maria Bulacan</p>
            </div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col-sm-4 bg-info-subtle text-danger-emphasis">
                <p class="h1 h1david"> DATE : <?php echo date("M-d-Y"); ?>
                </p>
            </div>
            <div class="col-sm-7 bg-info-subtle text-danger-emphasis">
                <p class="h1 h1david"> TIME : <?php date_default_timezone_set('Asia/Manila');
                                                echo date(" h : i : s a"); ?>
                </p>
            </div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col-sm-4 bg-light">
                <img src="images/ICILogo.jpg" class="img-fluid" alt="Responsive image" width="100%">
            </div>
            <div class="col-sm-7 bg-body-tertiary">
                <div class="row mt-3">
                    <div class="col bg-primary-subtle"></div>
                    <div class="col-sm-11">
                        <p class="h1 h1david"> Employee ID : </p>
                        <p class="h1 h1david"> Name : </p>
                        <p class="h1 h1david"> Position : </p>
                        <p class="h1 h1david"> Department : </p>
                        <p class="h1 h1david"> Time Stamp : </p>
                    </div>
                    <div class="col bg-primary-subtle"></div>
                </div>
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>