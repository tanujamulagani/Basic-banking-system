<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Banking System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/navbar.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    
</head>
<body>

<?php
include 'navbar.php';
?>

    <div class="container-fluid">
        <!-- Introduction section -->
        <div class="row intro py-1" >
            <div class="col-sm-12 col-md">
                <div class="heading text-center my-5" style="color :#145DA0">
                    <h3 style="color :#145DA0">Welcome to</h3>
                    <h1 style="color :#145DA0">CITIZENS BANK</h1>
                    <h2 style="color :#145DA0">your perfect banking partner....</h2>
                    <p>Citizens Bank offers personal  banking, student loans, home equity products, credit cards, and more. You're
                    made ready and so are we.</p>
                </div>
            </div>
            <div class="col-sm-12 col-md img text-center">
                <img src="img/logo.png" class="img-fluid pt-2">
            </div>
        </div>
    <div class="row activity text-center" id="down">
        <div class="col-md act">
            <img src="img/icon.png" class="img-fluid">
            <br>
            <a href="createuser.php"><button style="background-color:rgb(152,152,152);">Create a User</button></a>
        </div>
        <div class="col-md act">
            <img src="img/money.png" class="img-fluid">
            <br>
            <a href="transfermoney.php"><button style="background-color : rgb(152,152,152);">Make a Transaction</button></a>
        </div>
        <div class="col-md act">
            <img src="img/history.png" class="img-fluid">
            <br>
            <a href="transactionhistory.php"><button style="background-color :  rgb(152,152,152);">Transaction History</button></a>
        </div>
    </div>
    </div>
    
    <footer class="text-center mt-5 py-2" style=" background-color: #ADD8E6">
        <p>&copy copyrights 2021. Made by <b>TANUJA MULAGANI</b> <br> Citizens bank</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</body>
</html>