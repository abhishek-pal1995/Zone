<?php

include 'config.php';



?>

<!-- User Starts Ends Here -->

<div id="user-form" class="space-y-3">
    <div id="usr-input-alert">

    </div>
    <div class="grid lg:grid-cols-2 gap-3">
        <div>
            <label class="mb-0"> First Name </label>
            <input type="text" id="usr-fname" name="usr-fname" placeholder="Your Name" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
        </div>
        <div>
            <label class="mb-0"> Last Name </label>
            <input type="text" id="usr-lname" name="usr-lname" placeholder="Last  Name" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
        </div>
    </div>
    <div>
        <label class="mb-0"> Username </label>
        <input type="text" id="usr-uname" name="usr-uname" placeholder="Username" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
    </div>
    <div>
        <label class="mb-0"> Email Address </label>
        <input type="email" id="usr-email" name="usr-email" placeholder="info@example.com" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
    </div>
    <div>
        <label class="mb-0"> Password </label>
        <input type="password" id="usr-pass" name="usr-pass" placeholder="Create New Password" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
    </div>
    <div>
        <label class="mb-0"> Confirm Password </label>
        <input type="password" id="usr-cpass" name="usr-cpass" placeholder="Confirm Your Password" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
    </div>
    <div>
        <label class="mb-0"> College </label>
        <select id="usr-college" name="usr-college" class="selectpicker mt-2" title="Select Your College">
            <?php
            $stmt = $link->prepare("SELECT `college_id`, `name` FROM `zone_colleges`");
            $stmt->execute();

            $result = $stmt->get_result();

            while ($row = $result->fetch_assoc()) {
                echo '<option value="' . $row['college_id'] . '">' . $row['name'] . '</option>';
            }
            $stmt->close();
            ?>
        </select>
    </div>
    <div>
        <label class="mb-0"> Field of Interest </label>
        <select id="usr-foi" class="selectpicker mt-2" multiple data-max-options="6" title="Select Interests">
            <?php
            $stmt = $link->prepare("SELECT * FROM `interest_category`");
            $stmt->execute();

            $result = $stmt->get_result();

            while ($row = $result->fetch_assoc()) {
                echo '<option value="' . $row['id'] . '">' . $row['interest'] . '</option>';
            }
            $stmt->close();
            $link->close();
            ?>
        </select>
    </div>
    <div class="grid lg:grid-cols-2 gap-3">
        <div>
            <label class="mb-0"> Gender </label>
            <select id="usr-sex" name="usr-sex" class="selectpicker mt-2" title="Select Gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>
        <div>
            <label class="mb-0"> Phone </label>
            <input type="number" id="usr-phone" name="usr-phone" placeholder="+91 9876543210" maxlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
        </div>
    </div>
    <div class="checkbox">
        <input type="checkbox" id="usr-chekcbox" name="usr-chekcbox" checked="">
        <label for="usr-chekcbox"><span class="checkbox-icon"></span> I agree to the <a href="pages-terms.html" target="_blank" class="uk-text-bold uk-text-small uk-link-reset"> Terms and Conditions </a>
        </label>
    </div>
    <div>
        <button type="button" id="usr-form-submit" class="bg-blue-600 font-semibold p-2 mt-5 rounded-md text-center text-white w-full">
            Submit</button>
    </div>
</div>

<!-- User form Ends Here -->