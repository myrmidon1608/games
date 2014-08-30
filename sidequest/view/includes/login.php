<?php

    $username = get("username", "POST");
    $password = get("password", "POST");
    $email = get("email", "POST");

    if ($username && $password) {

        $getuser = get_user($username);
        $user_id = $getuser["user_id"];
        
        if ($user_id > 0) {
            $_SESSION["user_id"] = $user_id;
            $user_info = get_user_info($user_id);
            
            $dbusername = $user_info["username"];
            $dbnickname = $user_info["nickname"];
            $dbpassword = $user_info["userpassword"];

            if ($username == $dbusername && md5($password) == $dbpassword) {
                $_SESSION["username"] = $username;
                $_SESSION["nickname"] = $dbnickname;

                echo "<meta http-equiv='refresh' content='0;URL=index.php'>"; 

            }
            else echo "<p class='alert'>Incorrect password!</p>";
        }
        else echo "<p class='alert'>That username doesn't exist!</p>";
    }
    else echo "<p class='alert'>Enter a username and password!</p>";

?>

    <div class="login-prompt">
        <fieldset>
            <legend>Please Login to Access Applications:</legend>
            <form method="post" action="index.php">
                <table class="form">
                    <tr>
                        <td style="width:200px;"><label>Username:</label></td>
                        <td><input type="text" name="username" /></td>
                    </tr>
                    <tr>
                        <td><label>Password:</label></td>
                        <td><input type="password" name="password" /></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="login" value="Login" />
                    </tr>
                </table>
            </form>
        </fieldset>
    </div>