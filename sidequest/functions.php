<?php

    function get($id, $type) {
        
        switch($type) {
            case "SESSION":
                if(!isset($_SESSION[$id]) || empty($_SESSION[$id])) {
                    return false;
                } else {
                    return strip_tags($_SESSION[$id]);
                }
                break;
            case "POST":
                if(!isset($_POST[$id]) || empty($_POST[$id])) {
                    return false;
                } else {
                    return strip_tags($_POST[$id]);
                }
                break;
            case "REQUEST":
                if(!isset($_REQUEST[$id]) || empty($_REQUEST[$id])) {
                    return false;
                } else {
                    return strip_tags($_REQUEST[$id]);
                }
                break;
        }
    }
    
    include("core/functions/login.php");

?>