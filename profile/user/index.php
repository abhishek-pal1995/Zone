<?php


include 'user-data.php';

include '../scripts.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Permanent Head  -->

    <?php include '../fixed/head.php'; ?>

    <!-- Permanent Head  -->


    <!-- Favicon -->

    <link href="../../assets/images/favicon.png" rel="icon" type="image/png">

    <!-- Favicon -->


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

                <!-- Profile cover -->
                <div class="profile user-profile">

                    <div class="profiles_banner">
                        <img src="../assets/images/avatars/profile-cover.jpg" alt="">
                        <div class="profile_action absolute bottom-0 right-0 space-x-1.5 p-3 text-sm z-50 lg:flex">
                            <a href="#" onclick="window.location.hash = 'edit';" class="flex items-center justify-center h-8 px-3 rounded-md bg-gray-700 bg-opacity-70 text-white space-x-1.5">
                                <ion-icon name="create-outline" class="text-xl"></ion-icon>
                                <span> Edit </span>
                            </a>
                        </div>
                    </div>
                    <div class="profiles_content">

                        <div class="profile_avatar">
                            <div class="profile_avatar_holder">
                                <img src="../assets/images/avatars/avatar-8.jpg" alt="">
                            </div>
                            <div class="user_status status_online"></div>
                            <div class="icon_change_photo" hidden>
                                <ion-icon name="camera" class="text-xl"></ion-icon>
                            </div>
                        </div>

                        <div class="profile_info">
                            <h1> <?php echo $usr_name; ?> </h1>
                            <p style="text-align: center;"> <?php echo $usr_uname; ?> </p>
                        </div>

                    </div>
                    <br>

                    <div class="flex justify-between lg:border-t border-gray-100 flex-col-reverse lg:flex-row pt-2">
                        <nav class="responsive-nav pl-3">
                            <ul uk-switcher="connect: #timeline-tab; animation: uk-animation-fade">
                                <li><a href="#">Timeline </a></li>
                                <li><a href="#">Friends <span>2,345</span> </a></li>
                                <li><a href="#">Events </a></li>
                            </ul>
                        </nav>

                        <!-- button actions -->
                        <div class="flex items-center space-x-1.5 flex-shrink-0 pr-4 mb-2 justify-center order-1 relative">

                            <!-- add story -->
                            <a href="#" class="flex items-center justify-center h-10 px-5 rounded-md bg-blue-600 text-white space-x-1.5 hover:text-white" uk-toggle="target: #create-post-modal">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path>
                                </svg>
                                <span> Add Your Story </span>
                            </a>

                            <!-- search icon -->
                            <a href="#" class="flex items-center justify-center h-10 w-10 rounded-md bg-gray-100" uk-toggle="target: #profile-search;animation: uk-animation-slide-top-small">
                                <ion-icon name="search" class="text-xl"></ion-icon>
                            </a>
                            <!-- search dropdown -->
                            <div class="absolute right-3 bg-white z-10 w-full flex items-center border rounded-md" id="profile-search" hidden>
                                <input type="text" placeholder="Search.." class="flex-1">
                                <ion-icon name="close-outline" class="text-2xl hover:bg-gray-100 p-1 rounded-full mr-2 cursor-pointer" uk-toggle="target: #profile-search;animation: uk-animation-slide-top-small"></ion-icon>
                            </div>

                            <!-- more icon -->
                            <a href="#" class="flex items-center justify-center h-10 w-10 rounded-md bg-gray-100">
                                <ion-icon name="ellipsis-horizontal" class="text-xl"></ion-icon>
                            </a>
                            <!-- more drowpdown -->
                            <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700" uk-drop="mode: click;pos: bottom-right;animation: uk-animation-slide-bottom-small; offset:5">
                                <ul class="space-y-1">
                                    <li>
                                        <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                            <ion-icon name="arrow-redo-outline" class="pr-2 text-xl"></ion-icon> Share Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                            <ion-icon name="create-outline" class="pr-2 text-xl"></ion-icon> Account setting
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                            <ion-icon name="notifications-off-outline" class="pr-2 text-lg"></ion-icon> Disable notifications
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                            <ion-icon name="star-outline" class="pr-2 text-xl"></ion-icon> Add favorites
                                        </a>
                                    </li>
                                    <li>
                                        <hr class="-mx-2 my-2 dark:border-gray-800">
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center px-3 py-2 text-red-500 hover:bg-red-50 hover:text-red-500 rounded-md dark:hover:bg-red-600">
                                            <ion-icon name="stop-circle-outline" class="pr-2 text-xl"></ion-icon> Unfriend
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="uk-switcher lg:mt-8 mt-4" id="timeline-tab">

                    <!-- Timeline -->
                    <div class="md:flex md:space-x-6 lg:mx-16">
                        <div class="space-y-5 flex-shrink-0 md:w-7/12">

                            <!-- create post  -->
                            <div class="card lg:mx-0 p-4" uk-toggle="target: #create-post-modal">
                                <div class="flex space-x-3">
                                    <img src="../assets/images/avatars/avatar-2.jpg" class="w-10 h-10 rounded-full">
                                    <input placeholder="What's Your Mind ? Hamse!" class="bg-gray-100 hover:bg-gray-200 flex-1 h-10 px-6 rounded-full">
                                </div>
                                <div class="grid grid-flow-col pt-3 -mx-1 -mb-1 font-semibold text-sm">
                                    <div class="hover:bg-gray-100 flex items-center p-1.5 rounded-md cursor-pointer">
                                        <svg class="bg-blue-100 h-9 mr-2 p-1.5 rounded-full text-blue-600 w-9 -my-0.5 hidden lg:block" data-tippy-placement="top" title="Tooltip" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                        Photo/Video
                                    </div>
                                    <div class="hover:bg-gray-100 flex items-center p-1.5 rounded-md cursor-pointer">
                                        <svg class="bg-green-100 h-9 mr-2 p-1.5 rounded-full text-green-600 w-9 -my-0.5 hidden lg:block" uk-tooltip="title: Messages ; pos: bottom ;offset:7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" title="" aria-expanded="false">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                                        </svg>
                                        Tag Friend
                                    </div>
                                    <div class="hover:bg-gray-100 flex items-center p-1.5 rounded-md cursor-pointer">
                                        <svg class="bg-red-100 h-9 mr-2 p-1.5 rounded-full text-red-600 w-9 -my-0.5 hidden lg:block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        Fealing /Activity
                                    </div>
                                </div>
                            </div>

                            <div class="card lg:mx-0 uk-animation-slide-bottom-small">

                                <!-- post header-->
                                <div class="flex justify-between items-center lg:p-4 p-2.5">
                                    <div class="flex flex-1 items-center space-x-4">
                                        <a href="#">
                                            <img src="../assets/images/avatars/avatar-2.jpg" class="bg-gray-200 border border-white rounded-full w-10 h-10">
                                        </a>
                                        <div class="flex-1 font-semibold capitalize">
                                            <a href="#" class="text-black dark:text-gray-100"> Johnson smith </a>
                                            <div class="text-gray-700 flex items-center space-x-2"> 5 <span> hrs </span>
                                                <ion-icon name="people"></ion-icon>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#"> <i class="icon-feather-more-horizontal text-2xl hover:bg-gray-200 rounded-full p-2 transition -mr-1 dark:hover:bg-gray-700"></i> </a>
                                        <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden text-base border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700" uk-drop="mode: click;pos: bottom-right;animation: uk-animation-slide-bottom-small">

                                            <ul class="space-y-1">
                                                <li>
                                                    <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                                        <i class="uil-share-alt mr-1"></i> Share
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                                        <i class="uil-edit-alt mr-1"></i> Edit Post
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                                        <i class="uil-comment-slash mr-1"></i> Disable comments
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                                        <i class="uil-favorite mr-1"></i> Add favorites
                                                    </a>
                                                </li>
                                                <li>
                                                    <hr class="-mx-2 my-2 dark:border-gray-800">
                                                </li>
                                                <li>
                                                    <a href="#" class="flex items-center px-3 py-2 text-red-500 hover:bg-red-100 hover:text-red-500 rounded-md dark:hover:bg-red-600">
                                                        <i class="uil-trash-alt mr-1"></i> Delete
                                                    </a>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>

                                <div uk-lightbox>
                                    <a href="../assets/images/avatars/avatar-lg-3.jpg">
                                        <img src="../assets/images/avatars/avatar-lg-4.jpg" alt="" class="max-h-96 w-full object-cover">
                                    </a>
                                </div>


                                <div class="p-4 space-y-3">

                                    <div class="flex space-x-4 lg:font-bold">
                                        <a href="#" class="flex items-center space-x-2">
                                            <div class="p-2 rounded-full  text-black lg:bg-gray-100 dark:bg-gray-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                                    <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                                </svg>
                                            </div>
                                            <div> Like</div>
                                        </a>
                                        <a href="#" class="flex items-center space-x-2">
                                            <div class="p-2 rounded-full  text-black lg:bg-gray-100 dark:bg-gray-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                                    <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <div> Comment</div>
                                        </a>
                                        <a href="#" class="flex items-center space-x-2 flex-1 justify-end">
                                            <div class="p-2 rounded-full  text-black lg:bg-gray-100 dark:bg-gray-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                                    <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                                                </svg>
                                            </div>
                                            <div> Share</div>
                                        </a>
                                    </div>
                                    <div class="flex items-center space-x-3 pt-2">
                                        <div class="flex items-center">
                                            <img src="../assets/images/avatars/avatar-1.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900">
                                            <img src="../assets/images/avatars/avatar-4.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                                            <img src="../assets/images/avatars/avatar-2.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                                        </div>
                                        <div class="dark:text-gray-100">
                                            Liked <strong> Johnson</strong> and <strong> 209 Others </strong>
                                        </div>
                                    </div>

                                    <div class="border-t py-4 space-y-4 dark:border-gray-600">
                                        <div class="flex">
                                            <div class="w-10 h-10 rounded-full relative flex-shrink-0">
                                                <img src="../assets/images/avatars/avatar-1.jpg" alt="" class="absolute h-full rounded-full w-full">
                                            </div>
                                            <div>
                                                <div class="text-gray-700 py-2 px-3 rounded-md bg-gray-100 relative lg:ml-5 ml-2 lg:mr-12  dark:bg-gray-800 dark:text-gray-100">
                                                    <p class="leading-6">In ut odio libero vulputate <urna class="i uil-heart"></urna> <i class="uil-grin-tongue-wink"> </i> </p>
                                                    <div class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-800"></div>
                                                </div>
                                                <div class="text-sm flex items-center space-x-3 mt-2 ml-5">
                                                    <a href="#" class="text-red-600"> <i class="uil-heart"></i> Love </a>
                                                    <a href="#"> Replay </a>
                                                    <span> 3d </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex">
                                            <div class="w-10 h-10 rounded-full relative flex-shrink-0">
                                                <img src="../assets/images/avatars/avatar-1.jpg" alt="" class="absolute h-full rounded-full w-full">
                                            </div>
                                            <div>
                                                <div class="text-gray-700 py-2 px-3 rounded-md bg-gray-100 relative lg:ml-5 ml-2 lg:mr-12  dark:bg-gray-800 dark:text-gray-100">
                                                    <p class="leading-6"> sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. David !<i class="uil-grin-tongue-wink-alt"></i> </p>
                                                    <div class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-800"></div>
                                                </div>
                                                <div class="text-xs flex items-center space-x-3 mt-2 ml-5">
                                                    <a href="#" class="text-red-600"> <i class="uil-heart"></i> Love </a>
                                                    <a href="#"> Replay </a>
                                                    <span> 3d </span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <a href="#" class="hover:text-blue-600 hover:underline"> Veiw 8 more Comments </a>

                                    <div class="bg-gray-100 rounded-full relative dark:bg-gray-800 border-t">
                                        <input placeholder="Add your Comment.." class="bg-transparent max-h-10 shadow-none px-5">
                                        <div class="-m-0.5 absolute bottom-0 flex items-center right-3 text-xl">
                                            <a href="#">
                                                <ion-icon name="happy-outline" class="hover:bg-gray-200 p-1.5 rounded-full"></ion-icon>
                                            </a>
                                            <a href="#">
                                                <ion-icon name="image-outline" class="hover:bg-gray-200 p-1.5 rounded-full"></ion-icon>
                                            </a>
                                            <a href="#">
                                                <ion-icon name="link-outline" class="hover:bg-gray-200 p-1.5 rounded-full"></ion-icon>
                                            </a>
                                        </div>
                                    </div>

                                </div>

                            </div>


                            <div class="flex justify-center mt-6">
                                <a href="#" class="bg-white font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white">
                                    No More Posts to show ....</a>
                            </div>


                        </div>

                        <!-- Sidebar -->
                        <div class="w-full space-y-6">

                            <div class="widget card p-5">
                                <h4 class="text-lg font-semibold" style="text-align: center;"> About </h4>
                                <hr>
                                <ul class="text-gray-600 space-y-3 mt-3" id="basic-details">
                                    <li class="flex items-center space-x-2">
                                        <img src="https://img.icons8.com/fluency/36/000000/username.png" style="display:inline-block;">
                                        <strong style="font-size:medium; vertical-align:middle"><?php echo $usr_name; ?></strong>
                                    </li>

                                    <li class="flex items-center space-x-2">
                                        <img src="https://img.icons8.com/fluency/36/000000/user-shield.png" style="display:inline-block;">
                                        <strong style="font-size:medium; vertical-align:middle"><?php echo $usr_uname; ?></strong>
                                    </li>

                                    <li class="flex items-center space-x-2">
                                        <img src="https://img.icons8.com/fluency/36/000000/secured-letter.png" style="display:inline-block;">
                                        <strong style="font-size:small; vertical-align:middle"><?php echo $usr_mail; ?></strong>
                                    </li>

                                    <li class="flex items-center space-x-2">
                                        <img src="https://img.icons8.com/fluency/36/000000/phone-office.png" style="display:inline-block;">
                                        <strong style="font-size:medium; vertical-align:middle"> +91 <?php echo $usr_phone; ?></strong>
                                    </li>
                                    <li class="flex items-center space-x-2">
                                        <img src="https://img.icons8.com/fluency/38/000000/place-marker.png" style="display:inline-block;">
                                        <strong style="font-size:medium; vertical-align:middle"> Indergarh, Madhya Pradesh </strong>
                                    </li>
                                    <hr>
                                    <hr>
                                    <li class="flex items-center" style="text-align: center;">
                                        <img src="https://img.icons8.com/fluency/36/000000/resume.png" style="display:inline-block;">
                                        <strong style="font-size:medium; vertical-align:middle">Interested fields </strong>
                                    </li>
                                    <hr>
                                    <div><strong> <?php echo getInterest($usr_interest); ?> </strong></div>
                                </ul>
                                <a href="settings" class="button gray mt-3 w-full"> Edit </a>
                            </div>

                            <div class="widget card p-5 border-t">
                                <div class="flex items-center justify-between mb-4">
                                    <div>
                                        <h4 class="text-lg font-semibold"> Friends </h4>
                                        <p class="text-sm"> 3,4510 Friends</p>
                                    </div>
                                    <a href="#" class="text-blue-600 ">See all</a>
                                </div>
                                <div class="grid grid-cols-3 gap-3 text-gray-600 font-semibold">
                                    <a href="#">
                                        <div class="avatar relative rounded-md overflow-hidden w-full h-24 mb-2">
                                            <img src="../assets/images/avatars/avatar-1.jpg" alt="" class="w-full h-full object-cover absolute">
                                        </div>
                                        <div class="text-sm truncate"> Dennis Han </div>
                                    </a>
                                    <a href="#">
                                        <div class="avatar relative rounded-md overflow-hidden w-full h-24 mb-2">
                                            <img src="../assets/images/avatars/avatar-2.jpg" alt="" class="w-full h-full object-cover absolute">
                                        </div>
                                        <div class="text-sm truncate"> Erica Jones </div>
                                    </a>
                                    <a href="#">
                                        <div class="avatar relative rounded-md overflow-hidden w-full h-24 mb-2">
                                            <img src="../assets/images/avatars/avatar-3.jpg" alt="" class="w-full h-full object-cover absolute">
                                        </div>
                                        <div class="text-sm truncate"> Stella Johnson </div>
                                    </a>
                                    <a href="#">
                                        <div class="avatar relative rounded-md overflow-hidden w-full h-24 mb-2">
                                            <img src="../assets/images/avatars/avatar-4.jpg" alt="" class="w-full h-full object-cover absolute">
                                        </div>
                                        <div class="text-sm truncate"> Alex Dolgove</div>
                                    </a>
                                    <a href="#">
                                        <div class="avatar relative rounded-md overflow-hidden w-full h-24 mb-2">
                                            <img src="../assets/images/avatars/avatar-5.jpg" alt="" class="w-full h-full object-cover absolute">
                                        </div>
                                        <div class="text-sm truncate"> Jonathan Ali </div>
                                    </a>
                                    <a href="#">
                                        <div class="avatar relative rounded-md overflow-hidden w-full h-24 mb-2">
                                            <img src="../assets/images/avatars/avatar-6.jpg" alt="" class="w-full h-full object-cover absolute">
                                        </div>
                                        <div class="text-sm truncate"> Erica Han </div>
                                    </a>
                                </div>
                                <button class="button gray mt-3 w-full"> See all </button>
                            </div>

                        </div>
                    </div>


                    <!-- Friends  -->

                    <div class="card md:p-6 p-2 max-w-3xl mx-auto">

                        <h2 class="text-xl font-bold"> Friends </h2>

                        <nav class="responsive-nav border-b">
                            <ul uk-switcher="connect: #friends-tab; animation: uk-animation-fade">
                                <li id="all_friends"><a href="#" class="lg:px-2"> All Friends <span> 3,450 </span> </a></li>
                                <li><a href="#" class="lg:px-2"> Recently added </a></li>
                                <li><a href="#" class="lg:px-2"> Pending Requests </a></li>
                                <li><a href="#" class="lg:px-2"> Suggestions </a></li>
                            </ul>
                        </nav>

                        <div class="uk-switcher lg:mt-8 mt-4" id="friends-tab">

                            <!-- Starts Here  -->

                            <div>
                                <div class="grid md:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-x-2 gap-y-4 mt-3">

                                    <div class="card p-2">
                                        <a href="timeline.html">
                                            <img src="../assets/images/avatars/avatar-2.jpg" class="h-36 object-cover rounded-md shadow-sm w-full">
                                        </a>
                                        <div class="pt-3 px-1">
                                            <a href="timeline.html" class="text-base font-semibold mb-0.5"> James Lewis 1</a>
                                            <p class="font-medium text-sm">843K Following </p>
                                            <button class="bg-blue-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1">
                                                Following
                                            </button>
                                        </div>
                                    </div>

                                </div>

                                <div class="flex justify-center mt-6">
                                    <a href="#" class="bg-white font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white">
                                        Load more ..</a>
                                </div>
                            </div>

                            <!-- Ends Here  -->


                            <!-- Starts Here  -->

                            <div>
                                <div class="grid md:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-x-2 gap-y-4 mt-3">

                                    <div class="card p-2">
                                        <a href="timeline.html">
                                            <img src="../assets/images/avatars/avatar-2.jpg" class="h-36 object-cover rounded-md shadow-sm w-full">
                                        </a>
                                        <div class="pt-3 px-1">
                                            <a href="timeline.html" class="text-base font-semibold mb-0.5"> James Lewis 2</a>
                                            <p class="font-medium text-sm"> 843K Following </p>
                                            <button class="bg-blue-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1">
                                                Following
                                            </button>
                                        </div>
                                    </div>

                                </div>

                                <div class="flex justify-center mt-6">
                                    <a href="#" class="bg-white font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white">
                                        Load more ..</a>
                                </div>
                            </div>

                            <!-- Ends Here  -->


                            <!-- Starts Here  -->

                            <div>
                                <div class="grid md:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-x-2 gap-y-4 mt-3">

                                    <div class="card p-2">
                                        <a href="timeline.html">
                                            <img src="../assets/images/avatars/avatar-3.jpg" class="h-36 object-cover rounded-md shadow-sm w-full">
                                        </a>
                                        <div class="pt-3 px-1">
                                            <a href="timeline.html" class="text-base font-semibold mb-0.5"> Monroe Parker </a>
                                            <p class="font-medium text-sm">843K Following </p>
                                            <button class="bg-blue-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1">
                                                Following
                                            </button>
                                        </div>
                                    </div>

                                </div>

                                <div class="flex justify-center mt-6">
                                    <a href="#" class="bg-white font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white">
                                        Load more ..</a>
                                </div>
                            </div>

                            <!-- Ends Here  -->


                            <!-- Starts Here  -->

                            <div>
                                <div class="grid md:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-x-2 gap-y-4 mt-3">

                                    <?php

                                    include '../config.php';

                                    $stmt = $link->prepare("SELECT * FROM `zone_users` WHERE `interest` = ? ");
                                    $stmt->bind_param("i", $usr_interest);

                                    $stmt->execute();

                                    $result = $stmt->get_result();
                                    while ($row = $result->fetch_assoc()) {

                                    ?>

                                        <div class="card p-2">
                                            <a href="timeline.html">
                                                <img src="<?php echo $row['profile']; ?>" class="h-36 object-cover rounded-md shadow-sm w-full">
                                            </a>
                                            <div class="pt-3 px-1">
                                                <a href="timeline.html" class="text-base font-semibold mb-0.5"><?php echo $row['name']; ?></a>
                                                <p class="font-medium text-sm"><?php echo getTotal($row['zone_id']); ?> Following</p>
                                                <button onclick="makeRequest(<?php echo $row['zone_id']; ?>, <?php echo $_SESSION['zone_id']; ?>)" id="rq12345" class="bg-blue-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1">
                                                    Connect
                                                </button>
                                            </div>
                                        </div>
                                    <?php  } ?>

                                </div>

                                <div class="flex justify-center mt-6">
                                    <a href="#" class="bg-white font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white">
                                        Load more ..</a>
                                </div>
                            </div>

                            <!-- Ends Here  -->


                        </div>


                    </div>

                    <!-- Friends  -->


                    <!-- Events List  -->

                    <div class="card md:p-6 p-2 max-w-3xl mx-auto">

                        <div class="flex justify-between items-start relative md:mb-4 mb-3">
                            <div class="flex-1">
                                <h2 class="text-xl font-bold"> Events List </h2>
                                <nav class="responsive-nav style-2 md:m-0 -mx-4">
                                    <ul uk-switcher="connect: #photos-tab; animation: uk-animation-fade">
                                        <li><a href="#" class="lg:px-2"> Joined <span> 230</span> </a></li>
                                        <li><a href="#" class="lg:px-2"> Attended(Past) </a></li>
                                        <li><a href="#" class="lg:px-2"> Suggestions </a></li>
                                    </ul>
                                </nav>
                            </div>
                            <a href="#offcanvas-create" uk-toggle class="flex items-center justify-center z-10 h-10 w-10 rounded-full bg-blue-600 text-white absolute right-0" data-tippy-placement="left" title="Create New Album">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>

                        <div class="uk-switcher lg:mt-8 mt-4" id="photos-tab">

                            <!-- Starts Here  -->

                            <div>
                                <div class="grid md:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-3 mt-5">
                                    <div>
                                        <div class="bg-green-400 max-w-full lg:h-44 h-36 rounded-lg relative overflow-hidden shadow uk-transition-toggle">
                                            <img src="../assets/images/post/img-1.jpg" class="w-full h-full absolute object-cover inset-0">
                                            <!-- overly-->
                                            <div class="-bottom-12 absolute bg-gradient-to-b from-transparent h-1/2 to-gray-800 uk-transition-slide-bottom-small w-full"></div>
                                            <div class="absolute bottom-0 w-full p-3 text-white uk-transition-slide-bottom-small">
                                                <div class="text-base" style="text-align: center;"> Event Name </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex justify-center mt-6">
                                    <a href="#" class="bg-white dark:bg-gray-900 font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white">
                                        Load more ..</a>
                                </div>

                            </div>

                            <!-- Ends Here  -->

                            <!-- Starts Here  -->

                            <div>
                                <div class="grid md:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-3 mt-5">
                                    <div>
                                        <div class="bg-green-400 max-w-full lg:h-44 h-36 rounded-lg relative overflow-hidden shadow uk-transition-toggle">
                                            <img src="../assets/images/post/img-1.jpg" class="w-full h-full absolute object-cover inset-0">
                                            <!-- overly-->
                                            <div class="-bottom-12 absolute bg-gradient-to-b from-transparent h-1/2 to-gray-800 uk-transition-slide-bottom-small w-full"></div>
                                            <div class="absolute bottom-0 w-full p-3 text-white uk-transition-slide-bottom-small">
                                                <div class="text-base" style="text-align: center;"> Event Name </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex justify-center mt-6">
                                    <a href="#" class="bg-white dark:bg-gray-900 font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white">
                                        Load more ..</a>
                                </div>

                            </div>

                            <!-- Ends Here  -->

                            <!-- Starts Here  -->

                            <div>
                                <div class="grid md:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-3 mt-5">
                                    <div>
                                        <div class="bg-green-400 max-w-full lg:h-44 h-36 rounded-lg relative overflow-hidden shadow uk-transition-toggle">
                                            <img src="../assets/images/post/img-1.jpg" class="w-full h-full absolute object-cover inset-0">
                                            <!-- overly-->
                                            <div class="-bottom-12 absolute bg-gradient-to-b from-transparent h-1/2 to-gray-800 uk-transition-slide-bottom-small w-full"></div>
                                            <div class="absolute bottom-0 w-full p-3 text-white uk-transition-slide-bottom-small">
                                                <div class="text-base" style="text-align: center;"> Event Name </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex justify-center mt-6">
                                    <a href="#" class="bg-white dark:bg-gray-900 font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white">
                                        Load more ..</a>
                                </div>

                            </div>

                            <!-- Ends Here  -->

                        </div>

                    </div>


                </div>

            </div>
        </div>

    </div>



    <!-- Craete post modal -->
    <div id="create-post-modal" class="create-post" uk-modal>
        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical rounded-lg p-0 lg:w-5/12 relative shadow-2xl uk-animation-slide-bottom-small">

            <div class="text-center py-4 border-b">
                <h3 class="text-lg font-semibold"> Create Post </h3>
                <button class="uk-modal-close-default bg-gray-100 rounded-full p-2.5 m-1 right-2" type="button" uk-close uk-tooltip="title: Close ; pos: bottom ;offset:7"></button>
            </div>
            <div class="flex flex-1 items-start space-x-4 p-5">
                <img src="../assets/images/avatars/avatar-2.jpg" class="bg-gray-200 border border-white rounded-full w-11 h-11">
                <div class="flex-1 pt-2">
                    <textarea class="uk-textare text-black shadow-none focus:shadow-none text-xl font-medium resize-none" rows="5" placeholder="What's Your Mind ? Stella!"></textarea>
                </div>

            </div>
            <div class="bsolute bottom-0 p-4 space-x-4 w-full">
                <div class="flex bg-gray-50 border border-purple-100 rounded-2xl p-3 shadow-sm items-center">
                    <div class="lg:block hidden"> Add to your post </div>
                    <div class="flex flex-1 items-center lg:justify-end justify-center space-x-2">

                        <svg class="bg-blue-100 h-9 p-1.5 rounded-full text-blue-600 w-9 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <svg class="text-red-600 h-9 p-1.5 rounded-full bg-red-100 w-9 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"> </path>
                        </svg>
                        <svg class="text-green-600 h-9 p-1.5 rounded-full bg-green-100 w-9 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                        </svg>
                        <svg class="text-pink-600 h-9 p-1.5 rounded-full bg-pink-100 w-9 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"> </path>
                        </svg>
                        <svg class="text-pink-600 h-9 p-1.5 rounded-full bg-pink-100 w-9 cursor-pointer" id="veiw-more" hidden fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"> </path>
                        </svg>
                        <svg class="text-pink-600 h-9 p-1.5 rounded-full bg-pink-100 w-9 cursor-pointer" id="veiw-more" hidden fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                        </svg>
                        <svg class="text-purple-600 h-9 p-1.5 rounded-full bg-purple-100 w-9 cursor-pointer" id="veiw-more" hidden fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path>
                        </svg>

                        <!-- view more -->
                        <svg class="hover:bg-gray-200 h-9 p-1.5 rounded-full w-9 cursor-pointer" id="veiw-more" uk-toggle="target: #veiw-more; animation: uk-animation-fade" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"> </path>
                        </svg>

                    </div>
                </div>
            </div>
            <div class="flex items-center w-full justify-between p-3 border-t">

                <select class="selectpicker mt-2 col-4 story">
                    <option>Only me</option>
                    <option>Every one</option>
                    <option>People I Join </option>
                    <optionion>People Join Me</optionion>
                </select>

                <div class="flex space-x-2">
                    <a href="#" class="bg-red-100 flex font-medium h-9 items-center justify-center px-5 rounded-md text-red-600 text-sm">
                        <svg class="h-5 pr-1 rounded-full text-red-500 w-6 fill-current" id="veiw-more" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="false">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                        </svg>
                        Live </a>
                    <a href="#" class="bg-blue-600 flex h-9 items-center justify-center rounded-md text-white px-5 font-medium">
                        Share </a>
                </div>

                <a href="#" hidden class="bg-blue-600 flex h-9 items-center justify-center rounded-lg text-white px-12 font-semibold">
                    Share </a>
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
        function makeRequest(connector, requestor) {

            $(document).ready(function() {


                $.ajax({
                    url: "../scripts.php",
                    type: "POST",
                    data: {
                        action: 'makeRequest',
                        requester: requestor,
                        connector: connector,
                    },
                    success: function(data) {
                        if (data == 'Requested') {
                            $('#rq12345').html(data);
                        }else{
                            alert(data);
                        }
                    }
                });

            })
        }
    </script>

</body>

</html>