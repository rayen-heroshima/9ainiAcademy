var title ;
function sendDataToPHP(userData) {
    fetch('http://localhost/PFA%20V0/PFA%202/Controller/controllerShowCase.php', {
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
        
            saveInputInURL(userData.trim());

            
        
        
    })
    .catch(error => {
        console.error('Error sending data to server:', error);
    });
}
function saveInputInURL(title) {
           
            var encodedValue = encodeURIComponent(title);
            var newURL = 'http://localhost/PFA%20V0/PFA%202/APP/course%20Display/display.php' + '?input=' + encodedValue;
            window.location.href = newURL;
        }
 var btn =document.getElementById("btn");       
btn.addEventListener("click",function () {
    title =document.getElementById("title").textContent;
    console.log(title);
    if(btn.textContent=="enroll"){
        sendDataToPHP(title);
        

    }else{
        saveInputInURL(title);

    }
    
    
    
})