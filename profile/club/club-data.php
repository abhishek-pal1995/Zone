<?php

session_start();

if (!isset($_SESSION['club_id'])) {
    header('location: ../../login');
} else {

    include '../config.php';

    // Club's data

    if (isset($_SESSION['club_id']) && $_SESSION['club_id'] != '') {

        $club_id = $_SESSION['club_id'];
        // Preparing Statement

        $stmt = $link->prepare("SELECT * FROM `zone_clubs` WHERE `club_id` = ?");
        $stmt->bind_param("s", $club_id);

        if ($stmt->execute()) {
            // Fetching data
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();

            $clb_name = $row['name'];
            $clb_uname = $row['uname'];
            $clb_mail = $row['mail'];
            $clb_college = $row['college_id'];
            $clb_about = $row['about'];

            $clb_profile = $row['profile'];
            $clb_banner = $row['banner'];

            $clb_sp_1 = $row['sp_1'];
            $clb_sp_2 = $row['sp_2'];
            $clb_sp_3 = $row['sp_3'];
            $clb_sp_4 = $row['sp_4'];

            $clb_a_name = $row['a_name'];
            $clb_a_mail = $row['a_mail'];
            $clb_a_sex = $row['a_sex'];
            $clb_a_phone = $row['a_phone'];

            $clb_status = $row['status'];
            $clb_joined = $row['joined'];
            $clb_last_active = $row['last_active'];

            $login = 'club';
            $prefix = 'clb';
        }
        $stmt->close();
    }
    $link->close();
}
