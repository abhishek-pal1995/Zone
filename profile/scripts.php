<?php

if ($_POST['action'] && $_POST['action'] == 'makeRequest') {
    makeRequest($_POST['requester'], $_POST['connector']);
}

// ***********************************************************************************************************************************************************************

// Function for Getting Total Number of followers

function getTotal($requester)
{
    include 'config.php';

    if ($requester >= 100000000000 && $requester <= 999999999999) {

        $status = 'Connected';

        $stmt = $link->prepare("SELECT COUNT(`zone_id`) AS `Total` FROM `user_connections` WHERE `requester_id` = ? AND `status` = ?");
        $stmt->bind_param("is", $requester, $status);

        $stmt->execute();

        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        echo $row['Total'];
    }

    if ($requester >= 10000000 && $requester <= 99999999) {

        $status = 'Joined';

        $stmt = $link->prepare("SELECT COUNT(`zone_id`) AS `Total` FROM `college_connections` WHERE `college_id` = ? AND `status` = ?");
        $stmt->bind_param("is", $requester, $status);

        $stmt->execute();

        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        $member = $row['Total'];

        $stmt = $link->prepare("SELECT COUNT(`zone_id`) AS `Total` FROM `zone_users` WHERE `college_id` = ?");
        $stmt->bind_param("i", $requester);

        $stmt->execute();

        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        $students = $row['Total'];

        echo ($member + $students);
    }

    if ($requester >= 1000000000 && $requester <= 9999999999) {

        $status = 'Joined';

        $stmt = $link->prepare("SELECT COUNT(`zone_id`) AS `Total` FROM `club_connections` WHERE `club_id` = ? AND `status` = ?");
        $stmt->bind_param("is", $requester, $status);

        $stmt->execute();

        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        echo $row['Total'];
    }

    if ($requester >= 100000000 && $requester <= 999999999) {

        $status = 'Joined';

        $stmt = $link->prepare("SELECT COUNT(`zone_id`) AS `Total` FROM `society_connections` WHERE `society_id` = ? AND `status` = ?");
        $stmt->bind_param("is", $requester, $status);

        $stmt->execute();

        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        echo $row['Total'];
    }

    $stmt->close();
    $link->close();
}

// ***********************************************************************************************************************************************************************



// ***********************************************************************************************************************************************************************

// Function for Making Connection Request

function makeRequest($requester, $connector)
{
    include 'config.php';

    date_default_timezone_set("Asia/Kolkata");

    $timestamp = date("Y-m-d H:i:s");

    $status = 'Pending';

    $stmt = $link->prepare("INSERT INTO `user_connections`(`zone_id`, `requester_id`, `status`, `settled_on`) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("iiss", $connector, $requester, $status, $timestamp);

    if ($stmt->execute()) {
        echo 'Requested';

        $msg = 'User <a href="' . $requester . '">' . getName($requester) . '</a> requested a connection to you';

        $type = 0;

        $stmt = $link->prepare("INSERT INTO `note_users`(`notify_to`, `type`, `message`, `created_on`) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("iiss", $connector, $type, $msg, $timestamp);

        $stmt->execute();
    } else {
        echo 'Problem in Making Request';
    }

    $stmt->close();
    $link->close();
}

// ***********************************************************************************************************************************************************************



// ***********************************************************************************************************************************************************************

// Function for Accepting Connection Request

function acceptRequest($acceptor, $connector)
{
    include 'config.php';

    date_default_timezone_set("Asia/Kolkata");

    $timestamp = date("Y-m-d H:i:s");

    $stmt = $link->prepare("INSERT INTO `user_connections`(`zone_id`, `requester_id`, `status`, `settled_on`) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("iiss", $connector, $acceptor, 'Connected', $timestamp);

    if ($stmt->execute()) {
        echo 'Connected';

        $msg = 'User <a href="' . $acceptor . '">' . getName($acceptor) . '</a> accepted your request for connection';

        $stmt = $link->prepare("INSERT INTO `note_users`(`notify_to`, `type`, `message`, `created_on`) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("iiss", $connector, 0, $msg, $timestamp);

        $stmt->execute();
    } else {
        echo 'Problem in Accepting Request';
    }

    $stmt->close();
    $link->close();
}

// ***********************************************************************************************************************************************************************



// ***********************************************************************************************************************************************************************

// Function for Getting Follower's Data

function getFollowers($requester)
{
    include 'config.php';

    if ($requester >= 100000000000 && $requester <= 999999999999) {

        $stmt = $link->prepare("SELECT * FROM `user_connections` WHERE `requester_id` = ? AND `status` = ?");
        $stmt->bind_param("is", $requester, 'Connected');

        $stmt->execute();

        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        echo $row['zone_id'];
        echo getName($row['zone_id']);
        echo getProfile($row['zone_id']);
    }

    if ($requester >= 10000000 && $requester <= 99999999) {

        $stmt = $link->prepare("SELECT COUNT(`college_id`) AS `Total` FROM `college_connections` WHERE `requester_id` = ?");
        $stmt->bind_param("i", $requester);

        $stmt->execute();

        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        echo $row['Total'];
    }

    if ($requester >= 1000000000 && $requester <= 9999999999) {

        $stmt = $link->prepare("SELECT COUNT(`club_id`) AS `Total` FROM `club_connections` WHERE `requester_id` = ?");
        $stmt->bind_param("i", $requester);

        $stmt->execute();

        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        echo $row['Total'];
    }

    if ($requester >= 100000000 && $requester <= 999999999) {

        $stmt = $link->prepare("SELECT COUNT(`society_id`) AS `Total` FROM `society_connections` WHERE `requester_id` = ?");
        $stmt->bind_param("i", $requester);

        $stmt->execute();

        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        echo $row['Total'];
    }

    $stmt->close();
    $link->close();
}


// ***********************************************************************************************************************************************************************



// ***********************************************************************************************************************************************************************

// Function for getting Interest

function getInterest($interest_ids)
{
    include 'config.php';

    $interests = '';

    $ids = join(",", $interest_ids);

    $stmt = $link->prepare("SELECT `interest` FROM `interest_category` WHERE `id` IN ($ids)");

    $stmt->execute();

    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $interests .=  '<span class="keyword">&nbsp;<span class="keyword-text"> &nbsp;' . $row['interest'] . ' </span></span>';
    }

    return $interests;

    $stmt->close();
    $link->close();
}


// ***********************************************************************************************************************************************************************



// ***********************************************************************************************************************************************************************

// Function for getting User's Name and Data by ID

function getName($user)
{
    include 'config.php';

    $stmt = $link->prepare("SELECT `name` FROM `zone_users` WHERE `zone_id` = ?");
    $stmt->bind_param("i", $user);

    $stmt->execute();

    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    return $row['name'];

    $stmt->close();
    $link->close();
}


// ***********************************************************************************************************************************************************************



// ***********************************************************************************************************************************************************************

// Function for getting User's Profile and Data by ID

function getProfile($user)
{
    include 'config.php';

    $stmt = $link->prepare("SELECT `profile` FROM `zone_users` WHERE `zone_id` = ?");
    $stmt->bind_param("i", $user);

    $stmt->execute();

    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    return $row['profile'];

    $stmt->close();
    $link->close();
}


// ***********************************************************************************************************************************************************************



// ***********************************************************************************************************************************************************************

// Function for getting User's Username and Data by ID

function getUsername($user)
{
    include 'config.php';

    $stmt = $link->prepare("SELECT `uname` FROM `zone_users` WHERE `zone_id` = ?");
    $stmt->bind_param("i", $user);

    $stmt->execute();

    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    return $row['uname'];

    $stmt->close();
    $link->close();
}






// https://stackoverflow.com/questions/46882587/ajax-execute-php-function/46882660
