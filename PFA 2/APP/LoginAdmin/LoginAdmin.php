<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .error-message {
            color: red;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-floating input[type="email"].error,
        .form-floating input[type="password"].error {
            border-color: red;
        }
    </style>
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">

<main class="form-signin w-50 m-auto">
    <div id="errorContainer" class="error-message"></div> <!-- Container for error message -->
    <form id="loginForm">
       
        <h1 class="h3 mb-3 fw-normal">Log in  to the admin interface</h1>

        <div class="form-floating">
            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <div class="form-check text-start my-3">
            <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Remember me
            </label>
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">Log in</button>
        <p class="mt-5 mb-3 text-body-secondary">© 2023–2024</p>
    </form>
</main>


<script>
    document.getElementById("loginForm").addEventListener("submit", function(event) {
        event.preventDefault(); 

        var formData = new FormData(this);
        fetch("http://localhost/PFA%20V0/PFA%202/Controller/controllerLogadmin.php", {
            method: "POST",
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                throw new Error("Network response was not ok");
            }
            return response.text();
        })
        .then(data => {
            if(data.trim()==="done"){
                window.location.href = "http://localhost/PFA%20V0/PFA%202/APP/admin/tables-general.php";
            }else{
                // Display error message
                var errorContainer = document.getElementById("errorContainer");
                errorContainer.textContent = "You are not registered in the admin list";
            }
        })
        .catch(error => {
            console.error("Error:", error);
        });
    });
</script>
</body>
</html>
