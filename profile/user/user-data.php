<?php

session_start();

if (!isset($_SESSION['zone_id'])) {
    header('location: ../../login');
} else {

    include '../config.php';

    // User's data

    if (isset($_SESSION['zone_id']) && $_SESSION['zone_id'] != '') {

        $zone_id = $_SESSION['zone_id'];
        // Preparing Statement

        $stmt = $link->prepare("SELECT * FROM `zone_users` WHERE `zone_id` = ?");
        $stmt->bind_param("s", $zone_id);

        if ($stmt->execute()) {
            // Fetching data
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();

            $usr_name = $row['name'];
            $usr_uname = $row['uname'];
            $usr_mail = $row['mail'];
            $usr_phone = $row['phone'];
            $usr_sex = $row['sex'];
            $usr_profile = $row['profile'];
            $usr_interest = array($row['interest']);
            $usr_college = $row['college_id'];
            $usr_city = $row['city'];
            $usr_state = $row['state'];
            $usr_status = $row['status'];
            $usr_joined = $row['joined'];
            $usr_last_active = $row['last_active'];

            $login = 'user';
            $prefix = 'usr';
        }
        $stmt->close();
    }
    $link->close();
}
