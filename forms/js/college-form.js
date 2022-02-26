// <script>
    // For College Form
    $(document).ready(function() {
        $("#clg-form-submit").click(function() {
            var a = $("#clg-street").val();
            var b = $("#clg-city").val();
            var c = $("#clg-landmark").val();
            var d = $("#clg-state").val();
            var e = $("#clg-zip").val();
            var f = $("#clg-a-name").val();
            var g = $("#clg-a-email").val();
            var h = $("#clg-a-sex").val();
            var i = $("#clg-a-phone").val();
            var j = $("#clg-a-checkbox").val();
            var k = $("#clg-pass").val();
            var l = $("#clg-cpass").val();
            var m = $("#clg-email").val();

            if (a == "" || b == "" || c == "" || d == "" || e == "" || f == "" || g == "" || h == "" || i == "" || j == "" || k == "" || l == "") {

                $("#clg-input-alert").html(`<div class="bg-whit border-t-4 border-red-600 p-5 shadow-lg relative rounded-md" uk-alert>
                <h3 class="text-lg font-semibold mt-1"> Input field Error </h3>
                <p>Please fill All the Required fields carefully.</p>
                <div class="flex space-x-2 items-center justify-end mt-2">
                    <button type="button" class="uk-alert-close bg-gray-400 py-2 px-4 rounded-md font-semibold"> OK, I'll do it.</button>
                </div>
                </div>`);
            } else {

                if (ValidateEmail(m)) {

                    if (k === l) {
                        $("#clg-nav-tab").removeAttr("class");
                        $("#clg-prevBtn").css("display", "none");
                        $("#form-picker").css("display", "none");
                        $("#formValue").val('clg');

                        formData = new FormData($('form')[0]);
                        formData.append('clg-profile-img', document.querySelector("#clg-profile-img").files[0]);
                        formData.append('clg-banner-img', document.querySelector("#clg-banner-img").files[0]);

                        $.ajax({
                            url: "handlers/register-handle.php",
                            type: "POST",
                            // data: $("#register-frm").serialize(),
                            data: formData,
                            contentType: false,
                            processData: false,
                            beforeSend: function() {
                                $("#clg-form-submit").html("Processing...");
                            },
                            success: function(data) {
                                $("#register-frm").trigger("reset");
                                if (data == "Submitted") {
                                    $("#clg-input-alert").html(`<div class="bg-whit border-t-4 border-green-600 p-5 shadow-lg relative rounded-md" uk-alert>
                                    <h3 class="text-lg font-semibold mt-1"> Account created successfully. </h3>
                                    <p>Thanks for registering with us, Please verify your mail before logging in.</p>
                                    <div class="flex space-x-2 items-center justify-end mt-2">
                                    <button type="button" class="uk-alert-close bg-green-400 text-green-600 py-2 px-4 rounded-md font-semibold"> Got it</button>
                                    </div>
                                    </div>`);
                                    $("#clg-form-submit").html(data);
                                    setTimeout(function() {
                                        $("#clg-form-submit").html("Redirecting...");
                                        window.location.href = "login.php";
                                    }, 2000);
                                } else {
                                    $("#clg-form-submit").html('<a href="register.php">Try Again</a>');
                                    $("#clg-input-alert").html(`<div class="bg-whit border-t-4 border-red-600 p-5 shadow-lg relative rounded-md" uk-alert>
                                    <h3 class="text-lg font-semibold mt-1"> Error Occurred. </h3>
                                    <p>` + data + `</p>
                                    <div class="flex space-x-2 items-center justify-end mt-2">
                                        <button type="button" class="uk-alert-close bg-gray-400 py-2 px-4 rounded-md font-semibold"> OK, I'll do it.</button>
                                    </div>
                                    </div>`);
                                }
                            }
                        });
                    } else {
                        $("#clg-input-alert").html(`<div class="bg-whit border-t-4 border-red-600 p-5 shadow-lg relative rounded-md" uk-alert>
                        <h3 class="text-lg font-semibold mt-1"> Password Match Error </h3>
                        <p>Passwords are not matching.</p>
                        <div class="flex space-x-2 items-center justify-end mt-2">
                            <button type="button" class="uk-alert-close bg-gray-400 py-2 px-4 rounded-md font-semibold"> OK, I'll do it.</button>
                        </div>
                        </div>`);
                    }
                } else {
                    $("#clg-input-alert").html(`<div class="bg-whit border-t-4 border-red-600 p-5 shadow-lg relative rounded-md" uk-alert>
                    <h3 class="text-lg font-semibold mt-1"> Invalid Email Address </h3>
                    <p>Please enter a valid Email.</p>
                    <div class="flex space-x-2 items-center justify-end mt-2">
                        <button type="button" class="uk-alert-close bg-gray-400 py-2 px-4 rounded-md font-semibold"> OK, I'll do it.</button>
                    </div>
                    </div>`);
                }

                function ValidateEmail(inputText) {
                    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                    if (inputText.match(mailformat)) {
                        return true;
                    } else {
                        return false;
                    }
                }

            }
        });
    });
    // College Form Ends Here
    //</script>