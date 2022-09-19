<?php

session_start();
echo "Logging you out. Please wait...";
unset($_SESSION["loggedin"]);
unset($_SESSION["username"]);
unset($_SESSION["rid"]);

// session_unset();
// session_destroy();

header("location:index.html");
?>