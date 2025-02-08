<?php
session_start();

unset($_SESSION['users']['username']);
session_destroy();

header('location:./client/login/php');
