<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/style.css">

    <title>Log In</title>
    <style>
         .error-message {
            color: red !important;
            font-size: 12px !important;
        }

        .success-message {
            color: green !important;
            font-size: 12px !important;
        }
        .valid {
            border-color: green !important;
        }

        .invalid {
            border-color: red !important;
        }
        .container {
            height: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-container {
            background-color: #f2f2f2;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            height: 100vh;
            width: 50%;

        }



        .form {
            display: flex;
            justify-content: center;
            align-items: center;


        }

        .password {
            width: 85%;
        }

        .pass {
            width: 100%;
        }

        button {
            margin: 0 30%;
        }

        p {
            text-align: center;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            background-color: #fff;
            /* White background for better contrast */
            border: 1px solid #ccc;
            /* Light gray border */
            border-radius: 4px;
            /* Rounded corners */
            padding: 8px 12px;
            /* Add some padding for readability */
            font-size: 16px;
            /* Adjust font size as needed */
            color: #333;
            /* Dark text color for better readability */
            display: block;
            /* Make it a block-level element for better layout */
            width: 100%;
            /* Make it fill the available width */
            margin-bottom: 10px;
            /* Add some margin for spacing */
            box-sizing: border-box;
            /* Ensure padding and border don't affect width */
        }

        /* Hover effect for the input element */
        input[type="text"]:hover,
        input[type="email"]:hover,
        input[type="password"]:hover {
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
            font-size: 16px;
            /* Adjust font size as needed */
            color: #333;
            /* Dark text color for readability */
            cursor: pointer;
            /* Indicate clickable behavior */
            display: inline-block;
            /* Allow text wrapping */
            margin-bottom: 10px;
            /* Add some margin for spacing */
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
                <strong>Log in</strong>
                <form id="login-form" action="../Home/nothome.php" method="post">
                    <div>
                        <div class="email">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="email" placeholder="Enter your email address">
                            <div id="email-message" class="error-message"></div>
                        </div>
                    </div>
                    <div>
                        <div class="password">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" placeholder="Enter your Password">
                            <div id="password-message" class="error-message"></div>
                        </div>
                    </div>
                    <button >Submit</button>
                    <p>You don't have an account? <strong class="log"><a href="http://localhost/PFA%20V0/PFA%202/App/sign_up/">Sign up</a></strong></p>
                </form>

        </div>
    </div> 
    <script src="index.js"></script>

</html>