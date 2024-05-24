// Function to validate input and display message
var user ={
    email:"",
    password:""
}
function sendDataToPHP(userData) {
    fetch('http://localhost/PFA%20V0/PFA%202/Controller/controllerLogin.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(userData)
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.text();
    })
    .then(data => {
        console.log(data);
        if (data==="true") {
            document.getElementById('login-form').submit();
        }else if(data==="false"){
            var emailInput = document.getElementById('email');
            var passwordInput = document.getElementById('password');
            var emailMessageElement = document.getElementById('email-message');
            var isValidEmail = emailInput.validity.valid;
            validateInput(emailInput, emailMessageElement,false,'email or password is incorrect');
            validateInput(passwordInput, document.getElementById('password-message'), false, 'email or password is incorrected');
        }
        
    })
    .catch(error => {
        console.error('Error sending data to server:', error);
    });
}
function validateInput(inputElement, messageElement, isValid, message) {
    if (isValid) {
        inputElement.classList.remove('invalid');
        inputElement.classList.add('valid');
        messageElement.innerHTML = `<span class="success-message">${message}</span>`;
    } else {
        inputElement.classList.remove('valid');
        inputElement.classList.add('invalid');
        messageElement.innerHTML = `<span class="error-message">${message}</span>`;
    }
}
function validateInput(inputElement, messageElement, isValid, message) {
    if (isValid) {
        inputElement.classList.remove('invalid');
        inputElement.classList.add('valid');
    } else {
        inputElement.classList.remove('valid');
        inputElement.classList.add('invalid');
    }
    messageElement.textContent = message;
}

// Function to handle form submission
document.getElementById('login-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission initially

    // Get input elements
    var emailInput = document.getElementById('email');
    var passwordInput = document.getElementById('password');

    // Validate email
    var isValidEmail = emailInput.validity.valid;
    validateInput(emailInput, document.getElementById('email-message'), isValidEmail, isValidEmail ? '' : 'Invalid email');

    // Validate password
    var isValidPassword = passwordInput.value.trim() !== '';
    validateInput(passwordInput, document.getElementById('password-message'), isValidPassword, isValidPassword ? '' : 'Password is required');

    // If both inputs are valid, allow form submission
    if (isValidEmail && isValidPassword) {
        var password = passwordInput.value; 
    var email = emailInput.value; 

    
    user.password = password;
    user.email = email;
        sendDataToPHP(user);
        
    }
});
