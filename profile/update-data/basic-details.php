<?php

session_start();

include 'config.php';

if (isset($_POST['name']) && $_POST['name'] != '') {

    $user = $_SESSION['zone_id'];

    $name = mysqli_real_escape_string($link, $_POST['name']);
    $value = mysqli_real_escape_string($link, $_POST['value']);

    $stmt = "UPDATE `zone_users` SET $name = '$value' WHERE `zone_id` = $user";

    $result = mysqli_query($link, $stmt);
    if ($result) {
        echo 'Details updated';
    } else {
        echo 'Problem in Updating details';
        echo mysqli_error($link);
    }
}
