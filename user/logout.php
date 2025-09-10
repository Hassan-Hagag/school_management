<?php
session_start();
// لحذف السيشن موجود فى الموقع
session_unset();
session_destroy();

header('location:\school_managment\home.php');
exit;