<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../css/style.css">
    <title>Sign Up</title>
    <style>
        *{
            max-height: 100vh !important;
        }
         .error-message {
            color: red;
            font-size: 12px;
        }

        .success-message {
            color: green;
            font-size: 12px;
        }
        .valid {
            border-color: green !important;
        }

        .invalid {
            border-color: red !important;
        }
        input[type="text"],
        input,
        #country {
            background-color: #fff;
            /* White background for better contrast */
            border: 1px solid #ccc;
            /* Light gray border */
            border-radius: 4px;
            /* Rounded corners */

            font-size: 16px;
            /* Adjust font size as needed */
            color: #333;
            /* Dark text color for better readability */
            display: block;
            /* Make it a block-level element for better layout */
            width: 100%;
            /* Make it fill the available width */

            box-sizing: border-box;
            /* Ensure padding and border don't affect width */
        }

        /* Hover effect for the input element */
        #country:hover,
        input:hover {
            border-color: #5856D6;
            /* Change border color to brand color on hover */
            outline: none;
            /* Remove default outline on hover */
        }

        button {
            background-color: #fff;
            /* White background for contrast */
            border: 1px solid #ccc;
            /* Light gray border */
            border-radius: 4px;
            /* Rounded corners */
            padding: 8px 16px;
            /* Add some padding for readability */

            color: #333;
            /* Dark text color for readability */
            cursor: pointer;
            /* Indicate clickable behavior */
            display: inline-block;
            /* Allow text wrapping */

            box-sizing: border-box;
            /* Ensure padding and border don't affect width */
        }

        /* Hover effect for the button */
        button:hover {
            background-color: #5856D6;
            /* Change background color to brand color on hover */
            color: #fff;
            /* Change text color to white for better contrast on hover */
            border-color: #5856D6;
            /* Change border color to brand color on hover (optional) */
        }
        
    </style>
</head>

<body>
    <div class="container">
        <?php
        require_once "../Public/half.php"
        ?>
        <div class="form-container">
            <div class="title"><strong>9arini academy</strong></div>
            <div class="forms">
                <strong>Sign up</strong>
                <form id="signup-form" action="../Home/nothome.php" method="post">
                    <div>
                        <div>
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" placeholder="Enter your name...">
                            <div id="name-message" class="error-message"></div>
                        </div>
                        <div>
                            <label for="pname">Pname</label>
                            <input type="text" id="pname" name="pname" placeholder="Enter your pname...">
                            <div id="pname-message" class="error-message"></div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <label for="phone">Phone</label>
                            <input type="tel" id="phone" name="phone" placeholder="Enter your number...">
                            <div id="phone-message" class="error-message"></div>
                        </div>
                        
                    </div>
                    <div>
                        <div class="email">
                            <label for="e-mail">E-mail</label>
                            <input type="email" id="email" name="email" placeholder="Enter your email address" required>
                            <div id="email-message" class="error-message"></div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" placeholder="Enter your Password" required>
                            <div id="password-message" class="error-message"></div>
                        </div>
                        <div>
                            <label for="re-password">Re-enter Password</label>
                            <input type="password" id="re-password" name="re-password" placeholder="Re-enter your Password" required>
                            <div id="re-password-message" class="error-message"></div>
                        </div>
                    </div>
                    <div>
                        <div class="upper">
                            <label>Are you a:</label>
                            <div class="radio">
                                <div>
                                    <input type="radio" id="student" name="role" value="student">
                                    <label for="student">Student</label>
                                </div>
                                <div>
                                    <input type="radio" id="instructor" name="role" value="instructor">
                                    <label for="instructor">Instructor</label>
                                </div>
                            </div>
                            <div id="role-message" class="error-message"></div>
                        </div>
                    </div>
                    <button type="submit">Submit</button>
                    <p>Already have an account? <strong class="log"><a href="http://localhost/PFA%20V0/PFA%202/App/log_in/">Log in</a></strong></p>
                    
                </form>

            </div>

        </div>
    </div>

    <script src="index.js"></script>
</body>

</html>
<?php

?>