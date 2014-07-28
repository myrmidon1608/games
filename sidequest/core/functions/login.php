<?php

    function get_user($user) {
        global $dbh;
        
        $sql = $dbh -> prepare("SELECT user_id
                                FROM users
                                WHERE username = :user");
        
        $sql -> bindParam(":user", $user, PDO::PARAM_STR);
        $sql -> execute();
        $result = $sql -> fetch(PDO::FETCH_ASSOC);

        return $result;
    }
    
    function get_user_info($id) {
        global $dbh;
        
        $sql = $dbh -> prepare("SELECT *
                                FROM users
                                WHERE user_id = :id");
        
        $sql -> bindParam(":id", $id, PDO::PARAM_STR);
        $sql -> execute();
        $result = $sql -> fetch(PDO::FETCH_ASSOC);

        return $result;
    }
    
    function register_user() {
        $rpassword = md5(get("rpassword", "POST"));
        
        global $dbh;
        
        $sql = $dbh -> prepare("INSERT INTO users (
                                    user_id, username, nickname, userpassword, useremail, date
                                ) VALUES (
                                    null, ':user', ':nick', ':pass', ':email',  NOW()
                                )");
        
        $sql -> bindParam(":user", get("rusername", "POST"), PDO::PARAM_STR);
        $sql -> bindParam(":nick", get("rnickname", "POST"), PDO::PARAM_STR);
        $sql -> bindParam(":pass", $rpassword, PDO::PARAM_STR);
        $sql -> bindParam(":email", get("email", "POST"), PDO::PARAM_STR);
        
        $sql -> execute();
    }

?>