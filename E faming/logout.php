<?php
    // Destroy session
    if(session_status()) {
        $_SESSION['active'] = 0;
        session_unset();
        $_SESSION = array();
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
        session_destroy();

        header("Location: login.php");
    }
?>