<!-- College form Starts Here  -->

<div id="college-form" class="space-y-3">

    <div id="clg-input-alert">

    </div>

    <!-- First Step  -->

    <div class="clg-frm-tab space-y-3" style="display: none;">
        <h3 style="text-align: center;">Basic Details</h3>
        <hr>
        <div>
            <label class="mb-0"> College Name </label>
            <input type="text" id="clg-name" name="clg-name" placeholder="Name of the College" class="req bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required>
        </div>
        <div>
            <label class="mb-0"> Username </label>
            <input type="text" id="clg-uname" name="clg-uname" placeholder="Username" class="req bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required>
        </div>
        <div>
            <label class="mb-0"> Email Address </label>
            <input type="email" id="clg-email" name="clg-email" placeholder="info@example.com" class="req bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required>
        </div>
        <div>
            <label class="mb-0"> Create Password </label>
            <input type="password" id="clg-pass" name="clg-pass" placeholder="Create New Password" class="req bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required>
        </div>
        <div>
            <label class="mb-0"> Confirm Password </label>
            <input type="password" id="clg-cpass" name="clg-cpass" placeholder="Confirm Your Password" class="req bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required>
        </div>
        <div>
            <label class="mb-0"> About </label>
            <textarea id="clg-about" name="clg-about" placeholder="About this College" class="req bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required></textarea>
        </div>
    </div>

    <!-- Second Step  -->

    <div class="clg-frm-tab space-y-3" style="display: none;">

        <!-- Profile Modal -->

        <div id="clg-profile-modal" class="create-post" uk-modal>
            <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical shadow-2xl uk-animation-slide-bottom-small">
                <div class="py-4 border-b flex  justify-between px-6">
                    <h3 class="text-lg font-semibold"> Upload Profile </h3>
                    <div>
                        <button class="uk-modal-close-default hover:bg-gray-100 rounded-full p-2.5 block uk-icon uk-close mt-0.5" type="button" uk-close>
                            <i class="icon-feather-close"></i>
                        </button>
                    </div>
                </div>
                <div class="create-post-modal-body space-x-6 p-5 overflow-x-hidden mr-1" data-simplebar>
                    <div class="space-y-4 g:w-8/12">
                        <div id="clg-upload-profile" class="relative uk-transition-toggle overflow-hidden">
                            <div class="w-full">
                                <div class="bg-gray-100 border-2 border-dashed flex flex-col h-40 items-center justify-center relative w-full rounded-lg dark:bg-gray-800 dark:border-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-12">
                                        <path d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z" />
                                        <path d="M9 13h2v5a1 1 0 11-2 0v-5z" />
                                    </svg>
                                </div>
                            </div>
                            <input hidden id="clg-profile-img" name="clg-profile-img" class="req" type="file">
                            <a href="#" class="bg-gray-200 flex font-medium h-9 items-center justify-center px-5 rounded-b-xl text-blue-600 text-white uk-position-bottom uk-transition-bottom-small">
                                Choose file</a>
                        </div>
                        <div id="clg-pre-text" class="text-lg font-semibold" style="display: none; text-align:center;">
                            <hr> Profile Preview
                            <hr>
                        </div>
                        <div class="clg-preview-image">
                        </div>
                        <div class="clg-file-name" style="text-align: center;">
                            No file Choosen.
                        </div>
                    </div>
                </div>
                <div class="flex items-center w-full justify-between p-3 border-t" id="clg-upload-status" style="display: none;">
                    <div class="flex items-center space-x-2">
                        <ion-icon name="checkmark-circle" class="text-green-600 text-xl"></ion-icon>
                        <div> File selected successfuly.</div>
                    </div>
                    <div class="flex space-x-2">
                        <a href="#" id="clg-cancel-btn" style="display: none;" class="bg-red-100 flex font-medium h-9 items-center justify-center px-5 rounded-md text-red-600 text-sm">
                            Delete </a>
                        <a href="#" class="bg-blue-600 flex h-9 items-center justify-center rounded-md text-white px-5 font-medium uk-modal-close">
                            Confirm </a>
                    </div>
                    <a href="#" hidden class="bg-blue-600 flex h-9 items-center justify-center rounded-lg text-white px-12 font-semibold uk-modal-close">
                        Confirm </a>
                </div>
            </div>
        </div>

        <!-- Profile Modal -->


        <!-- Banner Modal -->

        <div id="clg-banner-modal" class="create-post" uk-modal>
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
                        <div id="clg-upload-banner" class="relative uk-transition-toggle overflow-hidden">
                            <div class="w-full">
                                <div class="bg-gray-100 border-2 border-dashed flex flex-col h-40 items-center justify-center relative w-full rounded-lg dark:bg-gray-800 dark:border-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-12">
                                        <path d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z" />
                                        <path d="M9 13h2v5a1 1 0 11-2 0v-5z" />
                                    </svg>
                                </div>
                            </div>
                            <input hidden id="clg-banner-img" name="clg-banner-img" class="req" type="file">
                            <a href="#" class="bg-gray-200 flex font-medium h-9 items-center justify-center px-5 rounded-b-xl text-blue-600 text-white uk-position-bottom uk-transition-bottom-small">
                                Choose file</a>
                        </div>
                        <div id="clg-banner-pre-text" class="text-lg font-semibold" style="display: none; text-align:center;">
                            <hr> Banner Preview
                            <hr>
                        </div>
                        <div class="clg-banner-preview-image">
                        </div>
                        <div class="clg-banner-file-name" style="text-align: center;">
                            No file Choosen.
                        </div>
                    </div>
                </div>
                <div class="flex items-center w-full justify-between p-3 border-t" id="clg-banner-upload-status" style="display: none;">
                    <div class="flex items-center space-x-2">
                        <ion-icon name="checkmark-circle" class="text-green-600 text-xl"></ion-icon>
                        <div> File selected successfuly.</div>
                    </div>
                    <div class="flex space-x-2">
                        <a href="#" id="clg-banner-cancel-btn" style="display: none;" class="bg-red-100 flex font-medium h-9 items-center justify-center px-5 rounded-md text-red-600 text-sm">
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

        <!-- Second Step  -->

        <hr>
        <h3 style="text-align: center;">Upload Profile and Banner</h3>
        <hr>
        <div class="grid lg:grid-cols-2 gap-3">
            <div>
                <button type="button" href="#clg-profile-modal" uk-toggle class="bg-blue-600 font-semibold p-2 mt-5 rounded-md text-center text-white w-full">
                    Upload Profile</button>
            </div>
            <div>
                <button type="button" href="#clg-banner-modal" uk-toggle class="bg-blue-600 font-semibold p-2 mt-5 rounded-md text-center text-white w-full">
                    Upload Banner</button>
            </div>
        </div><br>
        <hr>
        <h3 style="text-align: center;"> Social Profiles </h3>
        <hr><br>
        <div class="grid lg:grid-cols-2 gap-3">
            <div>
                <label class="mb-0"> Instagram Profile: optional </label>
                <input type="text" id="clg-sp-1" name="clg-sp-1" placeholder="https://www.instagram.com/zone_india_/" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
            </div>
            <div>
                <label class="mb-0"> Facebook Profile: optional </label>
                <input type="text" id="clg-sp-2" name="clg-sp-2" placeholder="https://www.facebook.com/zone_india_/" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
            </div>
            <div>
                <label class="mb-0"> Twitter Profile: optional </label>
                <input type="text" id="clg-sp-3" name="clg-sp-3" placeholder="https://www.twitter.com/zone_india_/" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
            </div>
            <div>
                <label class="mb-0"> Website: optional </label>
                <input type="text" id="clg-sp-4" name="clg-sp-4" placeholder="https://zone.online/" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
            </div>
        </div>
    </div>

    <!-- Third Step -->

    <div class="clg-frm-tab space-y-3" style="display: none;">
        <hr>
        <h3 style="text-align: center;">Full Address</h3>
        <hr>
        <div>
            <label class="mb-0"> Street Address </label>
            <input type="street" id="clg-street" name="clg-street" placeholder="Street Address" class="req bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required>
        </div>
        <div class="grid lg:grid-cols-2 gap-3">
            <div>
                <label class="mb-0"> City </label>
                <input type="city" id="clg-city" name="clg-city" placeholder="City" class="req bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required>
            </div>
            <div>
                <label class="mb-0"> Landmark </label>
                <input type="landmark" id="clg-landmark" name="clg-landmark" placeholder="Landmark" class="req bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required>
            </div>
        </div>
        <div class="grid lg:grid-cols-2 gap-3">
            <div>
                <label class="mb-0"> State </label>
                <input type="state" id="clg-state" name="clg-state" placeholder="State" class="req bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required>
            </div>
            <div>
                <label class="mb-0"> Zip </label>
                <input type="zip" id="clg-zip" name="clg-zip" placeholder="Zip" class="req bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required>
            </div>
        </div>
        <hr>
        <h3 style="text-align: center;"> Admin Details </h3>
        <hr>
        <div>
            <label class="mb-0"> Full Name </label>
            <input type="text" id="clg-a-name" name="clg-a-name" placeholder="Enter full Name" class="req bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required>
        </div>
        <div>
            <label class="mb-0"> Email: Admin </label>
            <input type="text" id="clg-a-email" name="clg-a-email" placeholder="info@example.com" class="req bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required>
        </div>
        <div class="grid lg:grid-cols-2 gap-3">
            <div>
                <label class="mb-0"> Gender </label>
                <select id="clg-a-sex" name="clg-a-sex" class="req selectpicker mt-2" multiple data-max-options="1" title="Please Select Gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div>
                <label class="mb-0"> Phone </label>
                <input type="number" id="clg-a-phone" name="clg-a-phone" placeholder="+91 9876543210" class="req bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required>
            </div>
        </div>
        <div class="checkbox">
            <input type="checkbox" id="clg-a-chekcbox" name="clg-a-chekcbox" class="req" checked="">
            <label for="clg-a-chekcbox"><span class="checkbox-icon"></span> I agree to the <a href="pages-terms.html" target="_blank" class="uk-text-bold uk-text-small uk-link-reset"> Terms and Conditions </a>
            </label>
        </div>
    </div>
    <div>

        <div id="clg-nav-tab" class="grid lg:grid-cols-2 gap-3">
            <div>
                <button type="button" onclick="nextPrevCollege(-1)" id="clg-prevBtn" class="bg-gray-400 font-semibold p-2 mt-5 rounded-md text-center text-white w-full">
                    Previous</button>
            </div>
            <div id="clg-nextBtnDiv">
                <button type="button" onclick="nextPrevCollege(1)" id="clg-nextBtn" class="bg-blue-600 font-semibold p-2 mt-5 rounded-md text-center text-white w-full">
                    Next</button>
            </div>
            <div>
                <button type="button" id="clg-form-submit" class="bg-blue-600 font-semibold p-2 mt-5 rounded-md text-center text-white w-full" style="display: none;">
                    Submit</button>
            </div>
        </div>
    </div>

</div>

<!-- College form Ends Here -->



<script>
    var currentCollegeTab = 0;
    showCollegeTab(currentCollegeTab);

    function showCollegeTab(n) {

        // This function will display the specified tab of the form ...
        var x = document.getElementsByClassName("clg-frm-tab");
        x[n].style.display = "block";

        // ... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("clg-prevBtn").style.display = "none";
            document.getElementById("clg-nav-tab").removeAttribute("class");
        } else {
            document.getElementById("clg-prevBtn").style.display = "inline";
            document.getElementById("clg-nav-tab").className = "grid lg:grid-cols-2 gap-3";
        }
        if (n == 1) {
            document.getElementById("clg-nextBtnDiv").style.display = "inline";
            document.getElementById("clg-form-submit").style.display = "none";
        }
        if (n == 2) {
            document.getElementById("clg-form-submit").style.display = "inline";
            document.getElementById("clg-nextBtnDiv").style.display = "none";
        } else {
            document.getElementById("clg-form-submit").style.display = "none";
        }
    }

    function nextPrevCollege(n) {

        // This function will figure out which tab to display
        var x = document.getElementsByClassName("clg-frm-tab");

        // Exit the function if any field in the current tab is invalid:
        if (n === 1 && validateCollegeForm() === false) {
            return false;
        }

        // Hide the current tab:
        x[currentCollegeTab].style.display = "none";

        // Increase or decrease the current tab by 1:
        currentCollegeTab = currentCollegeTab + n;

        // Otherwise, display the correct tab:
        showCollegeTab(currentCollegeTab);

    }

    function validateCollegeForm() {

        const extensions = ["png", "svg", "jpeg", "jpg"];

        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("clg-frm-tab");
        y = x[currentCollegeTab].getElementsByClassName("req");

        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value === '' || y[i].value === '') {
                // and set the current valid status to false:
                valid = false;
            }
        }

        if (currentCollegeTab === 1 && !(extensions.includes(fileInputACollege.value.split('.').pop()) && extensions.includes(fileInputBCollege.value.split('.').pop()))) {
            alert('Invalid File Input');
            valid = false;
        }
        // If the valid status is False, Show the Error
        if (valid === false) {
            document.getElementById("clg-input-alert").innerHTML = `<div class="bg-whit border-t-4 border-red-600 p-5 shadow-lg relative rounded-md" uk-alert>
                <h3 class="text-lg font-semibold mt-1"> Input field Error </h3>
                <p>Please fill All the Required fields carefully.</p>

                <div class="flex space-x-2 items-center justify-end mt-2">
                    <button type="button" class="uk-alert-close bg-gray-400 py-2 px-4 rounded-md font-semibold"> OK, I'll do it.</button>
                </div>
                </div>`;
        } else {
            document.getElementById("clg-input-alert").innerHTML = "";
        }

        return valid; // return the valid status

    }
</script>


<!-- For Profile Modal -->

<script>
    const updivACollege = document.querySelector("#clg-upload-profile");
    const fileInputACollege = document.querySelector("#clg-profile-img");
    const imgACollege = document.querySelector(".clg-preview-image");
    const fileNameACollege = document.querySelector(".clg-file-name");
    const fileSizeACollege = document.querySelector(".clg-file-size");
    const cancelBtnACollege = document.querySelector("#clg-cancel-btn");
    const preTextACollege = document.querySelector('#clg-pre-text');
    const uploadStatusACollege = document.querySelector('#clg-upload-status');

    updivACollege.addEventListener("click", () => {
        fileInputACollege.click();
    });

    let regExpACollege = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;

    fileInputACollege.addEventListener("change", function() {

        imgACollege.innerHTML = "";

        const fileACollege = this.files[0];

        if (fileACollege.size < 10485760) {

            const readerACollege = new FileReader();

            readerACollege.onload = function() {
                const resultACollege = readerACollege.result;
                uploadStatusACollege.style.display = "";
                imgACollege.innerHTML = `<img src="${resultACollege}" alt="">`;
                cancelBtnACollege.style.display = "";
                preTextACollege.style.display = "";
            }
            cancelBtnACollege.addEventListener("click", function() {
                imgACollege.innerHTML = "";
                fileInputACollege.value = "";
                fileNameACollege.textContent = 'No file Choosen.';
                cancelBtnACollege.style.display = "none";
                preTextACollege.style.display = "none";
                uploadStatusACollege.style.display = "none";
            })
            readerACollege.readAsDataURL(fileACollege);

        } else {
            alert('Size Limit Exceeded');
            fileInputACollege.value = "";
            uploadStatusACollege.style.display = "none";
        }
        if (this.value) {
            let valueStoreACollege = this.value.match(regExpACollege);
            fileNameACollege.textContent = valueStoreACollege;
            fileSizeACollege.textContent = 'Size: ' + (fileACollege.size / 1024 / 1024).toFixed(2) + " MB";
        }
    });
</script>

<!-- For Profile Modal -->


<!-- For Banner Modal -->

<script>
    const updivBCollege = document.querySelector("#clg-upload-banner");
    const fileInputBCollege = document.querySelector("#clg-banner-img");
    const imgBCollege = document.querySelector(".clg-banner-preview-image");
    const fileNameBCollege = document.querySelector(".clg-banner-file-name");
    const fileSizeBCollege = document.querySelector(".clg-banner-file-size");
    const cancelBtnBCollege = document.querySelector("#clg-banner-cancel-btn");
    const preTextBCollege = document.querySelector('#clg-banner-pre-text');
    const uploadStatusBCollege = document.querySelector('#clg-banner-upload-status');

    updivBCollege.addEventListener("click", () => {
        fileInputBCollege.click();
    });

    let regExpBCollege = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;

    fileInputBCollege.addEventListener("change", function() {

        imgBCollege.innerHTML = "";

        const fileBCollege = this.files[0];
        if (fileBCollege.size < 10485760) {
            const readerBCollege = new FileReader();
            readerBCollege.onload = function() {
                const resultBCollege = readerBCollege.result;
                uploadStatusBCollege.style.display = "";
                imgBCollege.innerHTML = `<img src="${resultBCollege}" alt="">`;
                cancelBtnBCollege.style.display = "";
                preTextBCollege.style.display = "";
            }
            cancelBtnBCollege.addEventListener("click", function() {
                imgBCollege.innerHTML = "";
                fileInputBCollege.value = "";
                fileNameBCollege.textContent = 'No file Choosen.';
                cancelBtnBCollege.style.display = "none";
                preTextBCollege.style.display = "none";
                uploadStatusBCollege.style.display = "none";
            })
            readerBCollege.readAsDataURL(fileBCollege);
        } else {
            alert('Size Limit Exceeded');
            fileInputBCollege.value == "";
            uploadStatusBCollege.style.display = "none";
        }
        if (this.value) {
            let valueStoreBCollege = this.value.match(regExpBCollege);
            fileNameBCollege.textContent = valueStoreBCollege;
            fileSizeBCollege.textContent = 'Size: ' + (fileBCollege.size / 1024 / 1024).toFixed(2) + " MB";
        }
    });
</script>

<!-- For Banner Modal -->