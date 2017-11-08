<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/8
 * Time: 上午 10:04
 */
$n = $_POST['n'];
$m = $_POST['m'];
$c = $_POST
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
    margin-bottom: 0;
            border-radius: 0;
        }

        /* Add a gray background color and some padding to the footer */

    </style>
</head>
<body>
<h1 align="center">COLOR</h1>

<table border="2">

<?php

for ($i = 1;$i <= $n;$i++){
    echo "<tr>";
    for ($j = 1;$j <= $m;$j++){
       echo "<td><span style=text-align:center;'font-size: 2em'>" . $i *$j . "</span></td> ";
    }
    echo "</tr>";
}
?>
</table>

