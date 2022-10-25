<?php

header("Location:../Local/Home.html");
unset($_SESSION['suname']);
unset($_SESSION['spass']);
session_abort();
?>