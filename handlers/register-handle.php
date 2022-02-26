<?php

include 'config.php';

// ****************************************************************

//Setting Default TimeZone for India

date_default_timezone_set("Asia/Kolkata");

// Gives the Current DateTime

$timestamp = date("Y-m-d H:i:s");

// ****************************************************************


// For user formdata instertion

if (isset($_POST['formValue']) && $_POST["formValue"] == 'usr') {

    // Fetch all data after ajax request

    $usr_name = mysqli_real_escape_string($link, $_POST['usr-fname']) . ' ' . mysqli_real_escape_string($link, $_POST['usr-lname']);
    $usr_uname = mysqli_real_escape_string($link, $_POST['usr-uname']);
    $usr_email = mysqli_real_escape_string($link, $_POST['usr-email']);
    $usr_college = mysqli_real_escape_string($link, $_POST['usr-college']);
    $usr_foi = mysqli_real_escape_string($link, $_POST['usr-foi']);
    $usr_sex = mysqli_real_escape_string($link, $_POST['usr-sex']);
    $usr_phone = mysqli_real_escape_string($link, $_POST['usr-phone']);
    $temp_pass = mysqli_real_escape_string($link, $_POST['usr-pass']);

    // Generating new Id and checking if it already exists

    $zone_id = zoneId();

    $unique = checkId($zone_id);

    while ($unique == false) {
        $zone_id = zoneId();
        $unique = checkId($zone_id);
    }

    //Generate a random string.
    $token = openssl_random_pseudo_bytes(16);

    //Convert the binary data into hexadecimal representation.
    $token = bin2hex($token);

    // if Everything is OK Preparing for the data Insertion

    if ($unique == true) {

        $usr_pass =  password_hash($temp_pass, PASSWORD_BCRYPT);

        $status = 'Not Verified';

        // Prepare SQL Statement

        $stmt = $link->prepare("INSERT INTO `zone_users`(`zone_id`, `name`, `uname`, `mail`, `phone`, `sex`, `interest`, `college_id`, `passcode`, `token`, `status`, `joined`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        $stmt->bind_param("isssississss", $zone_id, $usr_name, $usr_uname, $usr_email, $usr_phone, $usr_sex, $usr_foi, $usr_college, $usr_pass, $token, $status, $timestamp);

        // Execute the Statement and Insert the data

        if ($stmt->execute()) {
            echo 'Submitted';
        } else {
            $fetch_error = explode(' ', $stmt->error);
            $real_error = array_pop($fetch_error);
            if ($real_error === "'uname'") {
                echo 'Username already Exists Please, Try with Different Username';
            }
            if ($real_error === "'mail'") {
                echo 'Email already Exists Please, Try with Different Email';
            }
            if ($real_error === "'phone'") {
                echo 'Phone Number already Exists, Please Try with Different Phone Number';
            }
        }

        $stmt->close();
        $link->close();
    }
}



// For college formdata instertion

if (isset($_POST['formValue']) && $_POST["formValue"] == 'clg') {

    // Fetch all data after ajax request

    $clg_name = mysqli_real_escape_string($link, $_POST['clg-name']);
    $clg_uname = mysqli_real_escape_string($link, $_POST['clg-uname']);
    $clg_email = mysqli_real_escape_string($link, $_POST['clg-email']);
    $clg_about = mysqli_real_escape_string($link, $_POST['clg-about']);

    $clg_sp_1 = mysqli_real_escape_string($link, $_POST['clg-sp-1']);
    $clg_sp_2 = mysqli_real_escape_string($link, $_POST['clg-sp-2']);
    $clg_sp_3 = mysqli_real_escape_string($link, $_POST['clg-sp-3']);
    $clg_sp_4 = mysqli_real_escape_string($link, $_POST['clg-sp-4']);


    $clg_address = mysqli_real_escape_string($link, $_POST['clg-landmark']) . mysqli_real_escape_string($link, $_POST['clg-street']) . mysqli_real_escape_string($link, $_POST['clg-city']) . mysqli_real_escape_string($link, $_POST['clg-state']) . mysqli_real_escape_string($link, $_POST['clg-zip']);

    $admin_name = mysqli_real_escape_string($link, $_POST['clg-a-name']);
    $admin_mail = mysqli_real_escape_string($link, $_POST['clg-a-email']);
    $admin_sex = mysqli_real_escape_string($link, $_POST['clg-a-sex']);
    $admin_phone = mysqli_real_escape_string($link, $_POST['clg-a-phone']);

    $name_profile = $_FILES['clg-profile-img']['name'];
    $name_banner = $_FILES['clg-banner-img']['name'];
    $temp_profile = $_FILES['clg-profile-img']['tmp_name'];
    $temp_banner = $_FILES['clg-banner-img']['tmp_name'];

    $temp_pass = mysqli_real_escape_string($link, $_POST['clg-pass']);

    // Generating new Id and checking if it already exists

    $college_id = clgId();

    $unique = checkId($college_id);

    while ($unique == false) {
        $college_id = clgId();
        $unique = checkId($college_id);
    }

    // if Everything is OK Preparing for the data Insertion

    if ($unique == true) {

        // Checking Input file Extensions

        $profile_ext = pathinfo($name_profile, PATHINFO_EXTENSION);
        $banner_ext = pathinfo($name_banner, PATHINFO_EXTENSION);

        if (fileCheck($profile_ext) == true && fileCheck($banner_ext) == true) {

            $clg_profile_img = 'clg' . $college_id . '.' . $profile_ext;
            $clg_banner_img = 'clg' . $college_id . '.' . $banner_ext;

            $profile_upload_path = '../profile/images/college/profile/' . $clg_profile_img;
            $banner_upload_path = '../profile/images/college/banner/' . $clg_banner_img;

            $profile_upload_link = 'images/college/profile/' . $clg_profile_img;
            $banner_upload_link = 'images/college/banner/' . $clg_banner_img;

            $clg_pass =  password_hash($temp_pass, PASSWORD_BCRYPT);

            // Prepare SQL Statement

            $stmt = $link->prepare("INSERT INTO `zone_colleges`(`college_id`, `name`, `uname`, `mail`, `about`, `sp_1`, `sp_2`, `sp_3`, `sp_4`, `address`, `a_name`, `a_mail`, `a_sex`, `a_phone`, `profile`, `banner`, `passcode`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

            $stmt->bind_param("issssssssssssisss", $college_id, $clg_name, $clg_uname, $clg_email, $clg_about, $clg_sp_1, $clg_sp_2, $clg_sp_3, $clg_sp_4, $clg_address, $admin_name, $admin_mail, $admin_sex, $admin_phone, $profile_upload_link, $banner_upload_link, $clg_pass);

            // Execute the Statement and Insert the data

            if ($stmt->execute()) {
                if (move_uploaded_file($temp_profile, $profile_upload_path) && move_uploaded_file($temp_banner, $banner_upload_path)) {
                    echo 'Submitted';
                } else {
                    echo 'File upload Error';
                }
            } else {
                $fetch_error = explode(' ', $stmt->error);
                $real_error = array_pop($fetch_error);
                if ($real_error === "'uname'") {
                    echo 'Username already Exists Please, Try with Different Username';
                }
                if ($real_error === "'mail'") {
                    echo 'Email already Exists Please, Try with Different Email';
                }
                if ($real_error === "'a_phone'") {
                    echo 'Phone Number already Exists, Please Try with Different Phone Number';
                }
            }

            $stmt->close();
            $link->close();
        }
    }
}



// For Club formdata instertion

if (isset($_POST['formValue']) && $_POST["formValue"] == 'clb') {

    // Fetch all data after ajax request

    $clb_name = mysqli_real_escape_string($link, $_POST['clb-name']);
    $clb_uname = mysqli_real_escape_string($link, $_POST['clb-uname']);
    $clb_email = mysqli_real_escape_string($link, $_POST['clb-email']);
    $clb_college = mysqli_real_escape_string($link, $_POST['clb-college']);
    $clb_about = mysqli_real_escape_string($link, $_POST['clb-about']);

    $clb_sp_1 = mysqli_real_escape_string($link, $_POST['clb-sp-1']);
    $clb_sp_2 = mysqli_real_escape_string($link, $_POST['clb-sp-2']);
    $clb_sp_3 = mysqli_real_escape_string($link, $_POST['clb-sp-3']);
    $clb_sp_4 = mysqli_real_escape_string($link, $_POST['clb-sp-4']);

    $admin_name = mysqli_real_escape_string($link, $_POST['clb-a-name']);
    $admin_mail = mysqli_real_escape_string($link, $_POST['clb-a-email']);
    $admin_sex = mysqli_real_escape_string($link, $_POST['clb-a-sex']);
    $admin_phone = mysqli_real_escape_string($link, $_POST['clb-a-phone']);

    $name_profile = $_FILES['clb-profile-img']['name'];
    $name_banner = $_FILES['clb-banner-img']['name'];
    $temp_profile = $_FILES['clb-profile-img']['tmp_name'];
    $temp_banner = $_FILES['clb-banner-img']['tmp_name'];

    $temp_pass = mysqli_real_escape_string($link, $_POST['clb-pass']);

    // Generating new Id and checking if it already exists

    $club_id = clbId();

    $unique = checkId($club_id);

    while ($unique == false) {
        $club_id = clbId();
        $unique = checkId($club_id);
    }

    // if Everything is OK Preparing for the data Insertion

    if ($unique == true) {

        // Checking Input file Extensions

        $profile_ext = pathinfo($name_profile, PATHINFO_EXTENSION);
        $banner_ext = pathinfo($name_banner, PATHINFO_EXTENSION);

        if (fileCheck($profile_ext) == true && fileCheck($banner_ext) == true) {

            $clb_profile_img = 'clb' . $club_id . '.' . $profile_ext;
            $clb_banner_img = 'clb' . $club_id . '.' . $banner_ext;

            $profile_upload_path = '../profile/images/club/profile/' . $clb_profile_img;
            $banner_upload_path = '../profile/images/club/banner/' . $clb_banner_img;

            $profile_upload_link = 'images/club/profile/' . $clb_profile_img;
            $banner_upload_link = 'images/club/banner/' . $clb_banner_img;

            $clb_pass =  password_hash($temp_pass, PASSWORD_BCRYPT);

            // Prepare SQL Statement

            $stmt = $link->prepare("INSERT INTO `zone_clubs`(`club_id`, `name`, `uname`, `mail`, `college_id`, `about`, `sp_1`, `sp_2`, `sp_3`, `sp_4`, `a_name`, `a_mail`, `a_sex`, `a_phone`, `profile`, `banner`, `passcode`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

            $stmt->bind_param("isssissssssssisss", $club_id, $clb_name, $clb_uname, $clb_email, $clb_college, $clb_about, $clb_sp_1, $clb_sp_2, $clb_sp_3, $clb_sp_4, $admin_name, $admin_mail, $admin_sex, $admin_phone, $profile_upload_link, $banner_upload_link, $clb_pass);

            // Execute the Statement and Insert the data

            if ($stmt->execute()) {
                if (move_uploaded_file($temp_profile, $profile_upload_path) && move_uploaded_file($temp_banner, $banner_upload_path)) {
                    echo 'Submitted';
                } else {
                    echo 'File upload Error';
                }
            } else {
                $fetch_error = explode(' ', $stmt->error);
                $real_error = array_pop($fetch_error);
                if ($real_error === "'uname'") {
                    echo 'Username already Exists Please, Try with Different Username';
                }
                if ($real_error === "'mail'") {
                    echo 'Email already Exists Please, Try with Different Email';
                }
                if ($real_error === "'a_phone'") {
                    echo 'Phone Number already Exists, Please Try with Different Phone Number';
                }
            }

            $stmt->close();
            $link->close();
        }
    }
}



// For Society formdata instertion

if (isset($_POST['formValue']) && $_POST["formValue"] == 'sty') {

    // Fetch all data after ajax request

    $sty_name = mysqli_real_escape_string($link, $_POST['sty-name']);
    $sty_uname = mysqli_real_escape_string($link, $_POST['sty-uname']);
    $sty_email = mysqli_real_escape_string($link, $_POST['sty-email']);
    $sty_college = mysqli_real_escape_string($link, $_POST['sty-college']);
    $sty_about = mysqli_real_escape_string($link, $_POST['sty-about']);

    $sty_sp_1 = mysqli_real_escape_string($link, $_POST['sty-sp-1']);
    $sty_sp_2 = mysqli_real_escape_string($link, $_POST['sty-sp-2']);
    $sty_sp_3 = mysqli_real_escape_string($link, $_POST['sty-sp-3']);
    $sty_sp_4 = mysqli_real_escape_string($link, $_POST['sty-sp-4']);

    $admin_name = mysqli_real_escape_string($link, $_POST['sty-a-name']);
    $admin_mail = mysqli_real_escape_string($link, $_POST['sty-a-email']);
    $admin_sex = mysqli_real_escape_string($link, $_POST['sty-a-sex']);
    $admin_phone = mysqli_real_escape_string($link, $_POST['sty-a-phone']);

    $name_profile = $_FILES['sty-profile-img']['name'];
    $name_banner = $_FILES['sty-banner-img']['name'];
    $temp_profile = $_FILES['sty-profile-img']['tmp_name'];
    $temp_banner = $_FILES['sty-banner-img']['tmp_name'];

    $temp_pass = mysqli_real_escape_string($link, $_POST['sty-pass']);

    // Generating new Id and checking if it already exists

    $society_id = styId();

    $unique = checkId($society_id);

    while ($unique == false) {
        $society_id = styId();
        $unique = checkId($society_id);
    }

    // if Everything is OK Preparing for the data Insertion

    if ($unique == true) {

        // Checking Input file Extensions

        $profile_ext = pathinfo($name_profile, PATHINFO_EXTENSION);
        $banner_ext = pathinfo($name_banner, PATHINFO_EXTENSION);

        if (fileCheck($profile_ext) == true && fileCheck($banner_ext) == true) {

            $sty_profile_img = 'sty' . $society_id . '.' . $profile_ext;
            $sty_banner_img = 'sty' . $society_id . '.' . $banner_ext;

            $profile_upload_path = '../profile/images/society/profile/' . $sty_profile_img;
            $banner_upload_path = '../profile/images/society/banner/' . $sty_banner_img;

            $profile_upload_link = 'images/society/profile/' . $sty_profile_img;
            $banner_upload_link = 'images/society/banner/' . $sty_banner_img;

            $sty_pass =  password_hash($temp_pass, PASSWORD_BCRYPT);

            // Prepare SQL Statement

            $stmt = $link->prepare("INSERT INTO `zone_societies`(`society_id`, `name`, `uname`, `mail`, `college_id`, `about`, `sp_1`, `sp_2`, `sp_3`, `sp_4`, `a_name`, `a_mail`, `a_sex`, `a_phone`, `profile`, `banner`, `passcode`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

            $stmt->bind_param("isssissssssssisss", $society_id, $sty_name, $sty_uname, $sty_email, $sty_college, $sty_about, $sty_sp_1, $sty_sp_2, $sty_sp_3, $sty_sp_4, $admin_name, $admin_mail, $admin_sex, $admin_phone, $profile_upload_link, $banner_upload_link, $sty_pass);

            // Execute the Statement and Insert the data

            if ($stmt->execute()) {
                if (move_uploaded_file($temp_profile, $profile_upload_path) && move_uploaded_file($temp_banner, $banner_upload_path)) {
                    echo 'Submitted';
                } else {
                    echo 'File upload Error';
                }
            } else {
                $fetch_error = explode(' ', $stmt->error);
                $real_error = array_pop($fetch_error);
                if ($real_error === "'uname'") {
                    echo 'Username already Exists Please, Try with Different Username';
                }
                if ($real_error === "'mail'") {
                    echo 'Email already Exists Please, Try with Different Email';
                }
                if ($real_error === "'a_phone'") {
                    echo 'Phone Number already Exists, Please Try with Different Phone Number';
                }
            }

            $stmt->close();
            $link->close();
        }
    }
}





// Generate Random Id's

function zoneId()
{
    $zone_id = rand(100000000000, 999999999999);
    return $zone_id;
}
function clgId()
{
    $clg_id = rand(10000000, 99999999);
    return $clg_id;
}
function clbId()
{
    $clb_id = rand(1000000000, 9999999999);
    return $clb_id;
}
function styId()
{
    $sty_id = rand(100000000, 999999999);
    return $sty_id;
}



// Checking if the Id's are unique

function checkId(int $n)
{
    include 'config.php';

    if ($n >= 100000000000 && $n <= 999999999999) {
        $stmt = $link->prepare("SELECT * FROM `zone_users` WHERE `zone_id` = ?");
        $stmt->bind_param("i", $n);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows) {
            return false;
        } else {
            return true;
        }
    }

    if ($n >= 10000000 && $n <= 99999999) {
        $stmt = $link->prepare("SELECT * FROM `zone_colleges` WHERE `college_id` = ?");
        $stmt->bind_param("i", $n);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows) {
            return false;
        } else {
            return true;
        }
    }

    if ($n >= 1000000000 && $n <= 9999999999) {
        $stmt = $link->prepare("SELECT * FROM `zone_clubs` WHERE `club_id` = ?");
        $stmt->bind_param("i", $n);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows) {
            return false;
        } else {
            return true;
        }
    }

    if ($n >= 100000000 && $n <= 999999999) {
        $stmt = $link->prepare("SELECT * FROM `zone_societies` WHERE `society_id` = ?");
        $stmt->bind_param("i", $n);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows) {
            return false;
        } else {
            return true;
        }
    }
}


function fileCheck($ext)
{
    $valid_ext = array("jpg", "jpeg", "png");

    if (in_array($ext, $valid_ext)) {
        return true;
    } else {
        return false;
    }
}
