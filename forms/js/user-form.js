// <script>
    // For User Form
    $(document).ready(function() {
        $("#usr-form-submit").click(function() {
            var a = $("#usr-fname").val();
            var b = $("#usr-lname").val();
            var c = $("#usr-uname").val();
            var d = $("#usr-email").val();
            var e = $("#usr-pass").val();
            var f = $("#usr-college").val();

            var g = [];
            for (var option of document.getElementById('usr-foi').options) {
                if (option.selected) {
                    g.push(option.value);
                }
            }

            var h = $("#usr-sex").val();
            var i = $("#usr-cpass").val();
            var j = $("#usr-checkbox").val();

            if (a == "" || b == "" || c == "" || d == "" || e == "" || f == "" || g == "" || h == "" || i == "" || j == "") {

                $("#usr-input-alert").html(`<div class="bg-whit border-t-4 border-red-600 p-5 shadow-lg relative rounded-md" uk-alert>
                <h3 class="text-lg font-semibold mt-1"> Input field Error </h3>
                <p>Please fill All the Required fields carefully.</p>
                <div class="flex space-x-2 items-center justify-end mt-2">
                    <button type="button" class="uk-alert-close bg-gray-400 py-2 px-4 rounded-md font-semibold"> OK, I'll do it.</button>
                </div>
                </div>`);
            } else {

                if (ValidateEmail(d)) {

                    if (e === i) {
                        $("#form-picker").css("display", "none");
                        $("#formValue").val("usr");

                        $.ajax({
                            url: "handlers/register-handle.php",
                            type: "POST",
                            data: $("#register-frm").serialize() + "&usr-foi=" + g,
                            beforeSend: function() {
                                $("#usr-form-submit").html("Processing...");
                            },
                            success: function(data) {
                                $("#register-frm").trigger("reset");
                                if (data == "Submitted") {
                                    $("#usr-input-alert").html(`<div class="bg-whit border-t-4 border-green-600 p-5 shadow-lg relative rounded-md" uk-alert>
                                    <h3 class="text-lg font-semibold mt-1"> Account created successfully. </h3>
                                    <p>Thanks for registering with us, Please verify your mail before logging in.</p>
                                    <div class="flex space-x-2 items-center justify-end mt-2">
                                    <button type="button" class="uk-alert-close bg-green-400 text-green-600 py-2 px-4 rounded-md font-semibold"> Got it</button>
                                    </div>
                                    </div>`);
                                    $("#usr-form-submit").html(data);
                                    setTimeout(function() {
                                        $("#usr-form-submit").html("Redirecting...");
                                        window.location.href = "login.php";
                                    }, 2000);
                                } else {
                                    $("#usr-form-submit").html('<a href="register.php">Try Again</a>');
                                    $("#usr-input-alert").html(`<div class="bg-whit border-t-4 border-red-600 p-5 shadow-lg relative rounded-md" uk-alert>
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
                        $("#usr-input-alert").html(`<div class="bg-whit border-t-4 border-red-600 p-5 shadow-lg relative rounded-md" uk-alert>
                        <h3 class="text-lg font-semibold mt-1"> Password Match Error </h3>
                        <p>Passwords are not matching.</p>
                        <div class="flex space-x-2 items-center justify-end mt-2">
                            <button type="button" class="uk-alert-close bg-gray-400 py-2 px-4 rounded-md font-semibold"> OK, I'll do it.</button>
                        </div>
                        </div>`);
                    }
                } else {
                    $("#usr-input-alert").html(`<div class="bg-whit border-t-4 border-red-600 p-5 shadow-lg relative rounded-md" uk-alert>
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
    // User Form Ends Here
    //</script>