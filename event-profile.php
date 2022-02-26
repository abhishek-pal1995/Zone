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

    <title>Zone | Event Profile</title>
    <meta name="description" content="Socialite is - Professional A unique and beautiful collection of UI elements">

    <!-- Title and Description -->

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

                <!--  Event Cover -->

                <div class="profile">

                    <div class="profiles_banner">
                        <img src="assets/images/group/group-cover-2.jpg" alt="">
                    </div>
                    <div class="profiles_content">
                        <div class="profile_info">
                            <h1> Webinar - Raising ducks for egg production </h1>
                            <div class="flex space-x-2 items-center md:pt-3 text-base -mt-2 md:justify-start justify-center">
                                <div> Free</div>
                                <div class="md:block hidden">·</div>
                                <div> Online event</div>
                            </div>
                        </div>
                        <div class="items-center space-x-2 text-center grid grid-cols-4" uk-countdown="date: 2022-06-07T08:32:06+00:00">
                            <div class="bg-gray-100 rounded-md p-2 border shadow-inner">
                                <div class="uk-countdown-days text-lg font-bold"></div>
                                <div class="text-xs">DAYS </div>
                            </div>
                            <div class="bg-gray-100 rounded-md p-2 border shadow-inner">
                                <div class="uk-countdown-hours text-lg font-bold"></div>
                                <div class="text-xs">HOURS </div>
                            </div>
                            <div class="bg-gray-100 rounded-md p-2 border shadow-inner">
                                <div class="uk-countdown-minutes text-lg font-bold"></div>
                                <div class="text-xs">MIN </div>
                            </div>
                            <div class="bg-gray-100 rounded-md p-2 border shadow-inner">
                                <div class=" uk-countdown-seconds text-lg font-bold"></div>
                                <div class="text-xs">SEC </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4 lg:absolute bottom-0 right-0 p-3 z-10 justify-center">
                        <a href="#" class="flex items-center justify-center h-9 px-5 rounded-md bg-gray-200 space-x-1.5">
                            <ion-icon name="thumbs-up"></ion-icon>
                            <span> Interested </span>
                        </a>
                        <a href="#" class="flex items-center justify-center h-9 px-5 rounded-md bg-blue-600 text-white font-semibold space-x-1.5">
                            <span> Go Now </span>
                        </a>
                    </div>
                    <nav class="responsive-nav border-t -mb-0.5 lg:pl-2">
                        <ul uk-switcher="connect: #nav-top-tab; animation: uk-animation-fade">
                            <li><a href="#" class="lg:px-2">About</a></li>
                            <li><a href="#" class="lg:px-2">Discussion</a></li>
                        </ul>
                    </nav>

                </div>

                <div class="uk-switcher lg:mt-8 mt-4" id="nav-top-tab">
                    <div class="md:flex  md:space-x-8 lg:mx-14">
                        <div class="space-y-5 flex-shrink-0 md:w-7/12">


                            <div class="card p-5">
                                <h1 class="block text-lg font-bold"> Details </h1>
                                <div class="space-y-4 mt-3">

                                    <div class="flex items-center space-x-3">
                                        <ion-icon name="alert-circle" class="bg-gray-100 p-1.5 rounded-full text-xl"></ion-icon>
                                        <div class="flex-1">
                                            <div> We Plan ,We Desing, We Estimate for Approval to Build.. </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <ion-icon name="people" class="bg-gray-100 p-1.5 rounded-full text-xl"></ion-icon>
                                        <div class="flex-1">
                                            <div class="font-semibold"> 3.3K people responded </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <ion-icon name="globe" class="bg-gray-100 p-1.5 rounded-full text-xl"></ion-icon>
                                        <div class="flex-1">
                                            <div> Online: <a href="#" class="text-blue-500"> https://mydomain.com </a> </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <ion-icon name="globe" class="bg-gray-100 p-1.5 rounded-full text-xl"></ion-icon>
                                        <div class="flex-1">
                                            <div> Tuesday, 2 February 2021 at 13:00 MST </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <ion-icon name="mail-open" class="bg-gray-100 p-1.5 rounded-full text-xl"></ion-icon>
                                        <div class="flex-1">
                                            <div> Public · Anyone on or off Socialite </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <ion-icon name="albums" class="bg-gray-100 p-1.5 rounded-full text-xl"></ion-icon>
                                        <div class="flex-1">
                                            <div> <a href="#" class="text-blue-500">Product/service</a> </div>
                                        </div>
                                    </div>

                                    <div class="line-clamp-3" id="more-text">
                                        Just as there are breeds of chickens for egg and breeds of chickens for meat, there are ducks breeds specifically for egg production. While duck eggs are more popular in Asia, for those with allergies to chicken eggs, duck eggs are a good alternative. Ron Kean from the University of Wisconsin in Madison will be discussing how to raise ducks for egg production. Just as there are breeds of chickens for egg and breeds of chickens for meat, there are ducks breeds specifically for egg production. While duck eggs are more popular in Asia, for those with allergies to chicken eggs, duck eggs are a good alternative. Ron Kean from the University of Wisconsin in Madison will be discussing how to raise ducks for egg production.
                                    </div>
                                    <a href="#" id="more-text" uk-toggle="target: #more-text ; cls: line-clamp-3"> See more </a>

                                </div>

                            </div>

                            <div class="flex justify-center mt-6">
                                <a href="#" class="bg-white dark:bg-gray-900 font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white">
                                    Load more ..</a>
                            </div>


                        </div>

                        <!-- Sidebar -->
                        <div class="w-full flex-shirink-0">

                            <div class="card p-4">
                                <div class="">
                                    <div class="py-2 flex items-center space-x-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-yellow-500 w-9">
                                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                        </svg>
                                        <div>
                                            <div class="text-lg font-semibold"> Start Date</div>
                                            <div> 02-02-21 - 11:31</div>
                                        </div>
                                    </div>
                                    <div class="py-2 flex items-center space-x-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-red-500 w-9">
                                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                        </svg>
                                        <div>
                                            <div class="text-lg font-semibold"> End Date</div>
                                            <div> 03-02-21 - 11:31</div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="-mx-4 my-4">

                                <!--  widget  -->
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <div>
                                            <h4 class="text-xl -mb-0.5 font-semibold"> Go with friends </h4>
                                        </div>
                                        <a href="#" class="text-blue-600 ">See all</a>
                                    </div>
                                    <div>
                                        <div class="flex items-center space-x-4 hover:bg-gray-100 rounded-md -mx-2 p-2">
                                            <div class="w-10 h-10 flex-shrink-0 rounded-md relative">
                                                <img src="assets/images/avatars/avatar-3.jpg" class="absolute w-full h-full inset-0 rounded-full" alt="">
                                            </div>
                                            <div class="flex-1">
                                                <h3 class="text-base font-semibold capitalize"> Monroe Parker </h3>
                                            </div>
                                            <a href="#" class="flex items-center justify-center h-9 px-4 rounded-md border font-semibold"> Invite </a>
                                        </div>
                                        <div class="flex items-center space-x-4 hover:bg-gray-100 rounded-md -mx-2 p-2">
                                            <div class="w-10 h-10 flex-shrink-0 rounded-md relative">
                                                <img src="assets/images/avatars/avatar-4.jpg" class="absolute w-full h-full inset-0 rounded-full" alt="">
                                            </div>
                                            <div class="flex-1">
                                                <h3 class="text-base font-semibold capitalize"> Stella Johnson </h3>
                                            </div>
                                            <a href="#" class="flex items-center justify-center h-9 px-4 rounded-md border font-semibold"> Invite </a>
                                        </div>
                                        <div class="flex items-center space-x-4 hover:bg-gray-100 rounded-md -mx-2 p-2">
                                            <div class="w-10 h-10 flex-shrink-0 rounded-md relative">
                                                <img src="assets/images/avatars/avatar-5.jpg" class="absolute w-full h-full inset-0 rounded-full" alt="">
                                            </div>
                                            <div class="flex-1">
                                                <h3 class="text-base font-semibold capitalize"> Alex Dolgove </h3>
                                            </div>
                                            <a href="#" class="flex items-center justify-center h-9 px-4 rounded-md border font-semibold"> Invite </a>
                                        </div>
                                        <div class="flex items-center space-x-4 hover:bg-gray-100 rounded-md -mx-2 p-2">
                                            <div class="w-10 h-10 flex-shrink-0 rounded-md relative">
                                                <img src="assets/images/avatars/avatar-1.jpg" class="absolute w-full h-full inset-0 rounded-full" alt="">
                                            </div>
                                            <div class="flex-1">
                                                <h3 class="text-base font-semibold capitalize"> Adrian Mohani </h3>
                                            </div>
                                            <a href="#" class="flex items-center justify-center h-9 px-4 rounded-md border font-semibold"> Invite </a>
                                        </div>
                                    </div>
                                </div>

                                <hr class="-mx-4 my-4">

                                <!--  widget  -->
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <div>
                                            <h4 class="text-xl -mb-0.5 font-semibold"> Related Pages </h4>
                                        </div>
                                        <a href="#" class="text-blue-600 ">See all</a>
                                    </div>
                                    <div>
                                        <div class="flex items-center  hover:bg-gray-100 rounded-md -mx-2 p-2 pr-0">
                                            <div class="flex-shrink-0 h-16 mr-3 relative rounded-md w-16">
                                                <img src="assets/images/events/img-4.jpg" class="absolute w-full h-full inset-0 rounded-md object-cover" alt="">
                                            </div>
                                            <div class="flex-1">
                                                <a href="#" class="capitalize font-semibold line-clamp-1 mb-1 text-base">The global creative</a>
                                                <div class="text-xs uppercase text-blue-500 font-semibold">Uk brands</div>
                                            </div>
                                            <a href="#" class="bg-gray-100 flex flex-col font-semibold items-center justify-center py-1.5 px-4 rounded-md"> 12
                                                <div class="text-sm"> Going </div>
                                            </a>
                                        </div>
                                        <div class="flex items-center  hover:bg-gray-100 rounded-md -mx-2 p-2 pr-0">
                                            <div class="flex-shrink-0 h-16 mr-3 relative rounded-md w-16">
                                                <img src="assets/images/events/img-2.jpg" class="absolute w-full h-full inset-0 rounded-md object-cover" alt="">
                                            </div>
                                            <div class="flex-1">
                                                <a href="#" class="capitalize font-semibold mb-1 text-base">Safety and Flight</a>
                                                <div class="text-xs uppercase text-green-500 font-semibold">CONFERENCE</div>
                                            </div>
                                            <a href="#" class="bg-gray-100 flex flex-col font-semibold items-center justify-center py-1.5 px-4 rounded-md"> 45
                                                <div class="text-sm"> Going </div>
                                            </a>
                                        </div>
                                        <div class="flex items-center  hover:bg-gray-100 rounded-md -mx-2 p-2 pr-0">
                                            <div class="flex-shrink-0 h-16 mr-3 relative rounded-md w-16">
                                                <img src="assets/images/events/img-3.jpg" class="absolute w-full h-full inset-0 rounded-md object-cover" alt="">
                                            </div>
                                            <div class="flex-1">
                                                <a href="#" href="#" 3 class="capitalize font-semibold line-clamp-1 mb-1 text-base"> Perspective is everything </a>
                                                <div class="text-xs uppercase text-red-500 font-semibold">HAPPENING NOW</div>
                                            </div>
                                            <a href="#" class="bg-gray-100 flex flex-col font-semibold items-center justify-center py-1.5 px-4 rounded-md"> 34
                                                <div class="text-sm"> Going </div>
                                            </a>
                                        </div>
                                        <div class="flex items-center  hover:bg-gray-100 rounded-md -mx-2 p-2 pr-0">
                                            <div class="flex-shrink-0 h-16 mr-3 relative rounded-md w-16">
                                                <img src="assets/images/events/listing-5.jpg" class="absolute w-full h-full inset-0 rounded-md object-cover" alt="">
                                            </div>
                                            <div class="flex-1">
                                                <a href="#" class="capitalize font-semibold line-clamp-1 mb-1 text-base">Safety and Flight</a>
                                                <div class="text-xs uppercase text-yellow-500 font-semibold">UPCOMMING</div>
                                            </div>
                                            <a href="#" class="bg-gray-100 flex flex-col font-semibold items-center justify-center py-1.5 px-4 rounded-md"> 12
                                                <div class="text-sm"> Going </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="md:flex  md:space-x-8 lg:mx-14">
                        <div class="space-y-5 flex-shrink-0 md:w-7/12">

                            <div class="card lg:mx-0 p-4" uk-toggle="target: #create-post-modal">
                                <div class="flex space-x-3">
                                    <img src="assets/images/avatars/avatar-2.jpg" class="w-10 h-10 rounded-full">
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
                                        <svg class="bg-red-100 h-9 mr-2 p-1.5 rounded-full text-red-600 w-9 -my-0.5 hidden lg:block" uk-tooltip="title: Messages ; pos: bottom ;offset:7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" title="" aria-expanded="false">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
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
                                            <img src="assets/images/avatars/avatar-2.jpg" class="bg-gray-200 border border-white rounded-full w-10 h-10">
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


                                <div class="p-5 pt-0 border-b dark:border-gray-700">

                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim laoreet dolore magna aliquam erat volutpat

                                </div>


                                <div class="p-4 space-y-3">

                                    <div class="flex space-x-4 lg:font-bold">
                                        <a href="#" class="flex items-center space-x-2">
                                            <div class="p-2 rounded-full  text-black lg:bg-gray-100 dark:bg-gray-600 ">
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
                                            <img src="assets/images/avatars/avatar-1.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900">
                                            <img src="assets/images/avatars/avatar-4.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                                            <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                                        </div>
                                        <div class="dark:text-gray-100">
                                            Liked <strong> Johnson</strong> and <strong> 209 Others </strong>
                                        </div>
                                    </div>

                                    <div class="border-t py-4 space-y-4 dark:border-gray-600">
                                        <div class="flex">
                                            <div class="w-10 h-10 rounded-full relative flex-shrink-0">
                                                <img src="assets/images/avatars/avatar-1.jpg" alt="" class="absolute h-full rounded-full w-full">
                                            </div>
                                            <div>
                                                <div class="text-gray-700 py-2 px-3 rounded-md bg-gray-100 relative lg:ml-5 ml-2 lg:mr-12 dark:bg-gray-800 dark:text-gray-100">
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
                                                <img src="assets/images/avatars/avatar-1.jpg" alt="" class="absolute h-full rounded-full w-full">
                                            </div>
                                            <div>
                                                <div class="text-gray-700 py-2 px-3 rounded-md bg-gray-100 relative lg:ml-5 ml-2 lg:mr-12 dark:bg-gray-800 dark:text-gray-100">
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
                                <a href="#" class="bg-white dark:bg-gray-900 font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white">
                                    Load more ..</a>
                            </div>


                        </div>

                        <!-- Sidebar -->
                        <div class="w-full flex-shirink-0">

                            <div class="card p-4">
                                <div class="">
                                    <div class="py-2 flex items-center space-x-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-yellow-500 w-9">
                                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                        </svg>
                                        <div>
                                            <div class="text-lg font-semibold"> Start Date</div>
                                            <div> 02-02-21 - 11:31</div>
                                        </div>
                                    </div>
                                    <div class="py-2 flex items-center space-x-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-red-500 w-9">
                                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                        </svg>
                                        <div>
                                            <div class="text-lg font-semibold"> End Date</div>
                                            <div> 03-02-21 - 11:31</div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="-mx-4 my-4">

                                <!--  widget  -->
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <div>
                                            <h4 class="text-xl -mb-0.5 font-semibold"> Go with friends </h4>
                                        </div>
                                        <a href="#" class="text-blue-600 ">See all</a>
                                    </div>
                                    <div>
                                        <div class="flex items-center space-x-4 hover:bg-gray-100 rounded-md -mx-2 p-2">
                                            <div class="w-10 h-10 flex-shrink-0 rounded-md relative">
                                                <img src="assets/images/avatars/avatar-3.jpg" class="absolute w-full h-full inset-0 rounded-full" alt="">
                                            </div>
                                            <div class="flex-1">
                                                <h3 class="text-base font-semibold capitalize"> Monroe Parker </h3>
                                            </div>
                                            <a href="#" class="flex items-center justify-center h-9 px-4 rounded-md border font-semibold"> Invite </a>
                                        </div>
                                        <div class="flex items-center space-x-4 hover:bg-gray-100 rounded-md -mx-2 p-2">
                                            <div class="w-10 h-10 flex-shrink-0 rounded-md relative">
                                                <img src="assets/images/avatars/avatar-4.jpg" class="absolute w-full h-full inset-0 rounded-full" alt="">
                                            </div>
                                            <div class="flex-1">
                                                <h3 class="text-base font-semibold capitalize"> Stella Johnson </h3>
                                            </div>
                                            <a href="#" class="flex items-center justify-center h-9 px-4 rounded-md border font-semibold"> Invite </a>
                                        </div>
                                        <div class="flex items-center space-x-4 hover:bg-gray-100 rounded-md -mx-2 p-2">
                                            <div class="w-10 h-10 flex-shrink-0 rounded-md relative">
                                                <img src="assets/images/avatars/avatar-5.jpg" class="absolute w-full h-full inset-0 rounded-full" alt="">
                                            </div>
                                            <div class="flex-1">
                                                <h3 class="text-base font-semibold capitalize"> Alex Dolgove </h3>
                                            </div>
                                            <a href="#" class="flex items-center justify-center h-9 px-4 rounded-md border font-semibold"> Invite </a>
                                        </div>
                                        <div class="flex items-center space-x-4 hover:bg-gray-100 rounded-md -mx-2 p-2">
                                            <div class="w-10 h-10 flex-shrink-0 rounded-md relative">
                                                <img src="assets/images/avatars/avatar-1.jpg" class="absolute w-full h-full inset-0 rounded-full" alt="">
                                            </div>
                                            <div class="flex-1">
                                                <h3 class="text-base font-semibold capitalize"> Adrian Mohani </h3>
                                            </div>
                                            <a href="#" class="flex items-center justify-center h-9 px-4 rounded-md border font-semibold"> Invite </a>
                                        </div>
                                    </div>
                                </div>

                                <hr class="-mx-4 my-4">

                                <!--  widget  -->
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <div>
                                            <h4 class="text-xl -mb-0.5 font-semibold"> Related Pages </h4>
                                        </div>
                                        <a href="#" class="text-blue-600 ">See all</a>
                                    </div>
                                    <div>
                                        <div class="flex items-center  hover:bg-gray-100 rounded-md -mx-2 p-2 pr-0">
                                            <div class="flex-shrink-0 h-16 mr-3 relative rounded-md w-16">
                                                <img src="assets/images/events/img-4.jpg" class="absolute w-full h-full inset-0 rounded-md object-cover" alt="">
                                            </div>
                                            <div class="flex-1">
                                                <a href="#" class="capitalize font-semibold line-clamp-1 mb-1 text-base">The global creative</a>
                                                <div class="text-xs uppercase text-blue-500 font-semibold">Uk brands</div>
                                            </div>
                                            <a href="#" class="bg-gray-100 flex flex-col font-semibold items-center justify-center py-1.5 px-4 rounded-md"> 12
                                                <div class="text-sm"> Going </div>
                                            </a>
                                        </div>
                                        <div class="flex items-center  hover:bg-gray-100 rounded-md -mx-2 p-2 pr-0">
                                            <div class="flex-shrink-0 h-16 mr-3 relative rounded-md w-16">
                                                <img src="assets/images/events/img-2.jpg" class="absolute w-full h-full inset-0 rounded-md object-cover" alt="">
                                            </div>
                                            <div class="flex-1">
                                                <a href="#" class="capitalize font-semibold mb-1 text-base">Safety and Flight</a>
                                                <div class="text-xs uppercase text-green-500 font-semibold">CONFERENCE</div>
                                            </div>
                                            <a href="#" class="bg-gray-100 flex flex-col font-semibold items-center justify-center py-1.5 px-4 rounded-md"> 45
                                                <div class="text-sm"> Going </div>
                                            </a>
                                        </div>
                                        <div class="flex items-center  hover:bg-gray-100 rounded-md -mx-2 p-2 pr-0">
                                            <div class="flex-shrink-0 h-16 mr-3 relative rounded-md w-16">
                                                <img src="assets/images/events/img-3.jpg" class="absolute w-full h-full inset-0 rounded-md object-cover" alt="">
                                            </div>
                                            <div class="flex-1">
                                                <a href="#" href="#" 3 class="capitalize font-semibold line-clamp-1 mb-1 text-base"> Perspective is everything </a>
                                                <div class="text-xs uppercase text-red-500 font-semibold">HAPPENING NOW</div>
                                            </div>
                                            <a href="#" class="bg-gray-100 flex flex-col font-semibold items-center justify-center py-1.5 px-4 rounded-md"> 34
                                                <div class="text-sm"> Going </div>
                                            </a>
                                        </div>
                                        <div class="flex items-center  hover:bg-gray-100 rounded-md -mx-2 p-2 pr-0">
                                            <div class="flex-shrink-0 h-16 mr-3 relative rounded-md w-16">
                                                <img src="assets/images/events/listing-5.jpg" class="absolute w-full h-full inset-0 rounded-md object-cover" alt="">
                                            </div>
                                            <div class="flex-1">
                                                <a href="#" class="capitalize font-semibold line-clamp-1 mb-1 text-base">Safety and Flight</a>
                                                <div class="text-xs uppercase text-yellow-500 font-semibold">UPCOMMING</div>
                                            </div>
                                            <a href="#" class="bg-gray-100 flex flex-col font-semibold items-center justify-center py-1.5 px-4 rounded-md"> 12
                                                <div class="text-sm"> Going </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>



    <!-- Craete Post Modal -->

    <div id="create-post-modal" class="create-post" uk-modal>
        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical rounded-lg p-0 lg:w-5/12 relative shadow-2xl uk-animation-slide-bottom-small">

            <div class="text-center py-4 border-b">
                <h3 class="text-lg font-semibold"> Create Post </h3>
                <button class="uk-modal-close-default bg-gray-100 rounded-full p-2.5 m-1 right-2" type="button" uk-close uk-tooltip="title: Close ; pos: bottom ;offset:7"></button>
            </div>
            <div class="flex flex-1 items-start space-x-4 p-5">
                <img src="assets/images/avatars/avatar-2.jpg" class="bg-gray-200 border border-white rounded-full w-11 h-11">
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

                        <!-- View More -->
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
                    <option>People I Follow </option>
                    <optionion>People Follow Me</optionion>
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

    <!-- Craete Post Modal -->


    <!-- ChatBox -->

    <?php include 'fixed/chatbox.php'; ?>

    <!-- ChatBox -->


    <!-- JavaScript -->

    <?php include 'fixed/script-links.php'; ?>

    <!-- JavaScript -->

</body>

</html>