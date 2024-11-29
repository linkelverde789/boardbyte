<?php

if (isset($_SESSION['tiempo'])) {
    if (time() - $_SESSION['tiempo'] > 60 * 60 * 12) {
        session_unset();
        session_destroy();
        foreach ($_COOKIE as $item => $value) {
            setcookie($item, '', time() - 3600, '/');
        }
        header('Location: /boardbyte/login');
        exit;
    }
}
$_SESSION['tiempo'] = time();