<?php

    $register = get("register", "POST");
    $rusername = get("rusername", "POST");
    $rnickname = get("rnickname", "POST");
    $rpassword = get("rpassword", "POST");
    $repeatpassword = get("repeat_password", "POST");
    $email = get("email", "POST");

    if($register) {
        $checkuser = get_user($rusername);
        if ($checkuser) {
            echo "<p class='alert'>Username already exists!</p>";
        }

        if($rusername) {

            if($rnickname) {

                if ($rpassword) {

                    if($rpassword == $repeatpassword) {

                        if(strlen($rusername) > 10) {
                            echo "<p class='alert'>Username too long!</p>";
                        }
                        else if (strlen($rnickname) != 4) {
                            echo "<p class='alert'>Nickname must be 4 characters!</p>";
                        }
                        else if (strlen($rpassword) > 25 || strlen($rpassword) < 6) {
                            echo "<p class='alert'>Password must be between 6 and 25 characters!</p>";
                        }
                        else {

                            register_user();

                            echo "<div class='login-suc' style='margin:-30px 0px 0px -30px;'><div>";
                            echo "<p>You have been registered! <a href='index.php'>Go here</a> to login.</p>";
                            echo "</div></div>";

                        }

                    }
                    else echo "<p class='alert'>Your passwords do not match!</p>";
                }
                else echo "<p class='alert'>Enter a password!</p>";
            }
            else echo "<p class='alert'>Enter a nickname!</p>";
        }
        else echo "<p class='alert'>Enter a username!</p>";

    }

?>

    <div class="login-prompt">
        <fieldset>
            <legend>Resistration Form</legend>
            <form method="post" action="index.php">
                <table  class="form">
                    <tr>
                        <td style="width:200px;"><label>Username: *</label></td>
                        <td><input type="text" name="rusername" /></td>
                    </tr>
                    <tr>
                        <td style="width:200px;"><label>Nickname: **</label></td>
                        <td><input type="text" name="rnickname" /></td>

                    </tr>
                    <tr>
                        <td><label>Email:</label></td>
                        <td><input type="text" name="email" /></td>
                    </tr>
                    <tr>
                        <td><label>Password: ***</label></td>
                        <td><input type="password" name="rpassword" /></td>
                    </tr>
                    <tr>
                        <td><label>Repeat Password:</label></td>
                        <td><input type="password" name="repeat_password" /></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="register" value="Register" />
                    </tr>
                </table>
            </form>
        </fieldset>
    </div>
	<p>* Your username must be less than 10 characters.</p>
	<p>** Your nickname will be used as the main name for gameplay. It must be 4 characters.</p>
	<p>*** Your password must be between 6 and 25 characters.</p>