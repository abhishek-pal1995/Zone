<?php

include 'get-data.php';

?>

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

    <title>Zone | Home</title>
    <meta name="description" content="Socialite is - Professional A unique and beautiful collection of UI elements">

    <!-- Title and Description -->

</head>

<body>

    <!-- Wrapper Starts Here  -->

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
                <div class="flex justify-between relative md:mb-4 mb-3">
                    <div class="flex-1">
                        <h2 class="text-2xl font-semibold"> Events </h2>
                        <nav class="responsive-nav border-b md:m-0 -mx-4">
                            <ul uk-switcher="connect: #events-tab; animation: uk-animation-fade">
                                <li><a href="#" class="lg:px-2">Suggestions</a></li>
                                <li><a href="#" class="lg:px-2">Trending</a></li>
                                <li><a href="#" class="lg:px-2">Popular</a></li>
                                <li><a href="#" class="lg:px-2">Live</a></li>
                                <li><a href="#" class="lg:px-2">Free</a></li>
                            </ul>
                        </nav>
                    </div>
                    <a href="#" class="flex items-center justify-center h-9 lg:px-5 px-2 rounded-md bg-blue-600 text-white space-x-1.5 absolute right-0" uk-toggle="target: #filter-modal">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="md:block hidden"> Filter </span>
                    </a>
                </div>

                <!-- Starts here -->

                <div class="uk-switcher lg:mt-8 mt-4" id="events-tab">

                    <div class="relative" uk-slider="finite: true">
                        <div class="uk-slider-container px-1 py-3">
                            <ul class="uk-slider-items uk-child-width-1-4@m uk-child-width-1-3@s uk-grid-small uk-grid">
                                <li class="">
                                    <div class="card">
                                        <div class="card-media h-32">
                                            <div class="card-media-overly">
                                            </div>
                                            <img src="assets/images/events/img-2.jpg" alt="" class="">
                                            <div class="absolute bg-red-100 font-semibold px-2.5 py-1 rounded-full text-red-500 text-xs top-2.5 left-2.5">
                                                Happening now
                                            </div>
                                        </div>
                                        <div class="uk-position-large uk-position-center-right uk-overlay uk-overlay-default">
                                            <img class="w-14 h-14 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="card-body">
                                            <div class="text-xs uppercase text-red-500 font-semibold"> Happening now
                                            </div>
                                            <a href="timeline-event.html" class="box-title mb-1"> The global creative
                                            </a>
                                            <div class="text-sm font-medium mt-1">Ankara</div>
                                            <div class="flex items-center space-x-2 text-sm text-gray-500 capitalize">
                                                <div> 15 intersted</div>
                                                <div>·</div>
                                                <div> 2 going </div>
                                            </div>
                                            <div class="flex mt-2 space-x-2 text-sm">
                                                <a href="#" class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-1.5">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg> intersted
                                                </a>
                                                <a href="#" class="bg-gray-200 flex h-8 items-center px-3 rounded-md">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card">
                                        <div class="card-media h-32">
                                            <div class="card-media-overly"></div>
                                            <img src="assets/images/events/img-4.jpg" alt="" class="">
                                            <div class="absolute bg-blue-100 font-semibold px-2.5 py-1 rounded-full text-blue-500 text-xs top-2.5 left-2.5">
                                                Upcomming</div>
                                        </div>
                                        <div class="uk-position-large uk-position-center-right uk-overlay uk-overlay-default">
                                            <img class="w-14 h-14 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4
                                            " src="assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="card-body">
                                            <div class="text-xs uppercase text-blue-500 font-semibold">Uk brands</div>
                                            <a href="timeline-event.html" class="box-title  mb-1"> Safety and Flight
                                            </a>
                                            <div class="text-sm font-medium mt-1">London</div>
                                            <div class="flex items-center space-x-2 text-sm text-gray-500 capitalize">
                                                <div> 15 intersted</div>
                                                <div>·</div>
                                                <div> 2 going </div>
                                            </div>
                                            <div class="flex mt-2 space-x-2 text-sm">
                                                <a href="#" class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-1.5">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    intersted
                                                </a>
                                                <a href="#" class="bg-gray-200 flex h-8 items-center px-3 rounded-md">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card">
                                        <div class="card-media h-32">
                                            <div class="card-media-overly"></div>
                                            <img src="assets/images/events/img-2.jpg" alt="" class="">
                                        </div>
                                        <div class="uk-position-large uk-position-center-right uk-overlay uk-overlay-default">
                                            <img class="w-14 h-14 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="card-body">
                                            <div class="text-xs uppercase text-green-500 font-semibold">Conference
                                            </div>
                                            <a href="timeline-event.html" class="box-title mb-1"> Accept Who I Am</a>
                                            <div class="text-sm font-medium mt-1">Dubai</div>
                                            <div class="flex items-center space-x-2 text-sm text-gray-500 capitalize">
                                                <div> 15 intersted</div>
                                                <div>·</div>
                                                <div> 2 going </div>
                                            </div>
                                            <div class="flex mt-2 space-x-2 text-sm">
                                                <a href="#" class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-1.5">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    intersted
                                                </a>
                                                <a href="#" class="bg-gray-200 flex h-8 items-center px-3 rounded-md">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card">
                                        <div class="card-media h-32">
                                            <div class="card-media-overly"></div>
                                            <img src="assets/images/events/img-4.jpg" alt="" class="">
                                        </div>
                                        <div class="uk-position-large uk-position-center-right uk-overlay uk-overlay-default">
                                            <img class="w-14 h-14 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="card-body">
                                            <div class="text-xs uppercase text-yellow-500 font-semibold">Upcomming
                                            </div>
                                            <a href="timeline-event.html" class="box-title mb-1"> Perspective is
                                                everything </a>
                                            <div class="text-sm font-medium mt-1">Dubai</div>
                                            <div class="flex items-center space-x-2 text-sm text-gray-500 capitalize">
                                                <div> 15 intersted</div>
                                                <div>·</div>
                                                <div> 2 going </div>
                                            </div>
                                            <div class="flex mt-2 space-x-2 text-sm">
                                                <a href="#" class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-1.5">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    intersted
                                                </a>
                                                <a href="#" class="bg-gray-200 flex h-8 items-center px-3 rounded-md">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card">
                                        <div class="card-media h-32">
                                            <div class="card-media-overly"></div>
                                            <img src="assets/images/events/img-2.jpg" alt="" class="">
                                            <div class="absolute bg-red-100 font-semibold px-2.5 py-1 rounded-full text-red-500 text-xs top-2.5 left-2.5">Happening now </div>
                                        </div>
                                        <div class="uk-position-large uk-position-center-right uk-overlay uk-overlay-default">
                                            <img class="w-14 h-14 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="card-body">
                                            <div class="text-xs uppercase text-red-500 font-semibold"> Happening now
                                            </div>
                                            <a href="timeline-event.html" class="box-title mb-1"> The global creative
                                            </a>
                                            <div class="text-sm font-medium mt-1">Ankara</div>
                                            <div class="flex items-center space-x-2 text-sm text-gray-500 capitalize">
                                                <div> 15 intersted</div>
                                                <div>·</div>
                                                <div> 2 going </div>
                                            </div>
                                            <div class="flex mt-2 space-x-2 text-sm">
                                                <a href="#" class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-1.5">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg> intersted
                                                </a>
                                                <a href="#" class="bg-gray-200 flex h-8 items-center px-3 rounded-md">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <a class="absolute bg-white top-16 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="previous"> <i class="icon-feather-chevron-left"></i></a>
                            <a class="absolute bg-white top-16 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>

                        </div>
                    </div>


                    <div class="relative" uk-slider="finite: true">

                        <div class="uk-slider-container px-1 py-3">
                            <ul class="uk-slider-items uk-child-width-1-4@m uk-child-width-1-3@s uk-grid-small uk-grid">
                                <li class="">
                                    <div class="card">
                                        <div class="card-media h-32">
                                            <div class="card-media-overly">

                                            </div>

                                            <img src="assets/images/events/img-2.jpg" alt="" class="">

                                            <div class="absolute bg-red-100 font-semibold px-2.5 py-1 rounded-full text-red-500 text-xs top-2.5 left-2.5">
                                                Happening now

                                            </div>
                                        </div>


                                        <div class="uk-position-large uk-position-center-right uk-overlay uk-overlay-default">
                                            <img class="w-14 h-14 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4
                                            " src="assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>

                                        <div class="card-body">
                                            <div class="text-xs uppercase text-red-500 font-semibold"> Happening now
                                            </div>
                                            <a href="timeline-event.html" class="box-title mb-1"> The global creative 2
                                            </a>
                                            <div class="text-sm font-medium mt-1">Ankara</div>

                                            <div class="flex items-center space-x-2 text-sm text-gray-500 capitalize">
                                                <div> 15 intersted</div>
                                                <div>·</div>
                                                <div> 2 going </div>
                                            </div>

                                            <div class="flex mt-2 space-x-2 text-sm">
                                                <a href="#" class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-1.5">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg> intersted
                                                </a>
                                                <a href="#" class="bg-gray-200 flex h-8 items-center px-3 rounded-md">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card">
                                        <div class="card-media h-32">
                                            <div class="card-media-overly"></div>
                                            <img src="assets/images/events/img-4.jpg" alt="" class="">
                                            <div class="absolute bg-blue-100 font-semibold px-2.5 py-1 rounded-full text-blue-500 text-xs top-2.5 left-2.5">
                                                Upcomming</div>
                                        </div>

                                        <div class="uk-position-large uk-position-center-right uk-overlay uk-overlay-default">
                                            <img class="w-14 h-14 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4
                                            " src="assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="card-body">
                                            <div class="text-xs uppercase text-blue-500 font-semibold">Uk brands</div>
                                            <a href="timeline-event.html" class="box-title  mb-1"> Safety and Flight
                                            </a>
                                            <div class="text-sm font-medium mt-1">London</div>

                                            <div class="flex items-center space-x-2 text-sm text-gray-500 capitalize">
                                                <div> 15 intersted</div>
                                                <div>·</div>
                                                <div> 2 going </div>
                                            </div>

                                            <div class="flex mt-2 space-x-2 text-sm">
                                                <a href="#" class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-1.5">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    intersted
                                                </a>
                                                <a href="#" class="bg-gray-200 flex h-8 items-center px-3 rounded-md">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card">
                                        <div class="card-media h-32">
                                            <div class="card-media-overly"></div>
                                            <img src="assets/images/events/img-2.jpg" alt="" class="">
                                        </div>
                                        <div class="uk-position-large uk-position-center-right uk-overlay uk-overlay-default">
                                            <img class="w-14 h-14 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4
                                            " src="assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="card-body">
                                            <div class="text-xs uppercase text-green-500 font-semibold">Conference
                                            </div>
                                            <a href="timeline-event.html" class="box-title mb-1"> Accept Who I Am</a>
                                            <div class="text-sm font-medium mt-1">Dubai</div>

                                            <div class="flex items-center space-x-2 text-sm text-gray-500 capitalize">
                                                <div> 15 intersted</div>
                                                <div>·</div>
                                                <div> 2 going </div>
                                            </div>

                                            <div class="flex mt-2 space-x-2 text-sm">
                                                <a href="#" class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-1.5">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    intersted
                                                </a>
                                                <a href="#" class="bg-gray-200 flex h-8 items-center px-3 rounded-md">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card">
                                        <div class="card-media h-32">
                                            <div class="card-media-overly"></div>
                                            <img src="assets/images/events/img-4.jpg" alt="" class="">
                                        </div>
                                        <div class="uk-position-large uk-position-center-right uk-overlay uk-overlay-default">
                                            <img class="w-14 h-14 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4
                                            " src="assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="card-body">
                                            <div class="text-xs uppercase text-yellow-500 font-semibold">Upcomming
                                            </div>
                                            <a href="timeline-event.html" class="box-title mb-1"> Perspective is
                                                everything </a>
                                            <div class="text-sm font-medium mt-1">Dubai</div>

                                            <div class="flex items-center space-x-2 text-sm text-gray-500 capitalize">
                                                <div> 15 intersted</div>
                                                <div>·</div>
                                                <div> 2 going </div>
                                            </div>

                                            <div class="flex mt-2 space-x-2 text-sm">
                                                <a href="#" class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-1.5">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    intersted
                                                </a>
                                                <a href="#" class="bg-gray-200 flex h-8 items-center px-3 rounded-md">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card">
                                        <div class="card-media h-32">
                                            <div class="card-media-overly"></div>
                                            <img src="assets/images/events/img-2.jpg" alt="" class="">
                                            <div class="absolute bg-red-100 font-semibold px-2.5 py-1 rounded-full text-red-500 text-xs top-2.5 left-2.5">
                                                Happening
                                                now </div>
                                        </div>
                                        <div class="uk-position-large uk-position-center-right uk-overlay uk-overlay-default">
                                            <img class="w-14 h-14 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4
                                            " src="assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="card-body">
                                            <div class="text-xs uppercase text-red-500 font-semibold"> Happening now
                                            </div>
                                            <a href="timeline-event.html" class="box-title mb-1"> The global creative
                                            </a>
                                            <div class="text-sm font-medium mt-1">Ankara</div>

                                            <div class="flex items-center space-x-2 text-sm text-gray-500 capitalize">
                                                <div> 15 intersted</div>
                                                <div>·</div>
                                                <div> 2 going </div>
                                            </div>

                                            <div class="flex mt-2 space-x-2 text-sm">
                                                <a href="#" class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-1.5">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg> intersted
                                                </a>
                                                <a href="#" class="bg-gray-200 flex h-8 items-center px-3 rounded-md">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <a class="absolute bg-white top-16 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="previous"> <i class="icon-feather-chevron-left"></i></a>
                            <a class="absolute bg-white top-16 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>

                        </div>
                    </div>

                    <div class="relative" uk-slider="finite: true">

                        <div class="uk-slider-container px-1 py-3">
                            <ul class="uk-slider-items uk-child-width-1-4@m uk-child-width-1-3@s uk-grid-small uk-grid">
                                <li>
                                    <div class="card">
                                        <div class="card-media h-32">
                                            <div class="card-media-overly"></div>
                                            <img src="assets/images/events/img-2.jpg" alt="" class="">
                                            <div class="absolute bg-red-100 font-semibold px-2.5 py-1 rounded-full text-red-500 text-xs top-2.5 left-2.5">
                                                Happening now </div>
                                        </div>
                                        <div class="uk-position-large uk-position-center-right uk-overlay uk-overlay-default">
                                            <img class="w-14 h-14 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4
                                            " src="assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="card-body">
                                            <div class="text-xs uppercase text-red-500 font-semibold"> Happening now
                                            </div>
                                            <a href="timeline-event.html" class="box-title mb-1"> The global creative
                                                3</a>
                                            <div class="text-sm font-medium mt-1">Ankara</div>

                                            <div class="flex items-center space-x-2 text-sm text-gray-500 capitalize">
                                                <div> 15 intersted</div>
                                                <div>·</div>
                                                <div> 2 going </div>
                                            </div>

                                            <div class="flex mt-2 space-x-2 text-sm">
                                                <a href="#" class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-1.5">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg> intersted
                                                </a>
                                                <a href="#" class="bg-gray-200 flex h-8 items-center px-3 rounded-md">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card">
                                        <div class="card-media h-32">
                                            <div class="card-media-overly"></div>
                                            <img src="assets/images/events/img-4.jpg" alt="" class="">
                                            <div class="absolute bg-blue-100 font-semibold px-2.5 py-1 rounded-full text-blue-500 text-xs top-2.5 left-2.5">
                                                Upcomming</div>
                                        </div>
                                        <div class="uk-position-large uk-position-center-right uk-overlay uk-overlay-default">
                                            <img class="w-14 h-14 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4
                                            " src="assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="card-body">
                                            <div class="text-xs uppercase text-blue-500 font-semibold">Uk brands</div>
                                            <a href="timeline-event.html" class="box-title  mb-1"> Safety and Flight
                                            </a>
                                            <div class="text-sm font-medium mt-1">London</div>

                                            <div class="flex items-center space-x-2 text-sm text-gray-500 capitalize">
                                                <div> 15 intersted</div>
                                                <div>·</div>
                                                <div> 2 going </div>
                                            </div>

                                            <div class="flex mt-2 space-x-2 text-sm">
                                                <a href="#" class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-1.5">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    intersted
                                                </a>
                                                <a href="#" class="bg-gray-200 flex h-8 items-center px-3 rounded-md">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card">
                                        <div class="card-media h-32">
                                            <div class="card-media-overly"></div>
                                            <img src="assets/images/events/img-2.jpg" alt="" class="">
                                        </div>
                                        <div class="uk-position-large uk-position-center-right uk-overlay uk-overlay-default">
                                            <img class="w-14 h-14 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4
                                            " src="assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="card-body">
                                            <div class="text-xs uppercase text-green-500 font-semibold">Conference
                                            </div>
                                            <a href="timeline-event.html" class="box-title mb-1"> Accept Who I Am</a>
                                            <div class="text-sm font-medium mt-1">Dubai</div>

                                            <div class="flex items-center space-x-2 text-sm text-gray-500 capitalize">
                                                <div> 15 intersted</div>
                                                <div>·</div>
                                                <div> 2 going </div>
                                            </div>

                                            <div class="flex mt-2 space-x-2 text-sm">
                                                <a href="#" class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-1.5">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    intersted
                                                </a>
                                                <a href="#" class="bg-gray-200 flex h-8 items-center px-3 rounded-md">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card">
                                        <div class="card-media h-32">
                                            <div class="card-media-overly"></div>
                                            <img src="assets/images/events/img-4.jpg" alt="" class="">
                                        </div>
                                        <div class="uk-position-large uk-position-center-right uk-overlay uk-overlay-default">
                                            <img class="w-14 h-14 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4
                                            " src="assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="card-body">
                                            <div class="text-xs uppercase text-yellow-500 font-semibold">Upcomming
                                            </div>
                                            <a href="timeline-event.html" class="box-title mb-1"> Perspective is
                                                everything </a>
                                            <div class="text-sm font-medium mt-1">Dubai</div>

                                            <div class="flex items-center space-x-2 text-sm text-gray-500 capitalize">
                                                <div> 15 intersted</div>
                                                <div>·</div>
                                                <div> 2 going </div>
                                            </div>

                                            <div class="flex mt-2 space-x-2 text-sm">
                                                <a href="#" class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-1.5">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    intersted
                                                </a>
                                                <a href="#" class="bg-gray-200 flex h-8 items-center px-3 rounded-md">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card">
                                        <div class="card-media h-32">
                                            <div class="card-media-overly"></div>
                                            <img src="assets/images/events/img-2.jpg" alt="" class="">
                                            <div class="absolute bg-red-100 font-semibold px-2.5 py-1 rounded-full text-red-500 text-xs top-2.5 left-2.5">
                                                Happening
                                                now </div>
                                        </div>
                                        <div class="uk-position-large uk-position-center-right uk-overlay uk-overlay-default">
                                            <img class="w-14 h-14 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4
                                            " src="assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="card-body">
                                            <div class="text-xs uppercase text-red-500 font-semibold"> Happening now
                                            </div>
                                            <a href="timeline-event.html" class="box-title mb-1"> The global creative
                                            </a>
                                            <div class="text-sm font-medium mt-1">Ankara</div>

                                            <div class="flex items-center space-x-2 text-sm text-gray-500 capitalize">
                                                <div> 15 intersted</div>
                                                <div>·</div>
                                                <div> 2 going </div>
                                            </div>

                                            <div class="flex mt-2 space-x-2 text-sm">
                                                <a href="#" class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-1.5">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg> intersted
                                                </a>
                                                <a href="#" class="bg-gray-200 flex h-8 items-center px-3 rounded-md">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <a class="absolute bg-white top-16 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#2" uk-slider-item="previous"> <i class="icon-feather-chevron-left"></i></a>
                            <a class="absolute bg-white top-16 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#2" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>

                        </div>
                    </div>

                    <div class="relative" uk-slider="finite: true">

                        <div class="uk-slider-container px-1 py-3">
                            <ul class="uk-slider-items uk-child-width-1-4@m uk-child-width-1-3@s uk-grid-small uk-grid">
                                <li>
                                    <div class="card">
                                        <div class="card-media h-32">
                                            <div class="card-media-overly"></div>
                                            <img src="assets/images/events/img-2.jpg" alt="" class="">
                                            <div class="absolute bg-red-100 font-semibold px-2.5 py-1 rounded-full text-red-500 text-xs top-2.5 left-2.5">
                                                Happening now </div>
                                        </div>
                                        <div class="uk-position-large uk-position-center-right uk-overlay uk-overlay-default">
                                            <img class="w-14 h-14 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4
                                            " src="assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="card-body">
                                            <div class="text-xs uppercase text-red-500 font-semibold"> Happening now
                                            </div>
                                            <a href="timeline-event.html" class="box-title mb-1"> The global creative
                                                4</a>
                                            <div class="text-sm font-medium mt-1">Ankara</div>

                                            <div class="flex items-center space-x-2 text-sm text-gray-500 capitalize">
                                                <div> 15 intersted</div>
                                                <div>·</div>
                                                <div> 2 going </div>
                                            </div>

                                            <div class="flex mt-2 space-x-2 text-sm">
                                                <a href="#" class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-1.5">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg> intersted
                                                </a>
                                                <a href="#" class="bg-gray-200 flex h-8 items-center px-3 rounded-md">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card">
                                        <div class="card-media h-32">
                                            <div class="card-media-overly"></div>
                                            <img src="assets/images/events/img-4.jpg" alt="" class="">
                                            <div class="absolute bg-blue-100 font-semibold px-2.5 py-1 rounded-full text-blue-500 text-xs top-2.5 left-2.5">
                                                Upcomming</div>
                                        </div>
                                        <div class="uk-position-large uk-position-center-right uk-overlay uk-overlay-default">
                                            <img class="w-14 h-14 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4
                                            " src="assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="card-body">
                                            <div class="text-xs uppercase text-blue-500 font-semibold">Uk brands</div>
                                            <a href="timeline-event.html" class="box-title  mb-1"> Safety and Flight
                                            </a>
                                            <div class="text-sm font-medium mt-1">London</div>

                                            <div class="flex items-center space-x-2 text-sm text-gray-500 capitalize">
                                                <div> 15 intersted</div>
                                                <div>·</div>
                                                <div> 2 going </div>
                                            </div>

                                            <div class="flex mt-2 space-x-2 text-sm">
                                                <a href="#" class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-1.5">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    intersted
                                                </a>
                                                <a href="#" class="bg-gray-200 flex h-8 items-center px-3 rounded-md">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card">
                                        <div class="card-media h-32">
                                            <div class="card-media-overly"></div>
                                            <img src="assets/images/events/img-2.jpg" alt="" class="">
                                        </div>
                                        <div class="uk-position-large uk-position-center-right uk-overlay uk-overlay-default">
                                            <img class="w-14 h-14 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4
                                            " src="assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="card-body">
                                            <div class="text-xs uppercase text-green-500 font-semibold">Conference
                                            </div>
                                            <a href="timeline-event.html" class="box-title mb-1"> Accept Who I Am</a>
                                            <div class="text-sm font-medium mt-1">Dubai</div>

                                            <div class="flex items-center space-x-2 text-sm text-gray-500 capitalize">
                                                <div> 15 intersted</div>
                                                <div>·</div>
                                                <div> 2 going </div>
                                            </div>

                                            <div class="flex mt-2 space-x-2 text-sm">
                                                <a href="#" class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-1.5">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    intersted
                                                </a>
                                                <a href="#" class="bg-gray-200 flex h-8 items-center px-3 rounded-md">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card">
                                        <div class="card-media h-32">
                                            <div class="card-media-overly"></div>
                                            <img src="assets/images/events/img-4.jpg" alt="" class="">
                                        </div>
                                        <div class="uk-position-large uk-position-center-right uk-overlay uk-overlay-default">
                                            <img class="w-14 h-14 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4
                                            " src="assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="card-body">
                                            <div class="text-xs uppercase text-yellow-500 font-semibold">Upcomming
                                            </div>
                                            <a href="timeline-event.html" class="box-title mb-1"> Perspective is
                                                everything </a>
                                            <div class="text-sm font-medium mt-1">Dubai</div>

                                            <div class="flex items-center space-x-2 text-sm text-gray-500 capitalize">
                                                <div> 15 intersted</div>
                                                <div>·</div>
                                                <div> 2 going </div>
                                            </div>

                                            <div class="flex mt-2 space-x-2 text-sm">
                                                <a href="#" class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-1.5">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    intersted
                                                </a>
                                                <a href="#" class="bg-gray-200 flex h-8 items-center px-3 rounded-md">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card">
                                        <div class="card-media h-32">
                                            <div class="card-media-overly"></div>
                                            <img src="assets/images/events/img-2.jpg" alt="" class="">
                                            <div class="absolute bg-red-100 font-semibold px-2.5 py-1 rounded-full text-red-500 text-xs top-2.5 left-2.5">
                                                Happening
                                                now </div>
                                        </div>
                                        <div class="uk-position-large uk-position-center-right uk-overlay uk-overlay-default">
                                            <img class="w-14 h-14 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4
                                            " src="assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="card-body">
                                            <div class="text-xs uppercase text-red-500 font-semibold"> Happening now
                                            </div>
                                            <a href="timeline-event.html" class="box-title mb-1"> The global creative
                                            </a>
                                            <div class="text-sm font-medium mt-1">Ankara</div>

                                            <div class="flex items-center space-x-2 text-sm text-gray-500 capitalize">
                                                <div> 15 intersted</div>
                                                <div>·</div>
                                                <div> 2 going </div>
                                            </div>

                                            <div class="flex mt-2 space-x-2 text-sm">
                                                <a href="#" class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-1.5">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg> intersted
                                                </a>
                                                <a href="#" class="bg-gray-200 flex h-8 items-center px-3 rounded-md">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <a class="absolute bg-white top-16 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#3" uk-slider-item="previous"> <i class="icon-feather-chevron-left"></i></a>
                            <a class="absolute bg-white top-16 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#3" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>

                        </div>
                    </div>

                    <div class="relative" uk-slider="finite: true">

                        <div class="uk-slider-container px-1 py-3">
                            <ul class="uk-slider-items uk-child-width-1-4@m uk-child-width-1-3@s uk-grid-small uk-grid">
                                <li>
                                    <div class="card">
                                        <div class="card-media h-32">
                                            <div class="card-media-overly"></div>
                                            <img src="assets/images/events/img-2.jpg" alt="" class="">
                                            <div class="absolute bg-red-100 font-semibold px-2.5 py-1 rounded-full text-red-500 text-xs top-2.5 left-2.5">
                                                Happening now </div>
                                        </div>
                                        <div class="uk-position-large uk-position-center-right uk-overlay uk-overlay-default">
                                            <img class="w-14 h-14 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4
                                            " src="assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="card-body">
                                            <div class="text-xs uppercase text-red-500 font-semibold"> Happening now
                                            </div>
                                            <a href="timeline-event.html" class="box-title mb-1"> The global creative
                                                5</a>
                                            <div class="text-sm font-medium mt-1">Ankara</div>

                                            <div class="flex items-center space-x-2 text-sm text-gray-500 capitalize">
                                                <div> 15 intersted</div>
                                                <div>·</div>
                                                <div> 2 going </div>
                                            </div>

                                            <div class="flex mt-2 space-x-2 text-sm">
                                                <a href="#" class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-1.5">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg> intersted
                                                </a>
                                                <a href="#" class="bg-gray-200 flex h-8 items-center px-3 rounded-md">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card">
                                        <div class="card-media h-32">
                                            <div class="card-media-overly"></div>
                                            <img src="assets/images/events/img-4.jpg" alt="" class="">
                                            <div class="absolute bg-blue-100 font-semibold px-2.5 py-1 rounded-full text-blue-500 text-xs top-2.5 left-2.5">
                                                Upcomming</div>
                                        </div>
                                        <div class="uk-position-large uk-position-center-right uk-overlay uk-overlay-default">
                                            <img class="w-14 h-14 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4
                                            " src="assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="card-body">
                                            <div class="text-xs uppercase text-blue-500 font-semibold">Uk brands</div>
                                            <a href="timeline-event.html" class="box-title  mb-1"> Safety and Flight
                                            </a>
                                            <div class="text-sm font-medium mt-1">London</div>

                                            <div class="flex items-center space-x-2 text-sm text-gray-500 capitalize">
                                                <div> 15 intersted</div>
                                                <div>·</div>
                                                <div> 2 going </div>
                                            </div>

                                            <div class="flex mt-2 space-x-2 text-sm">
                                                <a href="#" class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-1.5">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    intersted
                                                </a>
                                                <a href="#" class="bg-gray-200 flex h-8 items-center px-3 rounded-md">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card">
                                        <div class="card-media h-32">
                                            <div class="card-media-overly"></div>
                                            <img src="assets/images/events/img-2.jpg" alt="" class="">
                                        </div>
                                        <div class="uk-position-large uk-position-center-right uk-overlay uk-overlay-default">
                                            <img class="w-14 h-14 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4
                                            " src="assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="card-body">

                                            <div class="text-xs uppercase text-green-500 font-semibold">Conference
                                            </div>
                                            <a href="timeline-event.html" class="box-title mb-1"> Accept Who I Am</a>
                                            <div class="text-sm font-medium mt-1">Dubai</div>

                                            <div class="flex items-center space-x-2 text-sm text-gray-500 capitalize">
                                                <div> 15 intersted</div>
                                                <div>·</div>
                                                <div> 2 going </div>
                                            </div>

                                            <div class="flex mt-2 space-x-2 text-sm">
                                                <a href="#" class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-1.5">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    intersted
                                                </a>
                                                <a href="#" class="bg-gray-200 flex h-8 items-center px-3 rounded-md">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card">
                                        <div class="card-media h-32">
                                            <div class="card-media-overly"></div>
                                            <img src="assets/images/events/img-4.jpg" alt="" class="">
                                        </div>
                                        <div class="uk-position-large uk-position-center-right uk-overlay uk-overlay-default">
                                            <img class="w-14 h-14 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4
                                            " src="assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="card-body">
                                            <div class="text-xs uppercase text-yellow-500 font-semibold">Upcomming
                                            </div>
                                            <a href="timeline-event.html" class="box-title mb-1"> Perspective is
                                                everything </a>
                                            <div class="text-sm font-medium mt-1">Dubai</div>

                                            <div class="flex items-center space-x-2 text-sm text-gray-500 capitalize">
                                                <div> 15 intersted</div>
                                                <div>·</div>
                                                <div> 2 going </div>
                                            </div>

                                            <div class="flex mt-2 space-x-2 text-sm">
                                                <a href="#" class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-1.5">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    intersted
                                                </a>
                                                <a href="#" class="bg-gray-200 flex h-8 items-center px-3 rounded-md">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card">
                                        <div class="card-media h-32">
                                            <div class="card-media-overly"></div>
                                            <img src="assets/images/events/img-2.jpg" alt="" class="">
                                            <div class="absolute bg-red-100 font-semibold px-2.5 py-1 rounded-full text-red-500 text-xs top-2.5 left-2.5">
                                                Happening
                                                now </div>
                                        </div>
                                        <div class="uk-position-large uk-position-center-right uk-overlay uk-overlay-default">
                                            <img class="w-14 h-14 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4
                                            " src="assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="card-body">
                                            <div class="text-xs uppercase text-red-500 font-semibold"> Happening now
                                            </div>
                                            <a href="timeline-event.html" class="box-title mb-1"> The global creative
                                            </a>
                                            <div class="text-sm font-medium mt-1">Ankara</div>

                                            <div class="flex items-center space-x-2 text-sm text-gray-500 capitalize">
                                                <div> 15 intersted</div>
                                                <div>·</div>
                                                <div> 2 going </div>
                                            </div>

                                            <div class="flex mt-2 space-x-2 text-sm">
                                                <a href="#" class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-1.5">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg> intersted
                                                </a>
                                                <a href="#" class="bg-gray-200 flex h-8 items-center px-3 rounded-md">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <a class="absolute bg-white top-16 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#4" uk-slider-item="previous"> <i class="icon-feather-chevron-left"></i></a>
                            <a class="absolute bg-white top-16 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#4" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>

                        </div>
                    </div>
                </div>



                <br>

                <div class="my-4 flex items-center justify-between">
                    <div>
                        <h2 class="text-xl font-semibold"> Select by Category </h2>
                    </div>
                    <a href="#" class="text-blue-500"> See all </a>
                </div>

                <div class="relative" uk-slider="finite: true">

                    <div class="uk-slider-container px-1 py-3">

                        <ul class="uk-slider-items uk-child-width-1-5@m uk-child-width-1-4@s uk-child-width-1-2 uk-grid-small uk-grid">

                            <li>
                                <div class="rounded-xl overflow-hidden relative w-full h-44 cursor-pointer transform hover:scale-105 duration-300 hover:shadow-md">
                                    <div class="absolute w-full h-3/4 -bottom-12 bg-gradient-to-b from-transparent to-gray-800 z-10">
                                    </div>
                                    <img src="assets/images/events/listing-1.jpg" class="absolute w-full h-full object-cover" alt="">
                                    <div class="absolute bottom-0 w-full p-3 text-white z-20 font-semibold">
                                        <div class="text-sm"> </div>
                                        <div class="text-xl"> Dance </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="rounded-xl overflow-hidden relative w-full h-44 cursor-pointer transform hover:scale-105 duration-300 hover:shadow-md">
                                    <div class="absolute w-full h-3/4 -bottom-12 bg-gradient-to-b from-transparent to-gray-800 z-10">
                                    </div>
                                    <img src="assets/images/events/listing-2.jpg" class="absolute w-full h-full object-cover" alt="">
                                    <div class="absolute bottom-0 w-full p-3 text-white z-20 font-semibold">
                                        <div class="text-sm"></div>
                                        <div class="text-xl"> Acting </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="rounded-xl overflow-hidden relative w-full h-44 cursor-pointer transform hover:scale-105 duration-300 hover:shadow-md">
                                    <div class="absolute w-full h-3/4 -bottom-12 bg-gradient-to-b from-transparent to-gray-800 z-10">
                                    </div>
                                    <img src="assets/images/events/listing-3.jpg" class="absolute w-full h-full object-cover" alt="">
                                    <div class="absolute bottom-0 w-full p-3 text-white z-20 font-semibold">
                                        <div class="text-sm"> </div>
                                        <div class="text-lg"> Singing </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="rounded-xl overflow-hidden relative w-full h-44 cursor-pointer transform hover:scale-105 duration-300 hover:shadow-md">
                                    <div class="absolute w-full h-3/4 -bottom-12 bg-gradient-to-b from-transparent to-gray-800 z-10">
                                    </div>
                                    <img src="assets/images/events/listing-4.jpg" class="absolute w-full h-full object-cover" alt="">
                                    <div class="absolute bottom-0 w-full p-3 text-white z-20 font-semibold">
                                        <div class="text-sm"> </div>
                                        <div class="text-lg"> Poetry </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="rounded-xl overflow-hidden relative w-full h-44 cursor-pointer transform hover:scale-105 duration-300 hover:shadow-md">
                                    <div class="absolute w-full h-3/4 -bottom-12 bg-gradient-to-b from-transparent to-gray-800 z-10">
                                    </div>
                                    <img src="assets/images/events/listing-5.jpg" class="absolute w-full h-full object-cover" alt="">
                                    <div class="absolute bottom-0 w-full p-3 text-white z-20 font-semibold">
                                        <div class="text-sm"> </div>
                                        <div class="text-lg"> Project </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="rounded-xl overflow-hidden relative w-full h-44 cursor-pointer transform hover:scale-105 duration-300 hover:shadow-md">
                                    <div class="absolute w-full h-3/4 -bottom-12 bg-gradient-to-b from-transparent to-gray-800 z-10">
                                    </div>
                                    <img src="assets/images/events/listing-1.jpg" class="absolute w-full h-full object-cover" alt="">
                                    <div class="absolute bottom-0 w-full p-3 text-white z-20 font-semibold">
                                        <div class="text-sm"> </div>
                                        <div class="text-lg"> Essay </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <a class="absolute bg-white top-20 -mt-2 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="previous"> <i class="icon-feather-chevron-left"></i></a>
                        <a class="absolute bg-white top-20 -mt-2 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>
                    </div>
                </div>

                <br>

                <div class="my-4 flex items-center justify-between">
                    <div>
                        <h2 class="text-xl font-semibold">Upcomming Events </h2>
                    </div>
                    <a href="#" class="text-blue-500"> See all </a>
                </div>

                <div class="relative" uk-slider="finite: true">

                    <div class="uk-slider-container px-1 py-3">
                        <ul class="uk-slider-items uk-child-width-1-4@m uk-child-width-1-3@s uk-grid-small uk-grid">
                            <li>
                                <div class="card">
                                    <div class="card-media h-32">
                                        <div class="card-media-overly"></div>
                                        <img src="assets/images/events/img-2.jpg" alt="" class="">
                                    </div>
                                    <div class="uk-position-large uk-position-center-right uk-overlay uk-overlay-default">
                                        <img class="w-14 h-14 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4
                                        " src="assets/images/avatars/avatar-2.jpg" alt="">
                                    </div>
                                    <div class="card-body">


                                        <div class="text-xs uppercase text-red-500 font-semibold"> Happening now </div>
                                        <a href="timeline-event.html" class="box-title mb-1"> The global creative </a>
                                        <div class="text-sm font-medium mt-1">Ankara</div>

                                        <div class="flex items-center space-x-2 text-sm text-gray-500 capitalize">
                                            <div> 15 intersted</div>
                                            <div>·</div>
                                            <div> 2 going </div>
                                        </div>

                                        <div class="flex mt-2 space-x-2 text-sm">
                                            <a href="#" class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-1.5">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg> intersted
                                            </a>
                                            <a href="#" class="bg-gray-200 flex h-8 items-center px-3 rounded-md">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card">
                                    <div class="card-media h-32">
                                        <div class="card-media-overly"></div>
                                        <img src="assets/images/events/img-4.jpg" alt="" class="">
                                    </div>
                                    <div class="uk-position-large uk-position-center-right uk-overlay uk-overlay-default">
                                        <img class="w-14 h-14 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4
                                        " src="assets/images/avatars/avatar-2.jpg" alt="">
                                    </div>
                                    <div class="card-body">
                                        <div class="text-xs uppercase text-blue-500 font-semibold">Uk brands</div>
                                        <a href="timeline-event.html" class="box-title  mb-1"> Safety and Flight </a>
                                        <div class="text-sm font-medium mt-1">London</div>

                                        <div class="flex items-center space-x-2 text-sm text-gray-500 capitalize">
                                            <div> 15 intersted</div>
                                            <div>·</div>
                                            <div> 2 going </div>
                                        </div>

                                        <div class="flex mt-2 space-x-2 text-sm">
                                            <a href="#" class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-1.5">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                intersted
                                            </a>
                                            <a href="#" class="bg-gray-200 flex h-8 items-center px-3 rounded-md">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card">
                                    <div class="card-media h-32">
                                        <div class="card-media-overly"></div>
                                        <img src="assets/images/events/img-2.jpg" alt="" class="">
                                    </div>
                                    <div class="card-body">
                                        <div class="uk-position-large uk-position-center-right uk-overlay uk-overlay-default">
                                            <img class="w-14 h-14 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4
                                            " src="assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="text-xs uppercase text-green-500 font-semibold">Conference </div>
                                        <a href="timeline-event.html" class="box-title mb-1"> Accept Who I Am</a>
                                        <div class="text-sm font-medium mt-1">Dubai</div>

                                        <div class="flex items-center space-x-2 text-sm text-gray-500 capitalize">
                                            <div> 15 intersted</div>
                                            <div>·</div>
                                            <div> 2 going </div>
                                        </div>

                                        <div class="flex mt-2 space-x-2 text-sm">
                                            <a href="#" class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-1.5">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                intersted
                                            </a>
                                            <a href="#" class="bg-gray-200 flex h-8 items-center px-3 rounded-md">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card">
                                    <div class="card-media h-32">
                                        <div class="card-media-overly"></div>
                                        <img src="assets/images/events/img-4.jpg" alt="" class="">
                                    </div>
                                    <div class="uk-position-large uk-position-center-right uk-overlay uk-overlay-default">
                                        <img class="w-14 h-14 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4
                                        " src="assets/images/avatars/avatar-2.jpg" alt="">
                                    </div>
                                    <div class="card-body">
                                        <div class="text-xs uppercase text-yellow-500 font-semibold">Upcomming </div>
                                        <a href="timeline-event.html" class="box-title mb-1"> Perspective is everything
                                        </a>
                                        <div class="text-sm font-medium mt-1">Dubai</div>

                                        <div class="flex items-center space-x-2 text-sm text-gray-500 capitalize">
                                            <div> 15 intersted</div>
                                            <div>·</div>
                                            <div> 2 going </div>
                                        </div>

                                        <div class="flex mt-2 space-x-2 text-sm">
                                            <a href="#" class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-1.5">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                intersted
                                            </a>
                                            <a href="#" class="bg-gray-200 flex h-8 items-center px-3 rounded-md">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card">
                                    <div class="card-media h-32">
                                        <div class="card-media-overly"></div>
                                        <img src="assets/images/events/img-2.jpg" alt="" class="">
                                        <div class="absolute bg-red-100 font-semibold px-2.5 py-1 rounded-full text-red-500 text-xs top-2.5 left-2.5">
                                            Happening
                                            now </div>
                                    </div>
                                    <div class="uk-position-large uk-position-center-right uk-overlay uk-overlay-default">
                                        <img class="w-14 h-14 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4
                                        " src="assets/images/avatars/avatar-2.jpg" alt="">
                                    </div>
                                    <div class="card-body">
                                        <div class="text-xs uppercase text-red-500 font-semibold"> Happening now </div>
                                        <a href="timeline-event.html" class="box-title mb-1"> The global creative </a>
                                        <div class="text-sm font-medium mt-1">Ankara</div>

                                        <div class="flex items-center space-x-2 text-sm text-gray-500 capitalize">
                                            <div> 15 intersted</div>
                                            <div>·</div>
                                            <div> 2 going </div>
                                        </div>

                                        <div class="flex mt-2 space-x-2 text-sm">
                                            <a href="#" class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-1.5">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg> intersted
                                            </a>
                                            <a href="#" class="bg-gray-200 flex h-8 items-center px-3 rounded-md">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </li>
                        </ul>

                        <a class="absolute bg-white top-16 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="previous"> <i class="icon-feather-chevron-left"></i></a>
                        <a class="absolute bg-white top-16 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>

                    </div>
                </div>



                <div class="my-6 flex items-center justify-between">
                    <div>
                        <h2 class="text-xl font-semibold">Live Voting
                        </h2>
                    </div>
                    <a href="#" class="text-blue-500"> See all </a>
                </div>

                <div class="relative -mt-3" uk-slider="finite: true">

                    <div class="uk-slider-container px-1 py-3">
                        <ul class="uk-slider-items uk-child-width-1-3@m uk-child-width-1-2@s uk-grid-small uk-grid">

                            <li>
                                <div class="card p-2 flex space-x-4 border border-gray-100">
                                    <div class="w-20 h-24 overflow-hidden rounded-lg">
                                        <div class="card-media h-24">
                                            <img src="assets/images/product/13.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="flex-1 pt-2.5 relative">

                                        <div class="text-xs font-semibold uppercase text-yellow-500">Parfumdds </div>
                                        <div class="text-lg mt-3 2.5 text-gray-700">Parfum Spray</div>
                                        <div class="flex items-center space-x-2 text-sm text-gray-400 capitalize">
                                            <div> 15 likes</div>
                                            <div>·</div>
                                            <div> 286 views </div>
                                        </div>
                                        <div class="top-1.5 absolute bg-gray-100 font-semibold px-2.5 py-1 right-1 rounded-full text text-blude-500 text-sm">
                                            $12.99
                                        </div>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card p-2 flex space-x-4 border border-gray-100">
                                    <div class="w-20 h-24 overflow-hidden rounded-lg">
                                        <div class="card-media h-24">
                                            <img src="assets/images/product/15.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="flex-1 pt-2.5 relative">

                                        <div class="text-xs font-semibold uppercase text-yellow-500">Herbel</div>
                                        <div class="text-lg mt-3 2.5 text-gray-700">Herbal Shampoo</div>
                                        <div class="flex items-center space-x-2 text-sm text-gray-400 capitalize">
                                            <div> 15 likes</div>
                                            <div>·</div>
                                            <div> 286 views </div>
                                        </div>

                                        <div class="top-1.5 absolute bg-gray-100 font-semibold px-2.5 py-1 right-1 rounded-full text text-blude-500 text-sm">
                                            $12.99
                                        </div>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card p-2 flex space-x-4 border border-gray-100">
                                    <div class="w-20 h-24 overflow-hidden rounded-lg">
                                        <div class="card-media h-24">
                                            <img src="assets/images/product/14.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="flex-1 pt-2.5 relative">

                                        <div class="text-xs font-semibold uppercase text-yellow-500">Parfum </div>
                                        <div class="text-lg mt-3 2.5 text-gray-700">Wood Chair</div>
                                        <div class="flex items-center space-x-2 text-sm text-gray-400 capitalize">
                                            <div> 15 likes</div>
                                            <div>·</div>
                                            <div> 286 views </div>
                                        </div>
                                        <div class="top-1.5 absolute bg-gray-100 font-semibold px-2.5 py-1 right-1 rounded-full text text-blude-500 text-sm">
                                            $12.99
                                        </div>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card p-2 flex space-x-4 border border-gray-100">
                                    <div class="w-20 h-24 overflow-hidden rounded-lg">
                                        <div class="card-media h-24">
                                            <img src="assets/images/product/2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="flex-1 pt-2.5 relative">

                                        <div class="text-xs font-semibold uppercase text-yellow-500"> ACCESSORIES </div>
                                        <div class="text-lg mt-3 2.5 text-gray-700"> Wireless headphones </div>
                                        <div class="flex items-center space-x-2 text-sm text-gray-400 capitalize">
                                            <div> 15 likes</div>
                                            <div>·</div>
                                            <div> 286 views </div>
                                        </div>
                                        <div class="top-1.5 absolute bg-gray-100 font-semibold px-2.5 py-1 right-1 rounded-full text text-blude-500 text-sm">
                                            $12.99
                                        </div>

                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>

                    <a class="absolute bg-white top-11 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="previous"> <i class="icon-feather-chevron-left"></i></a>
                    <a class="absolute bg-white top-11 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>

                </div>

                <br>

                <div class="my-4 flex items-center justify-between border-b pb-3">
                    <div>
                        <h2 class="text-xl font-semibold"> Select by Club/Society
                        </h2>
                    </div>
                    <a href="#" class="text-blue-500"> See all </a>
                </div>

                <div class="relative" uk-slider="finite: true">

                    <div class="uk-slider-container px-1 py-3">
                        <ul class="uk-slider-items uk-child-width-1-5@m uk-child-width-1-3@s uk-child-width-1-2 uk-grid-small uk-grid">
                            <li>
                                <a href="product-single.html">
                                    <div class="card">
                                        <div class="card-media h-40">
                                            <div class="card-media-overly"></div>
                                            <img src="assets/images/product/12.jpg" alt="">
                                            <span class="absolute bg-white px-2 py-1 text-sm rounded-md m-2">
                                                Label</span>
                                            <button class="bg-red-100 absolute right-2 top-2 p-0.5 px-1.5 rounded-full text-red-500">
                                                <i class="icon-feather-heart"> </i>
                                            </button>
                                        </div>
                                        <div class="card-body">
                                            <div class="-top-3 absolute bg-blue-100 font-medium px-2 py-1 right-2 rounded-full text text-blue-500 text-sm">
                                                $22.99
                                            </div>
                                            <div class="text-xs font-semibold uppercase text-yellow-500">Shoes</div>
                                            <div class="ext-lg font-medium mt-1 t truncate"> Hermes Rivera </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="product-single.html">
                                    <div class="card">
                                        <div class="card-media h-40">
                                            <div class="card-media-overly"></div>
                                            <img src="assets/images/product/15.jpg" alt="">
                                            <button class="bg-red-100 absolute right-2 top-2 p-0.5 px-1.5 rounded-full text-red-500">
                                                <i class="icon-feather-heart"> </i>
                                            </button>
                                        </div>
                                        <div class="card-body">
                                            <div class="-top-3 absolute bg-blue-100 font-medium px-2 py-1 right-2 rounded-full text text-blue-500 text-sm">
                                                $12.99
                                            </div>
                                            <div class="text-xs font-semibold uppercase text-yellow-500">Herbel</div>
                                            <div class="ext-lg font-medium mt-1 t truncate"> Herbal Shampoo </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="product-single.html">
                                    <div class="card">
                                        <div class="card-media h-40">
                                            <div class="card-media-overly"></div>
                                            <img src="assets/images/product/4.jpg" alt="">
                                            <button class="bg-red-100 absolute right-2 top-2 p-0.5 px-1.5 rounded-full text-red-500">
                                                <i class="icon-feather-heart"> </i>
                                            </button>
                                        </div>
                                        <div class="card-body">
                                            <div class="-top-3 absolute bg-blue-100 font-medium px-2 py-1 right-2 rounded-full text text-blue-500 text-sm">
                                                $122.99
                                            </div>
                                            <div class="text-xs font-semibold uppercase text-yellow-500">Mobiles</div>
                                            <div class="ext-lg font-medium mt-1 t truncate"> iPhone 7 unboxing </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="product-single.html">
                                    <div class="card">
                                        <div class="card-media h-40">
                                            <div class="card-media-overly"></div>
                                            <img src="assets/images/product/14.jpg" alt="">
                                            <button class="bg-red-100 absolute right-2 top-2 p-0.5 px-1.5 rounded-full text-red-500">
                                                <i class="icon-feather-heart"> </i>
                                            </button>
                                        </div>
                                        <div class="card-body">
                                            <div class="-top-3 absolute bg-blue-100 font-medium px-2 py-1 right-2 rounded-full text text-blue-500 text-sm">
                                                $32.99
                                            </div>
                                            <div class="text-xs font-semibold uppercase text-yellow-500">Furniture</div>
                                            <div class="ext-lg font-medium mt-1 t truncate"> Wood Chair </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="product-single.html">
                                    <div class="card">
                                        <div class="card-media h-40">
                                            <div class="card-media-overly"></div>
                                            <img src="assets/images/product/9.jpg" alt="">
                                            <button class="bg-red-100 absolute right-2 top-2 p-0.5 px-1.5 rounded-full text-red-500">
                                                <i class="icon-feather-heart"> </i>
                                            </button>
                                        </div>
                                        <div class="card-body">
                                            <div class="-top-3 absolute bg-blue-100 font-medium px-2 py-1 right-2 rounded-full text text-blue-500 text-sm">
                                                $32.99
                                            </div>
                                            <div class="text-xs font-semibold uppercase text-yellow-500">Fruit</div>
                                            <div class="ext-lg font-medium mt-1 t truncate"> Strawberries FreshRipe
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="product-single.html">
                                    <div class="card">
                                        <div class="card-media h-40">
                                            <div class="card-media-overly"></div>
                                            <img src="assets/images/product/2.jpg" alt="">
                                            <button class="bg-red-100 absolute right-2 top-2 p-0.5 px-1.5 rounded-full text-red-500">
                                                <i class="icon-feather-heart"> </i>
                                            </button>
                                        </div>
                                        <div class="card-body">
                                            <div class="-top-3 absolute bg-blue-100 font-medium px-2 py-1 right-2 rounded-full text text-blue-500 text-sm">
                                                $32.99
                                            </div>
                                            <div class="text-xs font-semibold uppercase text-yellow-500">Accessories
                                            </div>
                                            <div class="ext-lg font-medium mt-1 t truncate">Wireless headphones</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>

                        <a class="absolute bg-white bottom-1/2 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="previous"> <i class="icon-feather-chevron-left"></i></a>
                        <a class="absolute bg-white bottom-1/2 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>

                    </div>
                </div>

            </div>
        </div>

        <!-- Main Contents Ends Here  -->

    </div>

    <!-- Wrapper Ends Here  -->



    <!-- Filter  -->

    <div id="filter-modal" class="create-post" uk-modal>

        <div class="uk-modal-dialog uk-margin-auto-vertical rounded-lg p-0 lg:w-5/12 relative shadow-2xl uk-animation-slide-bottom-small">


            <div class="text-center py-4 border-b">
                <h2 class="uk-modal-title">Headline</h2>
                <button class="uk-modal-close-default bg-gray-100 rounded-full p-2.5 m-1 right-2" type="button" uk-close uk-tooltip="title: Close ; pos: bottom ;offset:7"></button>
            </div>

            <div class="uk-modal-body" uk-overflow-auto>

                <form action="">
                    <p class="" style="font-weight: bold; color: rgb(147, 160, 172);">Event Start (date and time):</p>
                    <div style="border: 2px solid rgb(147, 160, 172); border-radius: 10px;">
                        <input type="date">
                    </div>
                </form>


                <form action="">
                    <p class="" style="font-weight: bold; color: rgb(147, 160, 172);">Event End (date and time):</p>
                    <div style="border: 2px solid rgb(147, 160, 172); border-radius: 10px;">
                        <input type="date">
                    </div>
                </form>


                <div class="uk-margin">
                    <p class="" style="font-weight: bold; color: rgb(147, 160, 172);">Select Event type</p>
                    <div class="uk-form-controls" style="border: 2px solid rgb(147, 160, 172); border-radius: 10px;">
                        <select class="uk-select" id="form-stacked-select">
                            <option>Live</option>
                            <option>Upcoming</option>
                        </select>
                    </div>
                </div>



                <div class="uk-margin">
                    <p class="" style="font-weight: bold; color: rgb(147, 160, 172);">Select category</p>
                    <div class="uk-form-controls" style="border: 2px solid rgb(147, 160, 172); border-radius: 10px;">
                        <select class="uk-select" id="form-stacked-select">
                            <option>Dance</option>
                            <option>Singing</option>
                        </select>
                    </div>
                </div>
                <div class="uk-margin">
                    <p class="" style="font-weight: bold; color: rgb(147, 160, 172);">Select College</p>
                    <div class="uk-form-controls" style="border: 2px solid rgb(147, 160, 172); border-radius: 10px;">
                        <select class="uk-select" id="form-stacked-select">
                            <option>DDU</option>
                            <option>Ramjas</option>
                        </select>
                    </div>
                </div>
                <div class="uk-margin">
                    <p class="" style="font-weight: bold; color: rgb(147, 160, 172);">Select Club/society</p>
                    <div class="uk-form-controls" style="border: 2px solid rgb(147, 160, 172); border-radius: 10px;">
                        <select class="uk-select" id="form-stacked-select">
                            <option>DDU01</option>
                            <option>Ramjas01</option>
                        </select>
                    </div>
                </div>
                <div class="uk-margin">
                    <p class="" style="font-weight: bold; color: rgb(147, 160, 172);">free/paid</p>
                    <div class="uk-form-controls" style="border: 2px solid rgb(147, 160, 172); border-radius: 10px;">
                        <select class="uk-select" id="form-stacked-select">
                            <option>free</option>
                            <option>paid</option>
                        </select>
                    </div>
                </div>
                <div class="uk-margin">
                    <p class="" style="font-weight: bold; color: rgb(147, 160, 172);">Select language</p>
                    <div class="uk-form-controls" style="border: 2px solid rgb(147, 160, 172); border-radius: 10px;">
                        <select class="uk-select" id="form-stacked-select">
                            <option>english</option>
                            <option>hindi</option>
                        </select>
                    </div>
                </div>
                <div class="uk-margin">
                    <p class="" style="font-weight: bold; color: rgb(147, 160, 172);">Select gander</p>
                    <div class="uk-form-controls" style="border: 2px solid rgb(147, 160, 172); border-radius: 10px;">
                        <select class="uk-select" id="form-stacked-select">
                            <option>male</option>
                            <option>female</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="flex items-center w-full justify-between p-3 border-t">

                <div class="flex space-x-2">
                    <a href="#" class="bg-red-100 flex font-medium h-9 items-center justify-center px-5 rounded-md text-red-600 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                        </svg>&nbsp;&nbsp;
                        cancel </a>
                    <a href="#" class="bg-blue-600 flex h-9 items-center justify-center rounded-md text-white px-5 font-medium">
                        Apply </a>
                </div>

                <a href="#" hidden class="bg-blue-600 flex h-9 items-center justify-center rounded-lg text-white px-12 font-semibold">
                    Share </a>
            </div>

        </div>


    </div>

    <!-- Filter  -->


    <!-- ChatBox -->

    <?php include 'fixed/chatbox.php'; ?>

    <!-- ChatBox -->


    <!-- JavaScript -->

    <?php include 'fixed/script-links.php'; ?>

    <!-- JavaScript -->

</body>

</html>