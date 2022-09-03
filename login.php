<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- <link rel="stylesheet" href="login.css"> -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <script src="./bootstrap/js/bootstrap.js"></script>
    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        .marg {
            margin-top: 8%;
            margin-right: 17%;
            margin-left: 15%;
        }

        body {
            background-color: rgb(219, 226, 226);
        }

        .row {
            background: white;
            border-radius: 35px;
            box-shadow: 12px 12px 22px gray;
        }

        img {
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
            z-index: -1;
        }

        .btn1 {
            border: none;
            outline: none;
            height: 50px;
            width: 100%;
            border-radius: 4px;
            background-color: black;
            color: white;
            font-weight: bold;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        .btn1:hover {
            background-color: white;
            border: 3px solid;
            color: black;
        }

        .img-fluid {
            max-width: 100%;
            height: 100%;
        }

        .hed {
            position: absolute;
            left: 19%;
            width: 25%;
            top: 38%;
            color: white;
            font-size: 28px;
            text-shadow: 3px 3px 5px black ;
        }
        .hed2{
            position: absolute;
            left: 27%;
            width: 25%;
            top: 44%;
            color: white;
            font-size: 28px;
            text-shadow: 3px 3px 5px black ;
        }
    </style>
</head>

<body>
    <h2 class="hed">Nursery Management </h2>
    <h2 class="hed2">System</h2>
    <div class="marg">
        <section class="Form my-3 mx-3">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-5">
                        <img class="img-fluid" src="2.jpg" alt="#">
                    </div>
                    <div class="col-lg-7 px-5 pt-4">
                        <h1 class="font-weight-bold py-3 ">LOGIN</h1>
                        
                        <form action="home.php" method="POST">
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <input class="form-control my-3 p-2" placeholder="ENTER USER NAME" type="text" name="uname" id="uname" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <input class="form-control my-3 p-2" placeholder="ENTER PASSWORD" type="password" name="upass" id="upass" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <input type="submit" class="btn1 mt-3 mb-5" value="login">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>