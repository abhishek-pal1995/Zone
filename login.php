<?php

session_start();

if (!isset($_SESSION['zone_id']) && !isset($_SESSION['college_id']) && !isset($_SESSION['club_id']) && !isset($_SESSION['society_id'])) {
} else {
    header('location: home');
}

?>

<!DOCTYPE html>
<html lang="en" class="bg-gray-100">

<head>

    <!-- Permanent Head  -->

    <?php include 'fixed/head.php'; ?>

    <!-- Permanent Head  -->


    <!-- Favicon -->

    <link href="assets/images/favicon.png" rel="icon" type="image/png">

    <!-- Favicon -->


    <!-- Title and Description -->

    <title>Zone | Log in</title>
    <meta name="description" content="Socialite is - Professional A unique and beautiful collection of UI elements">

    <!-- Title and Description -->


    <!-- Extra for this Page  -->

    <style>
        input,
        .bootstrap-select.btn-group button {
            background-color: #f3f4f6 !important;
            height: 44px !important;
            box-shadow: none !important;
        }
    </style>

    <!-- Extra for this Page  -->

</head>

<body class="bg-gray-100">

    <div id="wrapper" class="flex flex-col justify-between h-screen">

        <!-- Authentication Header-->

        <div class="bg-white py-4 shadow dark:bg-gray-800">
            <div class="max-w-6xl mx-auto">


                <div class="flex items-center lg:justify-between justify-around">

                    <a href="./">
                        <img src="assets/images/logo.png" alt="" class="w-32">
                    </a>

                    <div class="capitalize flex font-semibold hidden lg:block my-2 space-x-3 text-center text-sm">
                        <a href="login" class="py-3 px-4">Login</a>
                        <a href="register" class="bg-purple-500 purple-500 px-6 py-3 rounded-md shadow text-white">Register</a>
                    </div>

                </div>
            </div>
        </div>

        <!-- Authentication Header-->


        <!-- Content-->

        <div>
            <div class="lg:p-12 max-w-xl lg:my-0 my-12 mx-auto p-6 space-y-">
                <form id="login-form" class="lg:p-10 p-6 space-y-3 relative bg-white shadow-xl rounded-md">
                    <h1 class="lg:text-2xl text-xl font-semibold mb-6"> Login </h1>
                    <div>
                        <label class="mb-0"> Login As a </label>
                        <select id="frm-value" onchange="frmChange(this.value)" class="selectpicker mt-2">
                            <option value="usr" selected>User</option>
                            <option value="clg">College</option>
                            <option value="clb">Club</option>
                            <option value="sty">Society</option>
                        </select>
                    </div>
                    <input hidden name="formValue" id="formValue" type="text">
                    <div id="lgn-input-alert">

                    </div>
                    <hr>
                    <div>
                        <label id="uname" class="mb-0"> User Username/Email Address </label>
                        <input type="text" id="login" name="login" placeholder="Username/Info@example.com" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                    </div>
                    <div>
                        <label class="mb-0"> Password </label>
                        <input type="password" id="passcode" name="passcode" placeholder="******" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                    </div>
                    <div>
                        <button type="button" id="login-form-submit" class="bg-blue-600 font-semibold p-2 mt-5 rounded-md text-center text-white w-full">
                            Log in</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Content-->


        <!-- Authentication Footer -->

        <div class="lg:mb-5 py-3 uk-link-reset">
            <div class="flex flex-col items-center justify-between lg:flex-row max-w-6xl mx-auto lg:space-y-0 space-y-3">
                <div class="flex space-x-2 text-gray-700 uppercase">
                    <a href="#"> About</a>
                    <a href="#"> Help</a>
                    <a href="#"> Terms</a>
                    <a href="#"> Privacy</a>
                </div>
                <p class="capitalize"> © copyright 2020 by Socialite</p>
            </div>
        </div>

        <!-- Authentication Footer -->


    </div>

    <!-- JavaScript -->

    <?php include 'fixed/script-links.php'; ?>

    <script type="text/javascript" src="forms/js/login-form.js"></script>

    <!-- JavaScript -->



</html>