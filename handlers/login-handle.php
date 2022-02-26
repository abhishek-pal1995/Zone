<?php

session_start();

include 'config.php';

// For Login Procedure

if (isset($_POST['formValue']) && $_POST["formValue"] != '') {

    // Fetch all data after ajax request

    $frmValue = mysqli_real_escape_string($link, $_POST['formValue']);

    $login = mysqli_real_escape_string($link, $_POST['login']);
    $temp_pass = mysqli_real_escape_string($link, $_POST['passcode']);

    // Manipulating Data

    if ($frmValue == 'usr') {
        $table = 'zone_users';
        $session_key_id = 'zone_id';
    }
    if ($frmValue == 'clg') {
        $table = 'zone_colleges';
        $session_key_id = 'college_id';
    }
    if ($frmValue == 'clb') {
        $table = 'zone_clubs';
        $session_key_id = 'club_id';
    }
    if ($frmValue == 'sty') {
        $table = 'zone_societies';
        $session_key_id = 'society_id';
    }

    // Preparing Statement

    $stmt = $link->prepare("SELECT * FROM $table WHERE `uname` = ? OR `mail` = ?");
    $stmt->bind_param("ss", $login, $login);

    if ($stmt->execute()) {

        // Fetching data

        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        // Checking if data is correct

        if ($row) {
            $pass = $row['passcode'];
            if (password_verify($temp_pass, $pass)) {
                echo 'Account Login Successfull';
                $_SESSION[$session_key_id] = $row[$session_key_id];
            } else {
                echo 'pass';
            }
        } else {
            echo 'login';
        }
        $stmt->close();
        $link->close();
    } else {
        echo 'Something went wrong : query error';
        $stmt->close();
        $link->close();
    }
}
