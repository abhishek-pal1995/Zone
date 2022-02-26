<?php

session_start();

if (!isset($_SESSION['society_id'])) {
    header('location: ../../login');
} else {

    include '../config.php';

    // Society's data

    if (isset($_SESSION['society_id']) && $_SESSION['society_id'] != '') {

        $society_id = $_SESSION['society_id'];
        // Preparing Statement

        $stmt = $link->prepare("SELECT * FROM `zone_societies` WHERE `society_id` = ?");
        $stmt->bind_param("s", $society_id);

        if ($stmt->execute()) {
            // Fetching data
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();

            $sty_name = $row['name'];
            $sty_uname = $row['uname'];
            $sty_mail = $row['mail'];
            $sty_college = $row['college_id'];
            $sty_about = $row['about'];

            $sty_profile = $row['profile'];
            $sty_banner = $row['banner'];

            $sty_sp_1 = $row['sp_1'];
            $sty_sp_2 = $row['sp_2'];
            $sty_sp_3 = $row['sp_3'];
            $sty_sp_4 = $row['sp_4'];

            $sty_a_name = $row['a_name'];
            $sty_a_mail = $row['a_mail'];
            $sty_a_sex = $row['a_sex'];
            $sty_a_phone = $row['a_phone'];

            $sty_status = $row['status'];
            $sty_joined = $row['joined'];
            $sty_last_active = $row['last_active'];

            $login = 'society';
            $prefix = 'sty';
        }
        $stmt->close();
    }
    $link->close();
}
