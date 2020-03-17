<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "eduafgan";
    #echo "Movie Review of ".ucfirst($_POST['name'])."<br><br>";

    $dsn = "mysql:host=" . $servername . ";dbname=" . $dbname.";charset=utf8";
    $pdo = new PDO($dsn, $username, $password);
    ?>