<?php
session_start();
$_SESSION["role"] == '';
session_destroy();
header("Location: ../../index.php");