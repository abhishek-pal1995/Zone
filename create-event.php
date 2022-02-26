<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Permanent Head  -->

    <?php include 'fixed/head.php'; ?>

    <!-- Permanent Head  -->


    <!-- Favicon -->

    <link href="assets/images/favicon.png" rel="icon" type="image/png">

    <!-- Favicon -->


    <!-- Title and Description -->

    <title>Zone | Host Event</title>
    <meta name="description" content="Socialite is - Professional A unique and beautiful collection of UI elements">

    <!-- Title and Description -->

    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        datalist {
            -webkit-appearance: none;
        }
    </style>

</head>

<body>

    <div id="wrapper">


        <!-- Header -->

        <?php include 'fixed/header.php'; ?>

        <!-- Header -->


        <!-- Sidebar -->

        <?php include 'fixed/sidebar.php'; ?>

        <!-- Sidebar -->

        <!-- Main Contents -->
        <div class="main_content">
            <div class="mcontainer">

                <!--  breadcrumb -->
                <div class="breadcrumb-area py-0">
                    <div class="breadcrumb">
                        <ul class="m-0">
                            <li>
                                <a href="index.html">Events</a>
                            </li>
                            <li class="active">
                                <a href="#">Create New Event </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- create page-->
                <div class="max-w-2xl m-auto shadow-md rounded-md bg-white lg:mt-20">

                    <!-- form header -->
                    <form action="" class="uk-form">

                        <div class="text-center border-b border-gray-100 py-4">
                            <h3 class="font-bold text-xl"> Host New Event </h3>
                        </div>

                        <div id="event-input-alert" class="px-4"></div>

                        <div class="event-frm-tab" style="display: none;">
                            <!-- form body -->
                            <div class="p-6 space-y-5">

                                <div>
                                    <label class="font-semibold text-base"> Event Category </label>
                                    <select id="event-category" name="event-category" class="shadow-none selectpicker with-border req">
                                        <option value="1">Technology</option>
                                        <option value="2">Cars and Vehicles</option>
                                        <option value="3">Comedy</option>
                                        <option value="4">Economics and Trade</option>
                                        <option value="5">Education</option>
                                        <option value="6">Entertainment</option>
                                        <option value="7">Movies & Animation</option>
                                        <option value="8">Gaming</option>
                                        <option value="9">History and Facts</option>
                                        <option value="10">Live Style</option>
                                        <option value="0">Other</option>
                                    </select>
                                </div>
                                <hr>

                                <div class="line">
                                    <input class="line__input req" onkeyup="this.setAttribute('value', this.value);" id="event-title" name="event-title" type="text" value="">
                                    <span class="line__placeholder"> Event Title </span>
                                </div>

                                <div class="line h-32">
                                    <textarea class="line__input h-32 req" onkeyup="this.setAttribute('value', this.value);" id="event-desc" name="event-desc" type="text" value=""></textarea>
                                    <span class="line__placeholder"> Event Description </span>
                                </div>

                                <label class="font-semibold text-base"> Event Timeline </label>
                                <div class="grid lg:grid-cols-2 gap-3">
                                    <div class="line">
                                        <input class="line__input req" onchange="this.setAttribute('value', this.value);" onfocus="(this.type='datetime-local'); this.setAttribute('min', date);" onblur="if(this.value==''){this.type='text'}" type="text" id="start-date" name="start-date" value="">
                                        <span class="line__placeholder"> Event Start DateTime </span>
                                    </div>
                                    <div class="line">
                                        <input class="line__input req" onchange="this.setAttribute('value', this.value);" onfocus="(this.type='datetime-local'); this.setAttribute('min', date);" onblur="if(this.value==''){this.type='text'}" type="text" id="end-date" name="end-date" value="">
                                        <span class="line__placeholder"> Event End DateTime </span>
                                    </div>
                                </div>

                                <hr>
                                <div class="px-2 space-y-2">
                                    <label class="font-semibold text-base"> Choose Privacy </label>
                                    <select id="event-privacy" name="event-privacy" class="shadow-none selectpicker with-border">
                                        <option data-icon="uil-bullseye"> Private </option>
                                        <option data-icon="uil-chat-bubble-user">My Following</option>
                                        <option data-icon="uil-layer-group-slash">Unlisted</option>
                                        <option data-icon="uil-globe" selected>Puplic</option>
                                    </select>
                                </div>

                            </div>

                        </div>

                        <div class="event-frm-tab space-y-3" style="display: none;">

                            <!-- Banner Modal -->

                            <div id="event-banner-modal" class="create-post" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical shadow-2xl uk-animation-slide-bottom-small">
                                    <div class="py-4 border-b flex  justify-between px-6">
                                        <h3 class="text-lg font-semibold"> Upload Banner </h3>
                                        <div>
                                            <button class="uk-modal-close-default hover:bg-gray-100 rounded-full p-2.5 block uk-icon uk-close mt-0.5" type="button" uk-close>
                                                <i class="icon-feather-close"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="create-post-modal-body space-x-6 p-5 overflow-x-hidden mr-1" data-simplebar>
                                        <div class="space-y-4 g:w-8/12">
                                            <div id="event-upload-banner" class="relative uk-transition-toggle overflow-hidden">
                                                <div class="w-full">
                                                    <div class="bg-gray-100 border-2 border-dashed flex flex-col h-40 items-center justify-center relative w-full rounded-lg dark:bg-gray-800 dark:border-gray-600">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-12">
                                                            <path d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z" />
                                                            <path d="M9 13h2v5a1 1 0 11-2 0v-5z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                                <input hidden id="event-banner-img" name="event-banner-img" class="req" type="file">
                                                <a href="#" class="bg-gray-200 flex font-medium h-9 items-center justify-center px-5 rounded-b-xl text-blue-600 text-white uk-position-bottom uk-transition-bottom-small">
                                                    Choose file</a>
                                            </div>
                                            <div id="event-banner-pre-text" class="text-lg font-semibold" style="display: none; text-align:center;">
                                                <hr> Banner Preview
                                                <hr>
                                            </div>
                                            <div class="event-banner-preview-image">
                                            </div>
                                            <div class="event-banner-file-name" style="text-align: center;">
                                                No file Choosen.
                                            </div>
                                            <div class="event-banner-file-size" style="text-align: center;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center w-full justify-between p-3 border-t" id="event-banner-upload-status" style="display: none;">
                                        <div class="flex items-center space-x-2">
                                            <ion-icon name="checkmark-circle" class="text-green-600 text-xl"></ion-icon>
                                            <div> File selected successfuly.</div>
                                        </div>
                                        <div class="flex space-x-2">
                                            <a href="#" id="event-banner-cancel-btn" style="display: none;" class="bg-red-100 flex font-medium h-9 items-center justify-center px-5 rounded-md text-red-600 text-sm">
                                                Delete </a>
                                            <a href="#" class="bg-blue-600 flex h-9 items-center justify-center rounded-md text-white px-5 font-medium uk-modal-close">
                                                Confirm </a>
                                        </div>
                                        <a href="#" hidden class="bg-blue-600 flex h-9 items-center justify-center rounded-lg text-white px-12 font-semibold uk-modal-close">
                                            Confirm </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Banner Modal -->


                            <!-- form body -->
                            <div class="px-6 space-y-5">

                                <div>
                                    <div>
                                        <button type="button" href="#event-banner-modal" uk-toggle class="bg-blue-600 font-semibold p-2 mt-5 rounded-md text-center text-white w-full">
                                            Upload Banner</button>
                                    </div>
                                </div>

                                <hr>
                                <label class="font-semibold text-base"> Entry Fee </label>
                                <div id="fee-div">
                                    <div>
                                        <select id="entry-fee" name="entry-fee" class="shadow-none selectpicker with-border req" title="Entry fee">
                                            <option value="25">₹ 25</option>
                                            <option value="50">₹ 50</option>
                                            <option value="100">₹ 100</option>
                                            <option value="0">Free Entry</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <div class="line" id="fee">
                                        <input class="shadow-none selectpicker with-border" onkeyup="this.setAttribute('value', this.value);" min="0" max="500" name="entry-fee1" type="number" id="fee-check" placeholder="Enter fee amount between 0 to 500" value="">
                                    </div>
                                </div>

                                <label for="" class="font-semibold text-base"> Team Size </label>
                                <div id="team-div">
                                    <div>
                                        <select id="team-size" name="team-size" class="shadow-none selectpicker with-border req" title="Team Size">
                                            <option value="1">Solo(Single Participant)</option>
                                            <option value="2">Duo(Team of 2 Members)</option>
                                            <option value="4">Squad(Team of 4 Members)</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <div class="line" id="team">
                                        <input class="shadow-none selectpicker with-border" onkeyup="this.setAttribute('value', this.value);" min="3" max="10" name="team-size1" id="team-check" type="number" placeholder="Enter Team Size between 3 to 10" value="">
                                    </div>
                                </div>

                                <label for="" class="font-semibold text-base"> Reward Description </label>

                                <div class="line h-32">
                                    <textarea class="line__input req" onkeyup="this.setAttribute('value', this.value);" id="mytextarea" name="mytextarea" type="text" value=""></textarea>
                                    <span class="line__placeholder"> Prize Distribution </span>
                                </div>

                                <div class="px-2 space-y-2">
                                    <label for="" class="font-semibold text-base"> Certificate Distribution </label>
                                    <select id="" name="" class="shadow-none selectpicker with-border">
                                        <option data-icon="uil-bullseye"> Winners(up to 3rd Rank) </option>
                                        <option data-icon="uil-chat-bubble-user">All Participants</option>
                                        <option data-icon="uil-layer-group-slash">No Certifficates</option>
                                        <option data-icon="uil-globe" selected>Not decided yet</option>
                                    </select>
                                </div>

                            </div>

                        </div>

                        <div class="event-frm-tab space-y-3" style="display: none;">
                            <!-- form body -->
                            <div class="p-6 space-y-5">

                                <div>
                                    <label for="" class="font-semibold text-base"> Participation files can Include </label>
                                    <div class="grid lg:grid-cols-2 gap-3">
                                        <hr>
                                        <br>
                                        <div class="checkbox">
                                            <input type="checkbox" id="chekcbox1">
                                            <label for="chekcbox1"><span class="checkbox-icon"></span> PDF</label>
                                        </div>
                                        <div class="checkbox">
                                            <input type="checkbox" id="chekcbox2">
                                            <label for="chekcbox2"><span class="checkbox-icon"></span> Image(jpeg/jpg/png/gif) </label>
                                        </div>
                                        <div class="checkbox">
                                            <input type="checkbox" id="chekcbox3">
                                            <label for="chekcbox3"><span class="checkbox-icon"></span> Video (mkv/mp4)</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="line">
                                    <input class="line__input" onkeyup="this.setAttribute('value', this.value);" id="" name="" type="text" value="">
                                    <span for="username" class="line__placeholder"> Event Title </span>
                                </div>

                                <div class="line h-32">
                                    <textarea class="line__input h-32" onkeyup="this.setAttribute('value', this.value);" id="" name="" type="text" value=""></textarea>
                                    <span for="username" class="line__placeholder"> Event Description </span>
                                </div>

                                <div class="px-2 space-y-2">
                                    <label for="" class="font-semibold text-base"> Choose Privacy </label>
                                    <div> Anyone can see who's in the group and what they post. </div>
                                    <select id="" name="" class="shadow-none selectpicker with-border">
                                        <option data-icon="uil-bullseye"> Private </option>
                                        <option data-icon="uil-chat-bubble-user">My Following</option>
                                        <option data-icon="uil-layer-group-slash">Unlisted</option>
                                        <option data-icon="uil-globe" selected>Puplic</option>
                                    </select>
                                </div>

                            </div>

                        </div>


                        <div class="p-6">
                            <div id="event-nav-tab" class="grid lg:grid-cols-2 gap-3">
                                <button type="button" onclick="nextPrevEvent(-1)" id="event-prevBtn" class="bg-gray-500 font-semibold p-2 mt-5 rounded-md text-center text-white w-full">
                                    Previous
                                </button>
                                <div id="event-nextBtnDiv">
                                    <button type="button" onclick="nextPrevEvent(1)" id="event-nextBtn" class="bg-blue-600 font-semibold p-2 mt-5 rounded-md text-center text-white w-full">
                                        Next
                                    </button>
                                </div>
                                <button type="button" id="create-now" style="display: none;" class="bg-blue-600 font-semibold p-2 mt-5 rounded-md text-center text-white w-full">
                                    Submit
                                </button>
                            </div>
                        </div>

                    </form>
                </div>



            </div>
        </div>

    </div>

    <!-- ChatBox -->

    <?php include 'fixed/chatbox.php'; ?>

    <!-- ChatBox -->


    <!-- JavaScript -->

    <?php include 'fixed/script-links.php'; ?>

    <!-- JavaScript -->


    <script>
        var currentEventTab = 0;
        showEventTab(currentEventTab);

        function showEventTab(n) {

            // This function will display the specified tab of the form ...
            var x = document.getElementsByClassName("event-frm-tab");
            x[n].style.display = "block";

            // ... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("event-prevBtn").style.display = "none";
                document.getElementById("event-nav-tab").removeAttribute("class");
            } else {
                document.getElementById("event-prevBtn").style.display = "inline";
                document.getElementById("event-nav-tab").className = "grid lg:grid-cols-2 gap-3";
            }
            if (n == 1) {
                document.getElementById("event-nextBtnDiv").style.display = "inline";
                document.getElementById("create-now").style.display = "none";
            }
            if (n == 2) {
                document.getElementById("create-now").style.display = "inline";
                document.getElementById("event-nextBtnDiv").style.display = "none";
            } else {
                document.getElementById("create-now").style.display = "none";
            }
        }

        function nextPrevEvent(n) {

            // This function will figure out which tab to display
            var x = document.getElementsByClassName("event-frm-tab");

            // Exit the function if any field in the current tab is invalid:
            if (n === 1 && validateEventForm() === false) {
                return false;
            }

            // Hide the current tab:
            x[currentEventTab].style.display = "none";

            // Increase or decrease the current tab by 1:
            currentEventTab = currentEventTab + n;

            // Otherwise, display the correct tab:
            showEventTab(currentEventTab);

        }

        function validateEventForm() {

            const extensions = ["png", "svg", "jpeg", "jpg"];

            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("event-frm-tab");
            y = x[currentEventTab].getElementsByClassName("req");

            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value === '' || y[i].value === '') {
                    // and set the current valid status to false:
                    valid = false;
                }
            }

            if (currentEventTab === 1 && !extensions.includes(fileInputBEvent.value.split('.').pop())) {
                alert('Invalid File Input');
                valid = false;
            }
            // If the valid status is False, Show the Error
            if (valid === false) {
                document.getElementById("event-input-alert").innerHTML = `<div class="bg-whit border-t-4 border-red-600 p-5 shadow-lg relative rounded-md" uk-alert>
                <h3 class="text-lg font-semibold mt-1"> Input field Error </h3>
                <p>Please fill All the Required fields carefully.</p>

                <div class="flex space-x-2 items-center justify-end mt-2">
                    <button type="button" class="uk-alert-close bg-gray-400 py-2 px-4 rounded-md font-semibold"> OK, I'll do it.</button>
                </div>
                </div>`;
            } else {
                document.getElementById("event-input-alert").innerHTML = "";
            }

            return valid; // return the valid status

        }
    </script>

    <!-- For Banner Modal -->

    <script>
        const updivBEvent = document.querySelector("#event-upload-banner");
        const fileInputBEvent = document.querySelector("#event-banner-img");
        const imgBEvent = document.querySelector(".event-banner-preview-image");
        const fileNameBEvent = document.querySelector(".event-banner-file-name");
        const fileSizeBEvent = document.querySelector(".event-banner-file-size");
        const cancelBtnBEvent = document.querySelector("#event-banner-cancel-btn");
        const preTextBEvent = document.querySelector('#event-banner-pre-text');
        const uploadStatusBEvent = document.querySelector('#event-banner-upload-status');

        updivBEvent.addEventListener("click", () => {
            fileInputBEvent.click();
        });

        let regExpBEvent = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;

        fileInputBEvent.addEventListener("change", function() {

            imgBEvent.innerHTML = "";

            const fileBEvent = this.files[0];
            if (fileBEvent.size < 10485760) {
                const readerBEvent = new FileReader();
                readerBEvent.onload = function() {
                    const resultBEvent = readerBEvent.result;
                    uploadStatusBEvent.style.display = "";
                    imgBEvent.innerHTML = `<img src="${resultBEvent}" alt="">`;
                    cancelBtnBEvent.style.display = "";
                    preTextBEvent.style.display = "";
                }
                cancelBtnBEvent.addEventListener("click", function() {
                    imgBEvent.innerHTML = "";
                    fileInputBEvent.value = "";
                    fileNameBEvent.textContent = 'No file Choosen.';
                    cancelBtnBEvent.style.display = "none";
                    preTextBEvent.style.display = "none";
                    uploadStatusBEvent.style.display = "none";
                })
                readerBEvent.readAsDataURL(fileBEvent);
            } else {
                alert('Size Limit Exceeded');
                fileInputBEvent.value == "";
                uploadStatusBEvent.style.display = "none";
            }
            if (this.value) {
                let valueStoreBEvent = this.value.match(regExpBEvent);
                fileNameBEvent.textContent = valueStoreBEvent;
                fileSizeBEvent.textContent = 'Size: ' + (fileBEvent.size / 1024 / 1024).toFixed(2) + " MB";
            }
        });
    </script>

    <!-- For Banner Modal -->

    <script>
        var today = new Date();

        var year = today.getFullYear();

        var month = '';
        var tdate = '';

        if (today.getMonth() < 10) {
            month = '0' + (today.getMonth() + 1);
        } else {
            month = (today.getMonth() + 1);
        }

        if (today.getDate() < 10) {
            tdate = '0' + today.getDate();
        } else {
            tdate = today.getDate();
        }

        var date = year + '-' + month + '-' + tdate + 'T' + '00' + ':' + '00';
    </script>

    <script>
        $(document).ready(function() {
            $('#fee').hide();
            $('#entry-fee').on('change', function() {
                if ($('#entry-fee').val() == "other") {
                    $('#fee').show();
                    $('#fee-div').addClass('grid lg:grid-cols-2 gap-3');
                } else {
                    $('#fee').hide();
                    $('#fee-div').removeClass('grid lg:grid-cols-2 gap-3');
                }
            });
        });

        $(document).ready(function() {
            $('#team').hide();
            $('#team-size').on('change', function() {
                if ($('#team-size').val() == "other") {
                    $('#team').show();
                    $('#team-div').addClass('grid lg:grid-cols-2 gap-3');
                } else {
                    $('#team').hide();
                    $('#team-div').removeClass('grid lg:grid-cols-2 gap-3');
                }
            });
        });
    </script>

</body>

</html>