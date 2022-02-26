<?php

session_start();

if (!isset($_SESSION['zone_id']) && !isset($_SESSION['college_id']) && !isset($_SESSION['club_id']) && !isset($_SESSION['society_id'])) {
    header('location: login');
} else {

    include 'config.php';

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
            $prefix = 'clg';
        }
        $stmt->close();
    }

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
