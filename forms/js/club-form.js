    //<script>
    // For Club Form
    $(document).ready(function() {
        $("#clb-form-submit").click(function() {
            var a = $("#clb-pass").val();
            var b = $("#clb-cpass").val();
            var f = $("#clb-a-name").val();
            var g = $("#clb-a-email").val();
            var h = $("#clb-a-sex").val();
            var i = $("#clb-a-phone").val();
            var j = $("#clb-a-checkbox").val();
            var k = $("#clb-email").val();

            if (a == "" || b == "" || f == "" || g == "" || h == "" || i == "" || j == "") {

                $("#clb-input-alert").html(`<div class="bg-whit border-t-4 border-red-600 p-5 shadow-lg relative rounded-md" uk-alert>
                <h3 class="text-lg font-semibold mt-1"> Input field Error </h3>
                <p>Please fill All the Required fields carefully.</p>
                <div class="flex space-x-2 items-center justify-end mt-2">
                    <button type="button" class="uk-alert-close bg-gray-400 py-2 px-4 rounded-md font-semibold"> OK, I'll do it.</button>
                </div>
                </div>`);
            } else {

                if (ValidateEmail(k)) {

                    if (a === b) {
                        $("#clb-nav-tab").removeAttr("class");
                        $("#clb-prevBtn").css("display", "none");
                        $("#form-picker").css("display", "none");
                        $("#formValue").val('clb');

                        formData = new FormData($('form')[0]);
                        formData.append('clb-profile-img', document.querySelector("#clb-profile-img").files[0]);
                        formData.append('clb-banner-img', document.querySelector("#clb-banner-img").files[0]);

                        $.ajax({
                            url: "handlers/register-handle.php",
                            type: "POST",
                            // data: $("#register-frm").serialize(),
                            data: formData,
                            contentType: false,
                            processData: false,
                            beforeSend: function() {
                                $("#clb-form-submit").html("Processing...");
                            },
                            success: function(data) {
                                $("#register-frm").trigger("reset");
                                if (data == "Submitted") {
                                    $("#clb-input-alert").html(`<div class="bg-whit border-t-4 border-green-600 p-5 shadow-lg relative rounded-md" uk-alert>
                                    <h3 class="text-lg font-semibold mt-1"> Account created successfully. </h3>
                                    <p>Thanks for registering with us, Please verify your mail before logging in.</p>
                                    <div class="flex space-x-2 items-center justify-end mt-2">
                                    <button type="button" class="uk-alert-close bg-green-400 text-green-600 py-2 px-4 rounded-md font-semibold"> Got it</button>
                                    </div>
                                    </div>`);
                                    $("#clb-form-submit").html(data);
                                    setTimeout(function() {
                                        $("#clb-form-submit").html("Redirecting...");
                                        window.location.href = "login.php";
                                    }, 2000);
                                } else {
                                    $("#clb-form-submit").html('<a href="register.php">Try Again</a>');
                                    $("#clb-input-alert").html(`<div class="bg-whit border-t-4 border-red-600 p-5 shadow-lg relative rounded-md" uk-alert>
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
                        $("#clb-input-alert").html(`<div class="bg-whit border-t-4 border-red-600 p-5 shadow-lg relative rounded-md" uk-alert>
                        <h3 class="text-lg font-semibold mt-1"> Password Match Error </h3>
                        <p>Passwords are not matching.</p>
                        <div class="flex space-x-2 items-center justify-end mt-2">
                        <button type="button" class="uk-alert-close bg-gray-400 py-2 px-4 rounded-md font-semibold"> OK, I'll do it.</button>
                        </div>
                        </div>`);
                    }
                } else {
                    $("#clb-input-alert").html(`<div class="bg-whit border-t-4 border-red-600 p-5 shadow-lg relative rounded-md" uk-alert>
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
    // Club Form Ends Here
    //</script>