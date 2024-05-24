function sendDataToPHP(userData) {
    fetch('http://localhost/PFA%20V0/PFA%202/Controller/controllerAdmin.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({id : userData})
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.text();
    })
    .then(data => {
        console.log(data);
        
    })
    .catch(error => {
        console.error('Error sending data to server:', error);
    });
}
function updateDataToPHP(userData) {
    fetch('http://localhost/PFA%20V0/PFA%202/Controller/controllerAdmin.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({idu:userData})
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.text();
    })
    .then(data => {
        console.log(data)
        const arrayString = data;

// Use regex to extract data
const idPattern = /\[id\] => (\d+)/;
const emailPattern = /\[email\] => ([^\s]+)/;
const firstnamePattern = /\[firstname\] => (\w+)/;
const lastnamePattern = /\[lastname\] => (\w+)/;
const passwordPattern = /\[password\] => (\w+)/;
const rolePattern = /\[role\] => (\w+)/;
const imagePattern = /\[image\] => (http[^ ]+)/;
const phonePattern = /\[phone\] => (\d+)/;
const imgPattern = /\[img\] => (\d+)/;

const idMatches = arrayString.match(idPattern);
const emailMatches = arrayString.match(emailPattern);
const firstnameMatches = arrayString.match(firstnamePattern);
const lastnameMatches = arrayString.match(lastnamePattern);
const passwordMatches = arrayString.match(passwordPattern);
const roleMatches = arrayString.match(rolePattern);
const imageMatches = arrayString.match(imagePattern);
const phoneMatches = arrayString.match(phonePattern);
const imgMatches = arrayString.match(imgPattern);

// Extracted data
const id = idMatches ? idMatches[1] : null;
const email = emailMatches ? emailMatches[1] : null;
const firstname = firstnameMatches ? firstnameMatches[1] : null;
const lastname = lastnameMatches ? lastnameMatches[1] : null;
const password = passwordMatches ? passwordMatches[1] : null;
const role = roleMatches ? roleMatches[1] : null;
const image = imageMatches ? imageMatches[1] : null;
const phone = phoneMatches ? phoneMatches[1] : null;
const img = imgMatches ? imgMatches[1] : null;

// Output extracted data
console.log("ID:", id);
console.log("Email:", email);
console.log("Firstname:", firstname);
console.log("Lastname:", lastname);
console.log("Password:", password);
console.log("Role:", role);
console.log("Image:", image);
console.log("Phone:", phone);
console.log("Img:", img);
document.getElementById("id").value = id
document.getElementById("name").value = firstname
document.getElementById("pname").value = lastname;
document.getElementById("phone").value = phone;
document.getElementById("email").value = email;
document.getElementById("password").value = password;
        
    })
    .catch(error => {
        console.error('Error sending data to server:', error);
    });
}

document.addEventListener("DOMContentLoaded", function() {
    const deleteButtons = document.querySelectorAll(".delete-btn");

    deleteButtons.forEach(function(button) {
        button.addEventListener("click", function() {
            const id = this.getAttribute("data-id");
            console.log(id);

            if (confirm("Are you sure you want to delete this user?")) {
                sendDataToPHP(id);
                location.reload();
            }
        });
    });
})
document.addEventListener("DOMContentLoaded", function() {
    const deleteButtons = document.querySelectorAll(".update-btn");

    deleteButtons.forEach(function(button) {
        button.addEventListener("click", function() {
            const id = this.getAttribute("data-id");
            console.log(id);

            
            updateDataToPHP(id);

                
            
        });
    });
    document.getElementById('save-changes').addEventListener('click', function() {
        
        
        const formData = new FormData(document.getElementById('signup-form'));
        
        // Fetch request
        fetch('http://localhost/PFA%20V0/PFA%202/Controller/controllerAdmin.php', {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.text();
        })
        .then(data => {
            console.log(data); // Handle response from the server
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });
        window.location.reload();
    });
})
