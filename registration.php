<?php
    $title = "registration";
    include_once 'header.php';

?>
<!-- Registration Form starts -->

<section class="user">
    <div class="user_options-container">
        <div class="user_options-text">
            <!-- Unregistred user Text -->
            <div class="user_options-unregistered">
                <h2 class="user_unregistered-title">Hello, Friend!</h2>
                <p class="user_unregistered-text">Don't have an account yet create now</p>
                <button class="user_unregistered-signup" id="signup-button">Sign up</button>
            </div>
            <!-- Registered user text-->
            <div class="user_options-registered">
                <h2 class="user_registered-title">Welcome Back!</h2>
                <p class="user_registered-text">To keep connected with us please login with your personal info</p>
                <button class="user_registered-login" id="login-button">Login now</button>
            </div>
        </div>
        <!--Login Form-->
        <div class="user_options-forms" id="user_options-forms">
            <div class="user_forms-login">
                <h2 class="forms_title">Login now</h2>
                <form class="forms_form" action="include/login.inc.php" method = "post" name="login-form">
                    <div class="forms_field">
                        <input id="login-email" type="text" name = "email" placeholder="Email" >
                        
                    </div>
                    <div class="forms_field">
                        <input id="login-password" type="password" name = "password" placeholder="Password" >
                        <?php 
                            if (isset($_GET["error"])) {
                                if ($_GET["error"] == "emptyinput") {
                                    echo "<div class = 'login-error'><h1>Fill in all fields!</h1></div>";
                                }
                                elseif ($_GET["error"] == "wronginputs") {
                                    echo "<div class = 'login-error'><h1>Wrong email or password!</h1></div>";
                                }
                            }
                        ?>
                    </div>
                    <div class="forms_buttons">
                        <button type="button" class="forms_buttons-forgot">Forgot password?</button>
                        <input  type="submit" name = "submit" value="Log In" class="forms_buttons-action">
                    </div>
                </form>
            </div>
            <!-- SignUp Form-->
            <div class="user_forms-signup">
                <h2 class="forms_title">Sign Up</h2>
                <form class="forms_form" action = "include/signup.inc.php" method = "post" name="signup-form">
                    <div class="forms_field">
                        <input id="fullName" type="text" name = "fullName" placeholder="Full name" >
                        
                    </div>
                    <div class="forms_field">
                        <input id="signup-email" type="text" name = "email" placeholder="Email" >
                        
                    </div>
                    <div class="forms_field">
                        <input id="signup-password" type="password" name = "password" placeholder="Password" >
                        
                    </div>
                    <div class="forms_field">
                        <input id="signup-confirm-password" type="password" name = "password_2" placeholder="Confirm Password" >
                        <?php 
                            if (isset($_GET["error"])) {
                                if ($_GET["error"] == "emptyinput") {
                                    echo "<div class = 'signup-error'><h1>Fill in all fields!</h1></div>";
                                }
                                elseif ($_GET["error"] == "invalidemail") {
                                    echo "<div class = 'signup-error'><h1>Invalid email!</h1></div>";
                                }
                                elseif ($_GET["error"] == "passworddontmatch") {
                                    echo "<div class = 'signup-error'><h1>Password doesn't match!</h1></div>";
                                }
                                elseif ($_GET["error"] == "stmtfailed") {
                                    echo "<div class = 'signup-error'><h1>Something went wrong try again!</h1></div>";
                                }
                                elseif ($_GET["error"] == "emailUsed") {
                                    echo "<div class = 'signup-error'><h1>Email already used!</h1></div>";
                                }
                                elseif ($_GET["error"] == "none") {
                                    echo "<div><h1>you have signed up!</h1></div>";
                                }
                            }
                        ?>
                    </div>
                    <div class="forms_buttons">
                        <input id="signup-submit" type="submit" name = "submit" value="Sign up" class="forms_buttons-action">
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</section>


<!-- Registration Form ends -->
<?php 

    include_once 'footer.php';

?>