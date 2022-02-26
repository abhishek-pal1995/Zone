<?php

session_start();

session_unset();

session_destroy();

header('location: login');
?>
<!DOCTYPE html>
<html>

<body>
    <div style="padding: 25% 0; text-align: center;">
        <h3>Logging you out...</h3>
        <p>Redireting...</p>
    </div>
</body>

</html>