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

    <title>Zone | Register</title>
    <meta name="description" content="Socialite is - Professional A unique and beautiful collection of UI elements">

    <!-- Title and Description -->


    <!-- Extra for this Page  -->

    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

    <style>
        input,
        .bootstrap-select.btn-group button {
            background-color: #f3f4f6 !important;
            height: 44px !important;
            box-shadow: none !important;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>

    <!-- Extra for this Page  -->

</head>

<body class="bg-gray-100">


    <div id="wrapper" class="flex flex-col justify-between h-screen">

        <!-- Authentication Header -->

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

        <!-- Authentication Header -->


        <!-- Content-->

        <div>
            <div class="lg:p-12 max-w-xl lg:my-0 my-12 mx-auto p-6 space-y-">
                <form id="register-frm" class="lg:p-10 p-6 space-y-3 relative bg-white shadow-xl rounded-md" enctype="multipart/form-data">
                    <h1 class="lg:text-2xl text-xl font-semibold mb-6"> Register </h1>
                    <div id="form-picker">
                        <label class="mb-0"> Register As a </label>
                        <select id="frm-value" onchange="frmChange(this.value)" class="selectpicker mt-2">
                            <option value="user" selected>User</option>
                            <option value="college">College</option>
                            <option value="club">Club</option>
                            <option value="society">Society</option>
                        </select>
                    </div>
                    <input hidden name="formValue" id="formValue" type="text">
                    <hr>

                    <div id="user" class="frms-all">
                        <!-- form Starts Here  -->

                        <?php include 'forms/user-frm.php'; ?>

                        <!-- form Ends Here -->
                    </div>

                    <div id="college" class="frms-all" style="display: none;">
                        <!-- form Starts Here  -->

                        <?php include 'forms/college-frm.php'; ?>

                        <!-- form Ends Here -->
                    </div>

                    <div id="club" class="frms-all" style="display: none;">
                        <!-- form Starts Here  -->

                        <?php include 'forms/club-frm.php'; ?>

                        <!-- form Ends Here -->
                    </div>

                    <div id="society" class="frms-all" style="display: none;">
                        <!-- form Starts Here  -->

                        <?php include 'forms/society-frm.php'; ?>

                        <!-- form Ends Here -->
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

    <!-- JavaScript -->

    <script>
        function frmChange(frmName) {
            var i;
            var x = document.getElementsByClassName("frms-all");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            document.getElementById(frmName).style.display = "block";
        }
    </script>

    <!-- Form Submission  -->

    <script type="text/javascript" src="forms/js/user-form.js"></script>
    <script type="text/javascript" src="forms/js/college-form.js"></script>
    <script type="text/javascript" src="forms/js/club-form.js"></script>
    <script type="text/javascript" src="forms/js/society-form.js"></script>

    <!-- Form Submission  -->

</body>

</html>