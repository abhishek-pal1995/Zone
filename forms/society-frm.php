<!-- Society form Starts Here  -->

<div id="society-form" class="space-y-3">

    <div id="sty-input-alert">

    </div>

    <!-- First Step  -->

    <div class="sty-frm-tab space-y-3" style="display: none;">
        <h3 style="text-align: center;">Basic Details</h3>
        <hr>
        <div>
            <label class="mb-0"> Society Name </label>
            <input type="text" id="sty-name" name="sty-name" placeholder="Name of the Society" class="req bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required>
        </div>
        <div>
            <label class="mb-0"> Username </label>
            <input type="text" id="sty-uname" name="sty-uname" placeholder="Username" class="req bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required>
        </div>
        <div>
            <label class="mb-0"> Email Address </label>
            <input type="email" id="sty-email" name="sty-email" placeholder="Info@example.com" class="req bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required>
        </div>
        <div>
            <label class="mb-0"> College </label>
            <select id="sty-college" name="sty-college" class="req selectpicker mt-2">
                <option value="DDUC">DDUC</option>
                <option value="MAC">MAC</option>
                <option value="RAMJAS">RAMJAS</option>
            </select>
        </div>
        <div>
            <label class="mb-0"> About </label>
            <textarea id="sty-about" name="sty-about" placeholder="About this Society" class="req bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required></textarea>
        </div>
    </div>

    <!-- Second Step  -->

    <div class="sty-frm-tab space-y-3" style="display: none;">

        <!-- Profile Modal -->

        <div id="sty-profile-modal" class="create-post" uk-modal>
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
                        <div id="sty-upload-profile" class="relative uk-transition-toggle overflow-hidden">
                            <div class="w-full">
                                <div class="bg-gray-100 border-2 border-dashed flex flex-col h-40 items-center justify-center relative w-full rounded-lg dark:bg-gray-800 dark:border-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-12">
                                        <path d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z" />
                                        <path d="M9 13h2v5a1 1 0 11-2 0v-5z" />
                                    </svg>
                                </div>
                            </div>
                            <input hidden id="sty-profile-img" name="sty-profile-img" class="req" type="file">
                            <a href="#" class="bg-gray-200 flex font-medium h-9 items-center justify-center px-5 rounded-b-xl text-blue-600 text-white uk-position-bottom uk-transition-bottom-small">
                                Choose file</a>
                        </div>
                        <div id="sty-pre-text" class="text-lg font-semibold" style="display: none; text-align:center;">
                            <hr> Profile Preview
                            <hr>
                        </div>
                        <div class="sty-preview-image">
                        </div>
                        <div class="sty-file-name" style="text-align: center;">
                            No file Choosen.
                        </div>
                    </div>
                </div>
                <div class="flex items-center w-full justify-between p-3 border-t" id="sty-upload-status" style="display: none;">
                    <div class="flex items-center space-x-2">
                        <ion-icon name="checkmark-circle" class="text-green-600 text-xl"></ion-icon>
                        <div> File selected successfuly.</div>
                    </div>
                    <div class="flex space-x-2">
                        <a href="#" id="sty-cancel-btn" style="display: none;" class="bg-red-100 flex font-medium h-9 items-center justify-center px-5 rounded-md text-red-600 text-sm">
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

        <div id="sty-banner-modal" class="create-post" uk-modal>
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
                        <div id="sty-upload-banner" class="relative uk-transition-toggle overflow-hidden">
                            <div class="w-full">
                                <div class="bg-gray-100 border-2 border-dashed flex flex-col h-40 items-center justify-center relative w-full rounded-lg dark:bg-gray-800 dark:border-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-12">
                                        <path d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z" />
                                        <path d="M9 13h2v5a1 1 0 11-2 0v-5z" />
                                    </svg>
                                </div>
                            </div>
                            <input hidden id="sty-banner-img" name="sty-banner-img" class="req" type="file">
                            <a href="#" class="bg-gray-200 flex font-medium h-9 items-center justify-center px-5 rounded-b-xl text-blue-600 text-white uk-position-bottom uk-transition-bottom-small">
                                Choose file</a>
                        </div>
                        <div id="sty-banner-pre-text" class="text-lg font-semibold" style="display: none; text-align:center;">
                            <hr> Banner Preview
                            <hr>
                        </div>
                        <div class="sty-banner-preview-image">
                        </div>
                        <div class="sty-banner-file-name" style="text-align: center;">
                            No file Choosen.
                        </div>
                    </div>
                </div>
                <div class="flex items-center w-full justify-between p-3 border-t" id="sty-banner-upload-status" style="display: none;">
                    <div class="flex items-center space-x-2">
                        <ion-icon name="checkmark-circle" class="text-green-600 text-xl"></ion-icon>
                        <div> File selected successfuly.</div>
                    </div>
                    <div class="flex space-x-2">
                        <a href="#" id="sty-banner-cancel-btn" style="display: none;" class="bg-red-100 flex font-medium h-9 items-center justify-center px-5 rounded-md text-red-600 text-sm">
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
                <button type="button" href="#sty-profile-modal" uk-toggle class="bg-blue-600 font-semibold p-2 mt-5 rounded-md text-center text-white w-full">
                    Upload Profile</button>
            </div>
            <div>
                <button type="button" href="#sty-banner-modal" uk-toggle class="bg-blue-600 font-semibold p-2 mt-5 rounded-md text-center text-white w-full">
                    Upload Banner</button>
            </div>
        </div><br>
        <hr>
        <h3 style="text-align: center;"> Social Profiles </h3>
        <hr><br>
        <div class="grid lg:grid-cols-2 gap-3">
            <div>
                <label class="mb-0"> Instagram Profile: optional </label>
                <input type="text" id="sty-sp-1" name="sty-sp-1" placeholder="https://www.instagram.com/zone_india_/" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
            </div>
            <div>
                <label class="mb-0"> Facebook Profile: optional </label>
                <input type="text" id="sty-sp-2" name="sty-sp-2" placeholder="https://www.facebook.com/zone_india_/" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
            </div>
            <div>
                <label class="mb-0"> Twitter Profile: optional </label>
                <input type="text" id="sty-sp-3" name="sty-sp-3" placeholder="https://www.twitter.com/zone_india_/" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
            </div>
            <div>
                <label class="mb-0"> Website: optional </label>
                <input type="text" id="sty-sp-4" name="sty-sp-4" placeholder="https://zone.online/" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
            </div>
        </div>
    </div>

    <!-- Third Step -->

    <div class="sty-frm-tab space-y-3" style="display: none;">
        <hr>
        <h3 style="text-align: center;"> Admin Details </h3>
        <hr>
        <div>
            <label class="mb-0"> Full Name </label>
            <input type="text" id="sty-a-name" name="sty-a-name" placeholder="Enter full Name" class="req bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required>
        </div>
        <div>
            <label class="mb-0"> Email: Admin </label>
            <input type="text" id="sty-a-email" name="sty-a-email" placeholder="info@example.com" class="req bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required>
        </div>
        <div class="grid lg:grid-cols-2 gap-3">
            <div>
                <label class="mb-0"> Gender </label>
                <select id="sty-a-sex" name="sty-a-sex" class="req selectpicker mt-2" multiple data-max-options="1" title="Please Select Gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div>
                <label class="mb-0"> Phone </label>
                <input type="number" id="sty-a-phone" name="sty-a-phone" placeholder="+91 9876543210" class="req bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required>
            </div>
        </div>
        <div>
            <label class="mb-0"> Create Password </label>
            <input type="password" id="sty-pass" name="sty-pass" placeholder="Create New Password" class="req bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required>
        </div>
        <div>
            <label class="mb-0"> Confirm Password </label>
            <input type="password" id="sty-cpass" name="sty-cpass" placeholder="Confirm Your Password" class="req bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required>
        </div>
        <div class="checkbox">
            <input type="checkbox" id="sty-a-chekcbox" name="sty-a-chekcbox" class="req" checked="">
            <label for="chekcbox1"><span class="checkbox-icon"></span> I agree to the <a href="pages-terms.html" target="_blank" class="uk-text-bold uk-text-small uk-link-reset"> Terms and Conditions </a>
            </label>
        </div>
    </div>
    <div>
        <div id="sty-nav-tab" class="grid lg:grid-cols-2 gap-3">
            <div>
                <button type="button" onclick="nextPrevSociety(-1)" id="sty-prevBtn" class="bg-gray-400 font-semibold p-2 mt-5 rounded-md text-center text-white w-full">
                    Previous</button>
            </div>
            <div id="sty-nextBtnDiv">
                <button type="button" onclick="nextPrevSociety(1)" id="sty-nextBtn" class="bg-blue-600 font-semibold p-2 mt-5 rounded-md text-center text-white w-full">
                    Next</button>
            </div>
            <div>
                <button type="button" id="sty-form-submit" class="bg-blue-600 font-semibold p-2 mt-5 rounded-md text-center text-white w-full" style="display: none;">
                    Submit</button>
            </div>
        </div>
    </div>

</div>

<!-- Society form Ends Here -->



<script>
    var currentSocietyTab = 0;
    showSocietyTab(currentSocietyTab);

    function showSocietyTab(n) {

        // This function will display the specified tab of the form ...
        var x = document.getElementsByClassName("sty-frm-tab");
        x[n].style.display = "block";

        // ... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("sty-prevBtn").style.display = "none";
            document.getElementById("sty-nav-tab").removeAttribute("class");
        } else {
            document.getElementById("sty-prevBtn").style.display = "inline";
            document.getElementById("sty-nav-tab").className = "grid lg:grid-cols-2 gap-3";
        }
        if (n == 1) {
            document.getElementById("sty-nextBtnDiv").style.display = "inline";
            document.getElementById("sty-form-submit").style.display = "none";
        }
        if (n == 2) {
            document.getElementById("sty-form-submit").style.display = "inline";
            document.getElementById("sty-nextBtnDiv").style.display = "none";
        } else {
            document.getElementById("sty-form-submit").style.display = "none";
        }
    }

    function nextPrevSociety(n) {

        // This function will figure out which tab to display
        var x = document.getElementsByClassName("sty-frm-tab");

        // Exit the function if any field in the current tab is invalid:
        if (n === 1 && validateSocietyForm() === false) {
            return false;
        }

        // Hide the current tab:
        x[currentSocietyTab].style.display = "none";

        // Increase or decrease the current tab by 1:
        currentSocietyTab = currentSocietyTab + n;

        // Otherwise, display the correct tab:
        showSocietyTab(currentSocietyTab);

    }

    function validateSocietyForm() {

        const extensions = ["png", "svg", "jpeg", "jpg"];

        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("sty-frm-tab");
        y = x[currentSocietyTab].getElementsByClassName("req");

        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value === '' || y[i].value === '') {
                // and set the current valid status to false:
                valid = false;
            }
        }

        if (currentSocietyTab === 1 && !(extensions.includes(fileInputASociety.value.split('.').pop()) && extensions.includes(fileInputBSociety.value.split('.').pop()))) {
            alert('Invalid File Input');
            valid = false;
        }
        // If the valid status is False, Show the Error
        if (valid === false) {
            document.getElementById("sty-input-alert").innerHTML = `<div class="bg-whit border-t-4 border-red-600 p-5 shadow-lg relative rounded-md" uk-alert>
                <h3 class="text-lg font-semibold mt-1"> Input field Error </h3>
                <p>Please fill All the Required fields carefully.</p>

                <div class="flex space-x-2 items-center justify-end mt-2">
                    <button type="button" class="uk-alert-close bg-gray-400 py-2 px-4 rounded-md font-semibold"> OK, I'll do it.</button>
                </div>
                </div>`;
        } else {
            document.getElementById("sty-input-alert").innerHTML = "";
        }

        return valid; // return the valid status

    }
</script>


<!-- For Profile Modal -->

<script>
    const updivASociety = document.querySelector("#sty-upload-profile");
    const fileInputASociety = document.querySelector("#sty-profile-img");
    const imgASociety = document.querySelector(".sty-preview-image");
    const fileNameASociety = document.querySelector(".sty-file-name");
    const fileSizeASociety = document.querySelector(".sty-file-size");
    const cancelBtnASociety = document.querySelector("#sty-cancel-btn");
    const preTextASociety = document.querySelector('#sty-pre-text');
    const uploadStatusASociety = document.querySelector('#sty-upload-status');

    updivASociety.addEventListener("click", () => {
        fileInputASociety.click();
    });

    let regExpASociety = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;

    fileInputASociety.addEventListener("change", function() {

        imgASociety.innerHTML = "";

        const fileASociety = this.files[0];

        if (fileASociety.size < 10485760) {

            const readerASociety = new FileReader();

            readerASociety.onload = function() {
                const resultASociety = readerASociety.result;
                uploadStatusASociety.style.display = "";
                imgASociety.innerHTML = `<img src="${resultASociety}" alt="">`;
                cancelBtnASociety.style.display = "";
                preTextASociety.style.display = "";
            }
            cancelBtnASociety.addEventListener("click", function() {
                imgASociety.innerHTML = "";
                fileInputASociety.value = "";
                fileNameASociety.textContent = 'No file Choosen.';
                cancelBtnASociety.style.display = "none";
                preTextASociety.style.display = "none";
                uploadStatusASociety.style.display = "none";
            })
            readerASociety.readAsDataURL(fileASociety);

        } else {
            alert('Size Limit Exceeded');
            fileInputASociety.value = "";
            uploadStatusASociety.style.display = "none";
        }
        if (this.value) {
            let valueStoreASociety = this.value.match(regExpASociety);
            fileNameASociety.textContent = valueStoreASociety;
            fileSizeASociety.textContent = 'Size: ' + (fileASociety.size / 1024 / 1024).toFixed(2) + " MB";
        }
    });
</script>

<!-- For Profile Modal -->


<!-- For Banner Modal -->

<script>
    const updivBSociety = document.querySelector("#sty-upload-banner");
    const fileInputBSociety = document.querySelector("#sty-banner-img");
    const imgBSociety = document.querySelector(".sty-banner-preview-image");
    const fileNameBSociety = document.querySelector(".sty-banner-file-name");
    const fileSizeBSociety = document.querySelector(".sty-banner-file-size");
    const cancelBtnBSociety = document.querySelector("#sty-banner-cancel-btn");
    const preTextBSociety = document.querySelector('#sty-banner-pre-text');
    const uploadStatusBSociety = document.querySelector('#sty-banner-upload-status');

    updivBSociety.addEventListener("click", () => {
        fileInputBSociety.click();
    });

    let regExpBSociety = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;

    fileInputBSociety.addEventListener("change", function() {

        imgBSociety.innerHTML = "";

        const fileBSociety = this.files[0];
        if (fileBSociety.size < 10485760) {
            const readerBSociety = new FileReader();
            readerBSociety.onload = function() {
                const resultBSociety = readerBSociety.result;
                uploadStatusBSociety.style.display = "";
                imgBSociety.innerHTML = `<img src="${resultBSociety}" alt="">`;
                cancelBtnBSociety.style.display = "";
                preTextBSociety.style.display = "";
            }
            cancelBtnBSociety.addEventListener("click", function() {
                imgBSociety.innerHTML = "";
                fileInputBSociety.value = "";
                fileNameBSociety.textContent = 'No file Choosen.';
                cancelBtnBSociety.style.display = "none";
                preTextBSociety.style.display = "none";
                uploadStatusBSociety.style.display = "none";
            })
            readerBSociety.readAsDataURL(fileBSociety);
        } else {
            alert('Size Limit Exceeded');
            fileInputBSociety.value == "";
            uploadStatusBSociety.style.display = "none";
        }
        if (this.value) {
            let valueStoreBSociety = this.value.match(regExpBSociety);
            fileNameBSociety.textContent = valueStoreBSociety;
            fileSizeBSociety.textContent = 'Size: ' + (fileBSociety.size / 1024 / 1024).toFixed(2) + " MB";
        }
    });
</script>

<!-- For Banner Modal -->