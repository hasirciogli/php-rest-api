<?php

include "config.php";
include "database.php";
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>

<script>
    var settings = {
        "url": "https://hsrcpay.click/api/userController/login",
        "method": "POST",
        "timeout": 0,
        "headers": {
            "Acess-Control-Allow-Origin": "*",
            "client_id": "admin",
            "client_secret": "admin",
            "Content-Type": "application/x-www-form-urlencoded"
        },
        "data": {
            "username": "ali",
            "password": "mustafa"
        }
    };

    $.ajax(settings).done(function (response) {
        console.log(response);
    });
</script>

</body>
</html>
