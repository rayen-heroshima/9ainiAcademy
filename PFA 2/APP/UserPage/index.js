var user = {
    firstname: "",
    lastname: "",
    phone: "",
    email: "",
    password: "",
    
};

function sendDataToPHP(userData) {
    fetch('http://localhost/PFA%20V0/PFA%202/Controller/controllerProfile.php', {
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
        if (data=="invalid") {
            var emailInput = document.getElementById('email');
            var emailMessageElement = document.getElementById('email-message');
            validateInput(emailInput, emailMessageElement,false,'this e-mail this aleady taken');
            
            
        }else if(data =="valid"){
            document.getElementById('signup-form').submit();
            
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

    
 

    
    if (isValid) {
        console.log('User data:', user);
        sendDataToPHP(user);
        
    }
});
document.getElementById('scroll-next').addEventListener('click', function() {
    scrollSection(1);
  });

  document.getElementById('scroll-prev').addEventListener('click', function() {
    scrollSection(-1);
  });

  function scrollSection(direction) {
    var container = document.querySelector('.enrollment');
    var currentScroll = container.scrollLeft;
    var sections = document.querySelectorAll('.section');
    var sectionWidth = 690; // Width of each section in pixels

    // Find the next or previous section
    var targetScroll = currentScroll + direction * sectionWidth;

    // Ensure the target scroll position is within bounds
    targetScroll = Math.max(0, Math.min(targetScroll, container.scrollWidth - container.clientWidth));

    container.scroll({
      left: targetScroll,
      behavior: 'smooth'
    });
  }
  document.querySelectorAll('.card4').forEach(function(button) {
    
    button.addEventListener('click', async function(event) {
        
        title = this.closest('.card4').querySelector('.title').textContent;
        console.log(title);

        function saveInputInURL(title) {
            // Get the input value
            

            // Encode the input value to ensure special characters are handled properly
            var encodedValue = encodeURIComponent(title);
            console.log(title)

            // Construct the new URL with the input value as a parameter
            var newURL = 'http://localhost/PFA%20V0/PFA%202/App/ShowCase/showcase.php' + '?input=' + encodedValue;

            // Redirect to the new URL
            window.location.href = newURL;
        }
        saveInputInURL(title);

           



       
    });
});