<!-- Club form Starts Here  -->

<div id="club-form" class="space-y-3">

    <div id="clb-input-alert">

    </div>

    <!-- First Step  -->

    <div class="clb-frm-tab space-y-3" style="display: none;">
        <h3 style="text-align: center;">Basic Details</h3>
        <hr>
        <div>
            <label class="mb-0"> Club Name </label>
            <input type="text" id="clb-name" name="clb-name" placeholder="Name of the Club" class="req bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required>
        </div>
        <div>
            <label class="mb-0"> Username </label>
            <input type="text" id="clb-uname" name="clb-uname" placeholder="Username" class="req bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required>
        </div>
        <div>
            <label class="mb-0"> Email Address </label>
            <input type="email" id="clb-email" name="clb-email" placeholder="Info@example.com" class="req bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required>
        </div>
        <div>
            <label class="mb-0"> College </label>
            <select id="clb-college" name="clb-college" class="req selectpicker mt-2">
                <option value="DDUC">DDUC</option>
                <option value="MAC">MAC</option>
                <option value="RAMJAS">RAMJAS</option>
            </select>
        </div>
        <div>
            <label class="mb-0"> About </label>
            <textarea id="clb-about" name="clb-about" placeholder="About this Club" class="req bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required></textarea>
        </div>
    </div>

    <!-- Second Step  -->

    <div class="clb-frm-tab space-y-3" style="display: none;">

        <!-- Profile Modal -->

        <div id="clb-profile-modal" class="create-post" uk-modal>
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
                        <div id="clb-upload-profile" class="relative uk-transition-toggle overflow-hidden">
                            <div class="w-full">
                                <div class="bg-gray-100 border-2 border-dashed flex flex-col h-40 items-center justify-center relative w-full rounded-lg dark:bg-gray-800 dark:border-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-12">
                                        <path d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z" />
                                        <path d="M9 13h2v5a1 1 0 11-2 0v-5z" />
                                    </svg>
                                </div>
                            </div>
                            <input hidden id="clb-profile-img" name="clb-profile-img" class="req" type="file">
                            <a href="#" class="bg-gray-200 flex font-medium h-9 items-center justify-center px-5 rounded-b-xl text-blue-600 text-white uk-position-bottom uk-transition-bottom-small">
                                Choose file</a>
                        </div>
                        <div id="clb-pre-text" class="text-lg font-semibold" style="display: none; text-align:center;">
                            <hr> Profile Preview
                            <hr>
                        </div>
                        <div class="clb-preview-image">
                        </div>
                        <div class="clb-file-name" style="text-align: center;">
                            No file Choosen.
                        </div>
                    </div>
                </div>
                <div class="flex items-center w-full justify-between p-3 border-t" id="clb-upload-status" style="display: none;">
                    <div class="flex items-center space-x-2">
                        <ion-icon name="checkmark-circle" class="text-green-600 text-xl"></ion-icon>
                        <div> File selected successfuly.</div>
                    </div>
                    <div class="flex space-x-2">
                        <a href="#" id="clb-cancel-btn" style="display: none;" class="bg-red-100 flex font-medium h-9 items-center justify-center px-5 rounded-md text-red-600 text-sm">
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

        <div id="clb-banner-modal" class="create-post" uk-modal>
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
                        <div id="clb-upload-banner" class="relative uk-transition-toggle overflow-hidden">
                            <div class="w-full">
                                <div class="bg-gray-100 border-2 border-dashed flex flex-col h-40 items-center justify-center relative w-full rounded-lg dark:bg-gray-800 dark:border-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-12">
                                        <path d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z" />
                                        <path d="M9 13h2v5a1 1 0 11-2 0v-5z" />
                                    </svg>
                                </div>
                            </div>
                            <input hidden id="clb-banner-img" name="clb-banner-img" class="req" type="file">
                            <a href="#" class="bg-gray-200 flex font-medium h-9 items-center justify-center px-5 rounded-b-xl text-blue-600 text-white uk-position-bottom uk-transition-bottom-small">
                                Choose file</a>
                        </div>
                        <div id="clb-banner-pre-text" class="text-lg font-semibold" style="display: none; text-align:center;">
                            <hr> Banner Preview
                            <hr>
                        </div>
                        <div class="clb-banner-preview-image">
                        </div>
                        <div class="clb-banner-file-name" style="text-align: center;">
                            No file Choosen.
                        </div>
                    </div>
                </div>
                <div class="flex items-center w-full justify-between p-3 border-t" id="clb-banner-upload-status" style="display: none;">
                    <div class="flex items-center space-x-2">
                        <ion-icon name="checkmark-circle" class="text-green-600 text-xl"></ion-icon>
                        <div> File selected successfuly.</div>
                    </div>
                    <div class="flex space-x-2">
                        <a href="#" id="clb-banner-cancel-btn" style="display: none;" class="bg-red-100 flex font-medium h-9 items-center justify-center px-5 rounded-md text-red-600 text-sm">
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
                <button type="button" href="#clb-profile-modal" uk-toggle class="bg-blue-600 font-semibold p-2 mt-5 rounded-md text-center text-white w-full">
                    Upload Profile</button>
            </div>
            <div>
                <button type="button" href="#clb-banner-modal" uk-toggle class="bg-blue-600 font-semibold p-2 mt-5 rounded-md text-center text-white w-full">
                    Upload Banner</button>
            </div>
        </div><br>
        <hr>
        <h3 style="text-align: center;"> Social Profiles </h3>
        <hr><br>
        <div class="grid lg:grid-cols-2 gap-3">
            <div>
                <label class="mb-0"> Instagram Profile: optional </label>
                <input type="text" id="clb-sp-1" name="clb-sp-1" placeholder="https://www.instagram.com/zone_india_/" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
            </div>
            <div>
                <label class="mb-0"> Facebook Profile: optional </label>
                <input type="text" id="clb-sp-2" name="clb-sp-2" placeholder="https://www.facebook.com/zone_india_/" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
            </div>
            <div>
                <label class="mb-0"> Twitter Profile: optional </label>
                <input type="text" id="clb-sp-3" name="clb-sp-3" placeholder="https://www.twitter.com/zone_india_/" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
            </div>
            <div>
                <label class="mb-0"> Website: optional </label>
                <input type="text" id="clb-sp-4" name="clb-sp-4" placeholder="https://zone.online/" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
            </div>
        </div>
    </div>

    <!-- Third Step -->

    <div class="clb-frm-tab space-y-3" style="display: none;">
        <hr>
        <h3 style="text-align: center;"> Admin Details </h3>
        <hr>
        <div>
            <label class="mb-0"> Full Name </label>
            <input type="text" id="clb-a-name" name="clb-a-name" placeholder="Enter full Name" class="req bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required>
        </div>
        <div>
            <label class="mb-0"> Email: Admin </label>
            <input type="text" id="clb-a-email" name="clb-a-email" placeholder="info@example.com" class="req bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required>
        </div>
        <div class="grid lg:grid-cols-2 gap-3">
            <div>
                <label class="mb-0"> Gender </label>
                <select id="clb-a-sex" name="clb-a-sex" class="req selectpicker mt-2" multiple data-max-options="1" title="Please Select Gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div>
                <label class="mb-0"> Phone </label>
                <input type="number" id="clb-a-phone" name="clb-a-phone" placeholder="+91 9876543210" class="req bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required>
            </div>
        </div>
        <div>
            <label class="mb-0"> Create Password </label>
            <input type="password" id="clb-pass" name="clb-pass" placeholder="Create New Password" class="req bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required>
        </div>
        <div>
            <label class="mb-0"> Confirm Password </label>
            <input type="password" id="clb-cpass" name="clb-cpass" placeholder="Confirm Your Password" class="req bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required>
        </div>
        <div class="checkbox">
            <input type="checkbox" id="clb-a-chekcbox" name="clb-a-chekcbox" class="req" checked="">
            <label for="clb-chekcbox"><span class="checkbox-icon"></span> I agree to the <a href="pages-terms.html" target="_blank" class="uk-text-bold uk-text-small uk-link-reset"> Terms and Conditions </a>
            </label>
        </div>
    </div>
    <div>
        <div id="clb-nav-tab" class="grid lg:grid-cols-2 gap-3">
            <div>
                <button type="button" onclick="nextPrevClub(-1)" id="clb-prevBtn" class="bg-gray-400 font-semibold p-2 mt-5 rounded-md text-center text-white w-full">
                    Previous</button>
            </div>
            <div id="clb-nextBtnDiv">
                <button type="button" onclick="nextPrevClub(1)" id="clb-nextBtn" class="bg-blue-600 font-semibold p-2 mt-5 rounded-md text-center text-white w-full">
                    Next</button>
            </div>
            <div>
                <button type="button" id="clb-form-submit" class="bg-blue-600 font-semibold p-2 mt-5 rounded-md text-center text-white w-full" style="display: none;">
                    Submit</button>
            </div>
        </div>
    </div>

</div>

<!-- Club form Ends Here -->



<script>
    var currentClubTab = 0;
    showClubTab(currentClubTab);

    function showClubTab(n) {

        // This function will display the specified tab of the form ...
        var x = document.getElementsByClassName("clb-frm-tab");
        x[n].style.display = "block";

        // ... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("clb-prevBtn").style.display = "none";
            document.getElementById("clb-nav-tab").removeAttribute("class");
        } else {
            document.getElementById("clb-prevBtn").style.display = "inline";
            document.getElementById("clb-nav-tab").className = "grid lg:grid-cols-2 gap-3";
        }
        if (n == 1) {
            document.getElementById("clb-nextBtnDiv").style.display = "inline";
            document.getElementById("clb-form-submit").style.display = "none";
        }
        if (n == 2) {
            document.getElementById("clb-form-submit").style.display = "inline";
            document.getElementById("clb-nextBtnDiv").style.display = "none";
        } else {
            document.getElementById("clb-form-submit").style.display = "none";
        }
    }

    function nextPrevClub(n) {

        // This function will figure out which tab to display
        var x = document.getElementsByClassName("clb-frm-tab");

        // Exit the function if any field in the current tab is invalid:
        if (n === 1 && validateClubForm() === false) {
            return false;
        }

        // Hide the current tab:
        x[currentClubTab].style.display = "none";

        // Increase or decrease the current tab by 1:
        currentClubTab = currentClubTab + n;

        // Otherwise, display the correct tab:
        showClubTab(currentClubTab);

    }

    function validateClubForm() {

        const extensions = ["png", "svg", "jpeg", "jpg"];

        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("clb-frm-tab");
        y = x[currentClubTab].getElementsByClassName("req");

        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value === '' || y[i].value === '') {
                // and set the current valid status to false:
                valid = false;
            }
        }

        if (currentClubTab === 1 && !(extensions.includes(fileInputAClub.value.split('.').pop()) && extensions.includes(fileInputBClub.value.split('.').pop()))) {
            alert('Invalid File Input');
            valid = false;
        }
        // If the valid status is False, Show the Error
        if (valid === false) {
            document.getElementById("clb-input-alert").innerHTML = `<div class="bg-whit border-t-4 border-red-600 p-5 shadow-lg relative rounded-md" uk-alert>
                <h3 class="text-lg font-semibold mt-1"> Input field Error </h3>
                <p>Please fill All the Required fields carefully.</p>

                <div class="flex space-x-2 items-center justify-end mt-2">
                    <button type="button" class="uk-alert-close bg-gray-400 py-2 px-4 rounded-md font-semibold"> OK, I'll do it.</button>
                </div>
                </div>`;
        } else {
            document.getElementById("clb-input-alert").innerHTML = "";
        }

        return valid; // return the valid status

    }
</script>


<!-- For Profile Modal -->

<script>
    const updivAClub = document.querySelector("#clb-upload-profile");
    const fileInputAClub = document.querySelector("#clb-profile-img");
    const imgAClub = document.querySelector(".clb-preview-image");
    const fileNameAClub = document.querySelector(".clb-file-name");
    const fileSizeAClub = document.querySelector(".clb-file-size");
    const cancelBtnAClub = document.querySelector("#clb-cancel-btn");
    const preTextAClub = document.querySelector('#clb-pre-text');
    const uploadStatusAClub = document.querySelector('#clb-upload-status');

    updivAClub.addEventListener("click", () => {
        fileInputAClub.click();
    });

    let regExpAClub = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;

    fileInputAClub.addEventListener("change", function() {

        imgAClub.innerHTML = "";

        const fileAClub = this.files[0];

        if (fileAClub.size < 10485760) {

            const readerAClub = new FileReader();

            readerAClub.onload = function() {
                const resultAClub = readerAClub.result;
                uploadStatusAClub.style.display = "";
                imgAClub.innerHTML = `<img src="${resultAClub}" alt="">`;
                cancelBtnAClub.style.display = "";
                preTextAClub.style.display = "";
            }
            cancelBtnAClub.addEventListener("click", function() {
                imgAClub.innerHTML = "";
                fileInputAClub.value = "";
                fileNameAClub.textContent = 'No file Choosen.';
                cancelBtnAClub.style.display = "none";
                preTextAClub.style.display = "none";
                uploadStatusAClub.style.display = "none";
            })
            readerAClub.readAsDataURL(fileAClub);

        } else {
            alert('Size Limit Exceeded');
            fileInputAClub.value = "";
            uploadStatusAClub.style.display = "none";
        }
        if (this.value) {
            let valueStoreAClub = this.value.match(regExpAClub);
            fileNameAClub.textContent = valueStoreAClub;
            fileSizeAClub.textContent = 'Size: ' + (fileAClub.size / 1024 / 1024).toFixed(2) + " MB";
        }
    });
</script>

<!-- For Profile Modal -->


<!-- For Banner Modal -->

<script>
    const updivBClub = document.querySelector("#clb-upload-banner");
    const fileInputBClub = document.querySelector("#clb-banner-img");
    const imgBClub = document.querySelector(".clb-banner-preview-image");
    const fileNameBClub = document.querySelector(".clb-banner-file-name");
    const fileSizeBClub = document.querySelector(".clb-banner-file-size");
    const cancelBtnBClub = document.querySelector("#clb-banner-cancel-btn");
    const preTextBClub = document.querySelector('#clb-banner-pre-text');
    const uploadStatusBClub = document.querySelector('#clb-banner-upload-status');

    updivBClub.addEventListener("click", () => {
        fileInputBClub.click();
    });

    let regExpBClub = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;

    fileInputBClub.addEventListener("change", function() {

        imgBClub.innerHTML = "";

        const fileBClub = this.files[0];
        if (fileBClub.size < 10485760) {
            const readerBClub = new FileReader();
            readerBClub.onload = function() {
                const resultBClub = readerBClub.result;
                uploadStatusBClub.style.display = "";
                imgBClub.innerHTML = `<img src="${resultBClub}" alt="">`;
                cancelBtnBClub.style.display = "";
                preTextBClub.style.display = "";
            }
            cancelBtnBClub.addEventListener("click", function() {
                imgBClub.innerHTML = "";
                fileInputBClub.value = "";
                fileNameBClub.textContent = 'No file Choosen.';
                cancelBtnBClub.style.display = "none";
                preTextBClub.style.display = "none";
                uploadStatusBClub.style.display = "none";
            })
            readerBClub.readAsDataURL(fileBClub);
        } else {
            alert('Size Limit Exceeded');
            fileInputBClub.value == "";
            uploadStatusBClub.style.display = "none";
        }
        if (this.value) {
            let valueStoreBClub = this.value.match(regExpBClub);
            fileNameBClub.textContent = valueStoreBClub;
            fileSizeBClub.textContent = 'Size: ' + (fileBClub.size / 1024 / 1024).toFixed(2) + " MB";
        }
    });
</script>

<!-- For Banner Modal -->