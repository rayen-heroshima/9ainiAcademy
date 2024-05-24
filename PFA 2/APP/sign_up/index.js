var user = {
    firstname: "",
    lastname: "",
    phone: "",
    email: "",
    password: "",
    role: ""
};

function sendDataToPHP(userData) {
    fetch('http://localhost/PFA%20V0/PFA%202/Controller/controllerSignup.php', {
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
        console.log('Response from server:', data);
        if (data=="valide") {
            document.getElementById('signup-form').submit();
        }else if(data=="invalid"){
            var emailInput = document.getElementById('email');
            var emailMessageElement = document.getElementById('email-message');
            validateInput(emailInput, emailMessageElement,false,'this e-mail this aleady taken');
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

// JavaScript for input validation and data storage
document.getElementById('signup-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission initially

    var name = document.getElementById('name');
    var pname = document.getElementById('pname');
    var phone = document.getElementById('phone');
    var email = document.getElementById('email');
    var password = document.getElementById('password');
    var rePassword = document.getElementById('re-password');
    var roleInputs = document.querySelectorAll('input[name="role"]');
    var isValid = true;

    // Validate Name
    if (name.value.trim() !== '') {
        user.firstname = name.value.trim();
        validateInput(name, document.getElementById('name-message'), true, 'Valid name');
    } else {
        validateInput(name, document.getElementById('name-message'), false, 'Name is required');
        isValid = false;
    }

    // Validate Pname
    if (pname.value.trim() !== '') {
        user.lastname = pname.value.trim();
        validateInput(pname, document.getElementById('pname-message'), true, 'Valid pname');
    } else {
        validateInput(pname, document.getElementById('pname-message'), false, 'Pname is required');
        isValid = false;
    }

    // Validate Phone
    if (phone.value.trim() !== '') {
        user.phone = phone.value.trim();
        validateInput(phone, document.getElementById('phone-message'), true, 'Valid phone');
    } else {
        validateInput(phone, document.getElementById('phone-message'), false, 'Phone is required');
        isValid = false;
    }

    // Validate Email
    if (email.validity.valid) {
        user.email = email.value.trim();
        validateInput(email, document.getElementById('email-message'), true, 'Valid email');
    } else {
        validateInput(email, document.getElementById('email-message'), false, 'Invalid email');
        isValid = false;
    }

    // Validate Password
    if (password.value.trim() !== '') {
        user.password = password.value.trim();
        validateInput(password, document.getElementById('password-message'), true, 'Valid password');
    } else {
        validateInput(password, document.getElementById('password-message'), false, 'Password is required');
        isValid = false;
    }

    // Validate Re-entered Password
    if (rePassword.value === password.value && rePassword.value.trim() !== '') {
        validateInput(rePassword, document.getElementById('re-password-message'), true, 'Valid re-entered password');
    } else {
        validateInput(rePassword, document.getElementById('re-password-message'), false, 'Passwords do not match');
        isValid = false;
    }

    // Validate Role
    var roleSelected = false;
    roleInputs.forEach(function(input) {
        if (input.checked) {
            user.role = input.value;
            roleSelected = true;
        }
    });
    if (!roleSelected) {
        document.querySelector('.radio').classList.add('invalid');
        document.getElementById('role-message').innerHTML = `<span class="error-message">Please select a role</span>`;
        isValid = false;
    } else {
        document.querySelector('.radio').classList.remove('invalid');
        document.getElementById('role-message').innerHTML = '';
    }

    // If all inputs are valid, allow form submission
    if (isValid) {
        console.log('User data:', user);
        sendDataToPHP(user);
        
    }
});
