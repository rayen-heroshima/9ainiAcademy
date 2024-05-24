function toggleCertificationButton() {
    // Select all checkboxes
    var checkboxes = document.querySelectorAll('.note input[type="checkbox"]');
    // Select certification button
    var certifBtn = document.getElementById('certifBtn');

    // Check if all checkboxes are checked
    var allChecked = Array.from(checkboxes).every(function(checkbox) {
        return checkbox.checked;
    });

    // Toggle disabled class on certification button based on checkbox status
    if (allChecked) {
        certifBtn.classList.remove('disabled');
    } else {
        certifBtn.classList.add('disabled');
    }
}

// Add event listener to each checkbox
document.querySelectorAll('.note input[type="checkbox"]').forEach(function(checkbox) {
    checkbox.addEventListener('change', toggleCertificationButton);
});

// Call toggleCertificationButton initially to set button state
toggleCertificationButton();
function sendDataToPHP(userData) {
    fetch('http://localhost/PFA%20V0/PFA%202/Controller/controllerCertification.php', {
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
        
    })
    .catch(error => {
        console.error('Error sending data to server:', error);
    });
}
document.getElementById("certifBtn").addEventListener("click",function () 
{
    window.open("http://localhost/PFA%20V0/PFA%202/App/certification/certification.php");
    
    
})