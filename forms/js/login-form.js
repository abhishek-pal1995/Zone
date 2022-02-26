// <script>
    // For User Form

    function frmChange(frmName) {

        if (frmName == 'usr') {
            frmName = 'User';
            document.getElementById("uname").innerHTML = frmName + " Username/Email Address ";
        }
        if (frmName == 'clg') {
            frmName = 'College';
            document.getElementById("uname").innerHTML = frmName + " Username/Email Address ";
        }
        if (frmName == 'clb') {
            frmName = 'Club';
            document.getElementById("uname").innerHTML = frmName + " Username/Email Address ";
        }
        if (frmName == 'sty') {
            frmName = 'Society';
            document.getElementById("uname").innerHTML = frmName + " Username/Email Address ";
        }
    }


    $(document).ready(function() {
        $("#login-form-submit").click(function() {
            var a = $("#login").val();
            var b = $("#passcode").val();
            var c = $("#frm-value").val();

            if (a == "" || b == "" || c == "") {
                $("#lgn-input-alert").html(`<div class="bg-whit border-t-4 border-red-600 p-5 shadow-lg relative rounded-md" uk-alert>
                <h3 class="text-lg font-semibold mt-1"> Input field Error </h3>
                <p>Please fill All the Required fields carefully.</p>
                <div class="flex space-x-2 items-center justify-end mt-2">
                <button type="button" class="uk-alert-close bg-gray-400 py-2 px-4 rounded-md font-semibold"> OK, I'll do it.</button>
                </div>
                </div>`);
            } else {
                $("#form-picker").css("display", "none");
                $("#formValue").val(c);

                if (c == 'usr') {
                    profile = 'user';
                } else if (c == 'clg') {
                    profile = 'college';
                } else if (c == 'clb') {
                    profile = 'club';
                } else if (c == 'sty') {
                    profile = 'society';
                }

                $.ajax({
                    url: "handlers/login-handle.php",
                    type: "POST",
                    data: $("#login-form").serialize(),
                    beforeSend: function() {
                        $("#login-form-submit").html("Processing...");
                    },
                    success: function(data) {
                        $("#login-form").trigger("reset");
                        if (data == "Account Login Successfull") {
                            $("#lgn-input-alert").html(`<div class="bg-whit border-t-4 border-green-600 p-5 shadow-lg relative rounded-md" uk-alert>
                            <h3 class="text-lg font-semibold mt-1"> Logged in successfully. </h3>
                            <p>Account login successfull, redirecting to the Platform</p>
                            <div class="flex space-x-2 items-center justify-end mt-2">
                            <button type="button" class="uk-alert-close bg-green-400 text-green-600 py-2 px-4 rounded-md font-semibold"> Got it</button>
                            </div>
                            </div>`);
                            $("#login-form-submit").html(data);
                            setTimeout(function() {
                                $("#login-form-submit").html("Redirecting...");
                                window.location.href = "profile/" + profile;
                            }, 1500);
                        } else if (data == "login") {
                            $("#login-form-submit").html('<a href="login.php">Refresh</a>');
                            $("#lgn-input-alert").html(`<div class="bg-whit border-t-4 border-red-600 p-5 shadow-lg relative rounded-md" uk-alert>
                            <h3 class="text-lg font-semibold mt-1"> Invalid Login details.</h3>
                            <p>Account not found for the given details.</p>
                            <div class="flex space-x-2 items-center justify-end mt-2">
                            <button type="button" class="uk-alert-close bg-gray-400 py-2 px-4 rounded-md font-semibold"> OK, I'll do it.</button>
                            </div>
                            </div>`);
                        } else if (data == "pass") {
                            $("#login-form-submit").html('<a href="login.php">Refresh</a>');
                            $("#lgn-input-alert").html(`<div class="bg-whit border-t-4 border-red-600 p-5 shadow-lg relative rounded-md" uk-alert>
                            <h3 class="text-lg font-semibold mt-1"> Password is incorrect. </h3>
                            <p>Passwords is not correct.</p>
                            <div class="flex space-x-2 items-center justify-end mt-2">
                            <button type="button" class="uk-alert-close bg-gray-400 py-2 px-4 rounded-md font-semibold"> OK, I'll do it.</button>
                            </div>
                            </div>`);
                        } else {
                            $("#login-form-submit").html('<a href="login.php">Try Again</a>');
                            $("#lgn-input-alert").html(`<div class="bg-whit border-t-4 border-red-600 p-5 shadow-lg relative rounded-md" uk-alert>
                            <h3 class="text-lg font-semibold mt-1"> Error Occurred. </h3>
                            <p>` + data + `</p>
                            <div class="flex space-x-2 items-center justify-end mt-2">
                            <button type="button" class="uk-alert-close bg-gray-400 py-2 px-4 rounded-md font-semibold"> OK, I'll do it.</button>
                            </div>
                            </div>`);
                        }
                    }
                });
            }
        });
    });
    // User Form Ends Here
    //</script>