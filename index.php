<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <script src="./bootstrap/js/bootstrap.js"></script>
    <style>
        .hed{
            margin-left: 75%;
        }
    </style>
</head>

<body>
    <header class="header">
        <!-- <img src="4.jpg" class="bg" alt="Nursery Management System"> -->
        <!-- <img src="ait.png" class="ait" alt="ait logo"> -->
        <div class="hed">
            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto mb-4 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Product
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Nursery Plant</a></li>
                                    <li><a class="dropdown-item" href="#">Vermi Compost</a></li>
                                    <li><a class="dropdown-item" href="#">Coco-Peat</a></li>
                                </ul>
                            <li class="nav-item">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Labour
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Add Labour</a></li>
                                    <li><a class="dropdown-item" href="#">Attendance</a></li>
                                    <li><a class="dropdown-item" href="#">Salary</a></li>
                                    <li><a class="dropdown-item" href="#">Edit Details</a></li>
                                </ul>
                            <li class="nav-item">
                                <a class="nav-link" href="#">contact</a>
                            </li>
                            </li>

                        </ul>

                    </div>
                </div>
            </nav>
        </div>
    </header>
    <h1 class="zxc">Nursery Management System</h1>

</body>

</html>