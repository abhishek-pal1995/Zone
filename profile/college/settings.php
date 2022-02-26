<?php

include 'college-data.php';
include '../scripts.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Permanent Head  -->

    <?php include '../fixed/head.php'; ?>

    <!-- Permanent Head  -->


    <!-- Favicon -->

    <link href="../assets/images/favicon.png" rel="icon" type="image/png">

    <!-- Favicon -->

    <style>
        @media screen and (max-width: 1023px) {
            #basic {
                visibility: hidden;
                clear: both;
                float: left;
                margin: 10px auto 5px 20px;
                width: 28%;
                display: none;
            }

            #basic-in {
                display: "";
            }
        }

        @media screen and (min-width: 1023px) {
            #basic-in {
                visibility: hidden;
                clear: both;
                float: left;
                margin: 10px auto 5px 20px;
                width: 28%;
                display: none;
            }
        }
    </style>


    <!-- Title and Description -->

    <title>Zone | Profile User</title>
    <meta name="description" content="">

    <!-- Title and Description -->

</head>

<body>

    <div id="wrapper">


        <!-- Header -->

        <?php include '../fixed/header.php'; ?>

        <!-- Header -->


        <!-- Sidebar -->

        <?php include '../fixed/sidebar.php'; ?>

        <!-- Sidebar -->

        <!-- Main Contents -->
        <div class="main_content">
            <div class="mcontainer">

                <h2 class="text-2xl font-semibold" style="text-align: center;"> Profile Settings </h2>
                <br>
                <hr>
                <nav class="responsive-nav border-b md:m-0 -mx-4" style="text-align:center">
                    <ul uk-switcher="connect: #form-type; animation: uk-animation-fade">
                        <li id="basic-in"><a href="#" class="lg:px-2"> Basic</a></li>
                        <li class="uk-active"><a href="#" class="lg:px-2"> Profile</a></li>
                        <li><a href="#" class="lg:px-2"> Privacy</a></li>
                        <li><a href="#" class="lg:px-2"> Notification</a></li>
                        <li><a href="#" class="lg:px-2"> Social links </a></li>
                        <li><a href="#" class="lg:px-2"> Security </a></li>
                    </ul>
                </nav>
                <br>

                <div class="bg-white lg:divide-x lg:flex lg:shadow-md rounded-md shadow lg:rounded-xl overflow-hidden lg:m-0 -mx-4">
                    <div class="lg:w-1/3">

                        <nav id="basic">

                            <div class="widget p-5 lg:h-full">
                                <div>
                                    <img src="../assets/images/avatars/avatar-lg-2.jpg" alt="" class="object-cover rounded-lg col-span-full">
                                    <hr>
                                </div>
                                <br>
                                <hr>
                                <h4 class="text-lg font-semibold" style="text-align: center;"> Basic Details </h4>
                                <hr>
                                <ul class="text-gray-600 space-y-3 mt-3" id="basic-details">
                                    <li class="flex items-center space-x-2">
                                        <img src="https://img.icons8.com/fluency/36/000000/username.png" style="display:inline-block;">
                                        <strong style="font-size:medium; vertical-align:middle"><?php echo $clg_name; ?></strong>
                                    </li>

                                    <li class="flex items-center space-x-2">
                                        <img src="https://img.icons8.com/fluency/36/000000/user-shield.png" style="display:inline-block;">
                                        <strong style="font-size:medium; vertical-align:middle"><?php echo $clg_uname; ?></strong>
                                    </li>

                                    <li class="flex items-center space-x-2">
                                        <img src="https://img.icons8.com/fluency/36/000000/secured-letter.png" style="display:inline-block;">
                                        <strong style="font-size:small; vertical-align:middle"><?php echo $clg_mail; ?></strong>
                                    </li>

                                    <li class="flex items-center space-x-2">
                                        <img src="https://img.icons8.com/fluency/36/000000/phone-office.png" style="display:inline-block;">
                                        <strong style="font-size:medium; vertical-align:middle"> +91 <?php echo $clg_a_phone; ?></strong>
                                    </li>
                                    <li class="flex items-center space-x-2">
                                        <img src="https://img.icons8.com/fluency/36/000000/worldwide-location.png" style="display:inline-block;">
                                        <strong style="font-size:medium; vertical-align:middle"> Indergarh, Madhya Pradesh </strong>
                                    </li>
                                    <hr>
                                    <hr>
                                    <li class="flex items-center" style="text-align: center;">
                                        <img src="https://img.icons8.com/fluency/36/000000/resume.png" style="display:inline-block;">
                                        <strong style="font-size:medium; vertical-align:middle">Interested fields </strong>
                                    </li>
                                    <hr>

                                </ul>
                            </div>

                        </nav>

                    </div>

                    <div class="lg:w-2/3 uk-switcher" id="form-type">

                        <div class="lg:flex lg:flex-col justify-between lg:h-full">

                            <div class="widget p-5 lg:h-full" id="basic-in">
                                <div>
                                    <img src="../assets/images/avatars/avatar-lg-2.jpg" alt="" class="object-cover rounded-lg col-span-full">
                                    <hr>
                                </div>
                                <br>
                                <hr>
                                <h4 class="text-lg font-semibold" style="text-align: center;"> Basic Details </h4>
                                <hr>
                                <ul class="text-gray-600 space-y-3 mt-3" id="basic-details">
                                    <li class="flex items-center space-x-2">
                                        <img src="https://img.icons8.com/fluency/36/000000/username.png" style="display:inline-block;">
                                        <strong style="font-size:medium; vertical-align:middle"><?php echo $clg_name; ?></strong>
                                    </li>

                                    <li class="flex items-center space-x-2">
                                        <img src="https://img.icons8.com/fluency/36/000000/user-shield.png" style="display:inline-block;">
                                        <strong style="font-size:medium; vertical-align:middle"><?php echo $clg_uname; ?></strong>
                                    </li>

                                    <li class="flex items-center space-x-2">
                                        <img src="https://img.icons8.com/fluency/36/000000/secured-letter.png" style="display:inline-block;">
                                        <strong style="font-size:small; vertical-align:middle"><?php echo $clg_mail; ?></strong>
                                    </li>

                                    <li class="flex items-center space-x-2">
                                        <img src="https://img.icons8.com/fluency/36/000000/phone-office.png" style="display:inline-block;">
                                        <strong style="font-size:medium; vertical-align:middle"> +91 <?php echo $clg_a_phone; ?></strong>
                                    </li>
                                    <li class="flex items-center space-x-2">
                                        <img src="https://img.icons8.com/fluency/36/000000/worldwide-location.png" style="display:inline-block;">
                                        <strong style="font-size:medium; vertical-align:middle"> Indergarh, Madhya Pradesh </strong>
                                    </li>
                                    <hr>
                                    <hr>
                                    <li class="flex items-center" style="text-align: center;">
                                        <img src="https://img.icons8.com/fluency/36/000000/resume.png" style="display:inline-block;">
                                        <strong style="font-size:medium; vertical-align:middle">Interested fields </strong>
                                    </li>
                                    <hr>

                                </ul>
                                <br>

                            </div>

                            <!-- form header -->
                            <div id="basic" class="lg:px-10 lg:py-8 p-6">
                                <h3 class="font-bold mb-2 text-xl">Profile</h3>
                                <p class=""> This information will be dispalyed publicly so be carful what you share. </p>
                            </div>

                            <!-- form body -->
                            <div id="basic" class="lg:py-8 lg:px-20 flex-1 space-y-4 p-4">

                                <div class="line">
                                    <input class="line__input" id="password" autocomplete="off" name="password" type="text" onkeyup="this.setAttribute('value', this.value);" value="">
                                    <span for="username" class="line__placeholder"> First Name </span>
                                </div>
                                <div class="line">
                                    <input class="line__input" id="password" autocomplete="off" name="password" type="text" onkeyup="this.setAttribute('value', this.value);" value="">
                                    <span for="username" class="line__placeholder"> Last Name </span>
                                </div>
                                <div class="line">
                                    <input class="line__input" id="password" autocomplete="off" name="password" type="text" onkeyup="this.setAttribute('value', this.value);" value="">
                                    <span for="username" class="line__placeholder">Email </span>
                                </div>
                                <div class="col-span-2" hidden>
                                    <label for="about">About me</label>
                                    <textarea class="shadow-none with-border"></textarea>
                                </div>
                                <div class="line h-32">
                                    <textarea class="line__input h-32" autocomplete="off" type="text" onkeyup="this.setAttribute('value', this.value);" value=""></textarea>
                                    <span for="username" class="line__placeholder">About me </span>
                                </div>
                                <div class="line">
                                    <input class="line__input" id="password" autocomplete="off" name="password" type="text" onkeyup="this.setAttribute('value', this.value);" value="">
                                    <span for="username" class="line__placeholder">Location </span>
                                </div>
                                <div class="line">
                                    <input class="line__input" id="password" autocomplete="off" name="password" type="text" onkeyup="this.setAttribute('value', this.value);" value="">
                                    <span for="username" class="line__placeholder">Working at </span>
                                </div>

                            </div>

                            <div id="basic" class="bg-gray-10 p-6 pt-0 flex justify-end space-x-3">
                                <button class="p-2 px-4 rounded bg-gray-50 text-red-500"> Cancel </button>
                                <button type="button" class="button bg-blue-700"> Save </button>
                            </div>


                        </div>

                        <div class="lg:flex lg:flex-col justify-between lg:h-full">

                            <!-- form header -->
                            <div class="lg:px-10 lg:py-8 p-6">
                                <h3 class="font-bold mb-2 text-xl">Profile</h3>
                                <ion-icon name="create-outline"></ion-icon>
                                <p class=""> This information will be dispalyed publicly so be carful what you share. </p>
                            </div>

                            <!-- form body -->
                            <div class="lg:py-8 lg:px-20 flex-1 space-y-4 p-4">

                                <div class="line">
                                    <input class="line__input" id="password" autocomplete="off" name="password" type="text" onkeyup="this.setAttribute('value', this.value);" value="">
                                    <span for="username" class="line__placeholder"> Full Name </span>
                                </div>
                                <div class="line">
                                    <input class="line__input" id="mail" autocomplete="off" name="mail" type="text" onkeyup="this.setAttribute('value', this.value);" value="">
                                    <span for="username" class="line__placeholder">Email </span>
                                </div>
                                <div class="col-span-2" hidden>
                                    <label for="about">About me</label>
                                    <textarea class="shadow-none with-border"></textarea>
                                </div>
                                <div class="line h-32">
                                    <textarea class="line__input h-32" autocomplete="off" type="text" onkeyup="this.setAttribute('value', this.value);" value=""></textarea>
                                    <span for="username" class="line__placeholder">About me </span>
                                </div>
                                <div class="line">
                                    <input class="line__input" id="password" autocomplete="off" name="password" type="text" onkeyup="this.setAttribute('value', this.value);" value="">
                                    <span for="username" class="line__placeholder">Location </span>
                                </div>
                                <div class="line">
                                    <input class="line__input" id="password" autocomplete="off" name="password" type="text" onkeyup="this.setAttribute('value', this.value);" value="">
                                    <span for="username" class="line__placeholder">Working at </span>
                                </div>

                            </div>

                            <div class="bg-gray-10 p-6 pt-0 flex justify-end space-x-3">
                                <button class="p-2 px-4 rounded bg-gray-50 text-red-500"> Cancel </button>
                                <button type="button" class="button bg-blue-700"> Save </button>
                            </div>


                        </div>



                        <div class="lg:flex lg:flex-col justify-between lg:h-full">

                            <!-- form header -->
                            <div class="lg:px-10 lg:py-8 p-6">
                                <h3 class="font-bold mb-2 text-xl">Privacy</h3>
                                <p class=""> This information will be dispalyed publicly so be carful what you share. </p>
                            </div>

                            <!-- form body -->
                            <div class="lg:py-8 lg:px-20 flex-1 space-y-4 p-6">

                                <div class="line">
                                    <input class="line__input" id="password" autocomplete="off" name="password" type="text" onkeyup="this.setAttribute('value', this.value);" value="">
                                    <span for="username" class="line__placeholder"> First Name </span>
                                </div>
                                <div class="line">
                                    <input class="line__input" id="password" autocomplete="off" name="password" type="text" onkeyup="this.setAttribute('value', this.value);" value="">
                                    <span for="username" class="line__placeholder"> Last Name </span>
                                </div>
                                <div class="line">
                                    <input class="line__input" id="password" autocomplete="off" name="password" type="text" onkeyup="this.setAttribute('value', this.value);" value="">
                                    <span for="username" class="line__placeholder">Email </span>
                                </div>
                                <div class="col-span-2" hidden>
                                    <label for="about">About me</label>
                                    <textarea class="shadow-none with-border"></textarea>
                                </div>
                                <div class="line h-32">
                                    <textarea class="line__input h-32" autocomplete="off" type="text" onkeyup="this.setAttribute('value', this.value);" value=""></textarea>
                                    <span for="username" class="line__placeholder">About me </span>
                                </div>
                                <div class="line">
                                    <input class="line__input" id="password" autocomplete="off" name="password" type="text" onkeyup="this.setAttribute('value', this.value);" value="">
                                    <span for="username" class="line__placeholder">Location </span>
                                </div>
                                <div class="line">
                                    <input class="line__input" id="password" autocomplete="off" name="password" type="text" onkeyup="this.setAttribute('value', this.value);" value="">
                                    <span for="username" class="line__placeholder">Working at </span>
                                </div>

                            </div>

                            <div class="bg-gray-10 p-6 pt-0 flex justify-end space-x-3">
                                <button class="p-2 px-4 rounded bg-gray-50 text-red-500"> Cancel </button>
                                <button type="button" class="button bg-blue-700"> Save </button>
                            </div>


                        </div>

                        <div class="lg:flex lg:flex-col justify-between lg:h-full">

                            <!-- form header -->
                            <div class="lg:px-10 lg:py-8 p-6">
                                <h3 class="font-bold mb-2 text-xl">Notifications</h3>
                                <p class=""> This information will be dispalyed publicly so be carful what you share. </p>
                            </div>

                            <!-- form body -->
                            <div class="lg:py-8 lg:px-20 flex-1 space-y-4 p-6">

                                <div class="line">
                                    <input class="line__input" id="password" autocomplete="off" name="password" type="text" onkeyup="this.setAttribute('value', this.value);" value="">
                                    <span for="username" class="line__placeholder"> First Name </span>
                                </div>
                                <div class="line">
                                    <input class="line__input" id="password" autocomplete="off" name="password" type="text" onkeyup="this.setAttribute('value', this.value);" value="">
                                    <span for="username" class="line__placeholder"> Last Name </span>
                                </div>
                                <div class="line">
                                    <input class="line__input" id="password" autocomplete="off" name="password" type="text" onkeyup="this.setAttribute('value', this.value);" value="">
                                    <span for="username" class="line__placeholder">Email </span>
                                </div>
                                <div class="col-span-2" hidden>
                                    <label for="about">About me</label>
                                    <textarea class="shadow-none with-border"></textarea>
                                </div>
                                <div class="line h-32">
                                    <textarea class="line__input h-32" autocomplete="off" type="text" onkeyup="this.setAttribute('value', this.value);" value=""></textarea>
                                    <span for="username" class="line__placeholder">About me </span>
                                </div>
                                <div class="line">
                                    <input class="line__input" id="password" autocomplete="off" name="password" type="text" onkeyup="this.setAttribute('value', this.value);" value="">
                                    <span for="username" class="line__placeholder">Location </span>
                                </div>
                                <div class="line">
                                    <input class="line__input" id="password" autocomplete="off" name="password" type="text" onkeyup="this.setAttribute('value', this.value);" value="">
                                    <span for="username" class="line__placeholder">Working at </span>
                                </div>

                            </div>

                            <div class="bg-gray-10 p-6 pt-0 flex justify-end space-x-3">
                                <button class="p-2 px-4 rounded bg-gray-50 text-red-500"> Cancel </button>
                                <button type="button" class="button bg-blue-700"> Save </button>
                            </div>


                        </div>

                        <div class="lg:flex lg:flex-col justify-between lg:h-full">

                            <!-- form header -->
                            <div class="lg:px-10 lg:py-8 p-6">
                                <h3 class="font-bold mb-2 text-xl">Social Links</h3>
                                <p class=""> This information will be dispalyed publicly so be carful what you share. </p>
                            </div>

                            <!-- form body -->
                            <div class="lg:py-8 lg:px-20 flex-1 space-y-4 p-6">

                                <div class="line">
                                    <input class="line__input" id="password" autocomplete="off" name="password" type="text" onkeyup="this.setAttribute('value', this.value);" value="">
                                    <span for="username" class="line__placeholder"> First Name </span>
                                </div>
                                <div class="line">
                                    <input class="line__input" id="password" autocomplete="off" name="password" type="text" onkeyup="this.setAttribute('value', this.value);" value="">
                                    <span for="username" class="line__placeholder"> Last Name </span>
                                </div>
                                <div class="line">
                                    <input class="line__input" id="password" autocomplete="off" name="password" type="text" onkeyup="this.setAttribute('value', this.value);" value="">
                                    <span for="username" class="line__placeholder">Email </span>
                                </div>
                                <div class="col-span-2" hidden>
                                    <label for="about">About me</label>
                                    <textarea class="shadow-none with-border"></textarea>
                                </div>
                                <div class="line h-32">
                                    <textarea class="line__input h-32" autocomplete="off" type="text" onkeyup="this.setAttribute('value', this.value);" value=""></textarea>
                                    <span for="username" class="line__placeholder">About me </span>
                                </div>
                                <div class="line">
                                    <input class="line__input" id="password" autocomplete="off" name="password" type="text" onkeyup="this.setAttribute('value', this.value);" value="">
                                    <span for="username" class="line__placeholder">Location </span>
                                </div>
                                <div class="line">
                                    <input class="line__input" id="password" autocomplete="off" name="password" type="text" onkeyup="this.setAttribute('value', this.value);" value="">
                                    <span for="username" class="line__placeholder">Working at </span>
                                </div>

                            </div>

                            <div class="bg-gray-10 p-6 pt-0 flex justify-end space-x-3">
                                <button class="p-2 px-4 rounded bg-gray-50 text-red-500"> Cancel </button>
                                <button type="button" class="button bg-blue-700"> Save </button>
                            </div>


                        </div>

                        <div class="lg:flex lg:flex-col justify-between lg:h-full">

                            <!-- form header -->
                            <div class="lg:px-10 lg:py-8 p-6">
                                <h3 class="font-bold mb-2 text-xl">Account & Security</h3>
                                <p class=""> This information will be dispalyed publicly so be carful what you share. </p>
                            </div>

                            <!-- form body -->
                            <div class="lg:py-8 lg:px-20 flex-1 space-y-4 p-6">

                                <div class="line">
                                    <input class="line__input" id="password" autocomplete="off" name="password" type="text" onkeyup="this.setAttribute('value', this.value);" value="">
                                    <span for="username" class="line__placeholder"> First Name </span>
                                </div>
                                <div class="line">
                                    <input class="line__input" id="password" autocomplete="off" name="password" type="text" onkeyup="this.setAttribute('value', this.value);" value="">
                                    <span for="username" class="line__placeholder"> Last Name </span>
                                </div>
                                <div class="line">
                                    <input class="line__input" id="password" autocomplete="off" name="password" type="text" onkeyup="this.setAttribute('value', this.value);" value="">
                                    <span for="username" class="line__placeholder">Email </span>
                                </div>
                                <div class="col-span-2" hidden>
                                    <label for="about">About me</label>
                                    <textarea class="shadow-none with-border"></textarea>
                                </div>
                                <div class="line h-32">
                                    <textarea class="line__input h-32" autocomplete="off" type="text" onkeyup="this.setAttribute('value', this.value);" value=""></textarea>
                                    <span for="username" class="line__placeholder">About me </span>
                                </div>
                                <div class="line">
                                    <input class="line__input" id="password" autocomplete="off" name="password" type="text" onkeyup="this.setAttribute('value', this.value);" value="">
                                    <span for="username" class="line__placeholder">Location </span>
                                </div>
                                <div class="line">
                                    <input class="line__input" id="password" autocomplete="off" name="password" type="text" onkeyup="this.setAttribute('value', this.value);" value="">
                                    <span for="username" class="line__placeholder">Working at </span>
                                </div>

                            </div>

                            <div class="bg-gray-10 p-6 pt-0 flex justify-end space-x-3">
                                <button class="p-2 px-4 rounded bg-gray-50 text-red-500"> Cancel </button>
                                <button type="button" class="button bg-blue-700"> Save </button>
                            </div>


                        </div>

                    </div>

                </div>




            </div>
        </div>

    </div>

    <!-- ChatBox -->

    <?php include '../fixed/chatbox.php'; ?>

    <!-- ChatBox -->


    <!-- JavaScript -->

    <?php include '../fixed/script-links.php'; ?>

    <!-- JavaScript -->

    <script>
        $(document).ready(function() {
            $("#refresh").click(function() {
                $.ajax({
                    url: "get-data/basic-details.php",
                    type: "POST",
                    data: {
                        div: "changed"
                    },
                    success: function(data) {
                        $("#register-frm").trigger("reset");
                        if (data == "Submitted") {
                            $("#sty-input-alert").html(`<div class="bg-whit border-t-4 border-green-600 p-5 shadow-lg relative rounded-md" uk-alert>
                                    <h3 class="text-lg font-semibold mt-1"> Account created successfully. </h3>
                                    <p>Thanks for registering with us, Please verify your mail before logging in.</p>
                                    <div class="flex space-x-2 items-center justify-end mt-2">
                                    <button type="button" class="uk-alert-close bg-green-400 text-green-600 py-2 px-4 rounded-md font-semibold"> Got it</button>
                                    </div>
                                    </div>`);
                            $("#sty-form-submit").html(data);
                            setTimeout(function() {
                                $("#sty-form-submit").html("Redirecting...");
                                window.location.href = "login.php";
                            }, 2000);
                        } else {
                            $("#sty-form-submit").html('<a href="register.php">Try Again</a>');
                            $("#sty-input-alert").html(`<div class="bg-whit border-t-4 border-red-600 p-5 shadow-lg relative rounded-md" uk-alert>
                                    <h3 class="text-lg font-semibold mt-1"> Error Occurred. </h3>
                                    <p>` + data + `</p>
                                    <div class="flex space-x-2 items-center justify-end mt-2">
                                        <button type="button" class="uk-alert-close bg-gray-400 py-2 px-4 rounded-md font-semibold"> OK, I'll do it.</button>
                                    </div>
                                    </div>`);
                        }
                    }
                });
            })
        });
    </script>

    <script>

        function update() {
            $(document).ready(function() {

                var value = $('[name="mail"]').val();

                $.ajax({
                    url: "update-data/basic-details.php",
                    type: "POST",
                    data: {
                        name: 'mail',
                        value: value,
                    },
                    success: function(data) {
                        alert(data);
                    }
                });
            });
        }


        function delay(callback, ms) {
            var timer = 0;
            return function() {
                var context = this,
                    args = arguments;
                clearTimeout(timer);
                timer = setTimeout(function() {
                    callback.apply(context, args);
                }, ms || 0);
            };
        }
    </script>

</body>


</html>