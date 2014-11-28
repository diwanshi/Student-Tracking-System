<?php
session_start();
session_destroy();
header("Cache-Control", "no-cache, no-store, must-revalidate");
header('location:index.html');
?>