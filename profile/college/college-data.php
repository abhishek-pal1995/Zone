<?php

session_start();

if (!isset($_SESSION['college_id'])) {
    header('location: ../../login');
} else {

    include '../config.php';

    // College's data

    if (isset($_SESSION['college_id']) && $_SESSION['college_id'] != '') {

        $college_id = $_SESSION['college_id'];
        // Preparing Statement

        $stmt = $link->prepare("SELECT * FROM `zone_colleges` WHERE `college_id` = ?");
        $stmt->bind_param("s", $college_id);

        if ($stmt->execute()) {
            // Fetching data
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();

            $clg_name = $row['name'];
            $clg_uname = $row['uname'];
            $clg_mail = $row['mail'];
            $clg_about = $row['about'];

            $clg_profile = $row['profile'];
            $clg_banner = $row['banner'];

            $clg_sp_1 = $row['sp_1'];
            $clg_sp_2 = $row['sp_2'];
            $clg_sp_3 = $row['sp_3'];
            $clg_sp_4 = $row['sp_4'];

            $clg_address = $row['address'];

            $clg_a_name = $row['a_name'];
            $clg_a_mail = $row['a_mail'];
            $clg_a_sex = $row['a_sex'];
            $clg_a_phone = $row['a_phone'];

            $clg_status = $row['status'];
            $clg_joined = $row['joined'];
            $clg_last_active = $row['last_active'];

            $login = 'college';
            $prefix ='clg';
        }
        $stmt->close();
    }
    $link->close();
}
