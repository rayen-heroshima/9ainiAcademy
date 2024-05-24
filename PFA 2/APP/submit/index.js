class Section {
    constructor() {
        this.data = {
            title: 'name',
            videoUrl: 'url',
            pdfUrl: 'url'
        };
    }
}
var data = {
    title: 'name',
    videoUrl: 'url',
    pdfUrl: 'url'
};
var arr=[];
document.getElementById('courseStructure').addEventListener('click', function() {
    loadContent('content2.php');
});

document.getElementById('courseLandingPage').addEventListener('click', function() {
    loadContent('content.php');
});

function loadContent(url) {
    
    
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            
            
            document.getElementById("core").innerHTML = this.responseText;

           








            //hehti partie responsable 3le download vids
            var uploadButton = document.querySelector('#buttonUpload'); 
            uploadButton.addEventListener('click', (event) => {
                var uploadModal = document.getElementById('uploadModal');
                var modal = bootstrap.Modal.getInstance(uploadModal);
                modal.hide();
                var formData = new FormData(document.getElementById('childForm')); 
     fetch('http://localhost/PFA%20V0/PFA%202/Controller/controller2.php', {
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
        // Handle the response data
        console.log(data);
    })
    .catch(error => {
        // Handle errors
        console.error('There was a problem with the fetch operation:', error);
    });
            });









            //hethi partie responsable 3al pdf
            var uploadButton2 = document.getElementById('buttonUpload2');
            uploadButton2.addEventListener('click', (event) => {
                event.preventDefault();
                var uploadModal = document.getElementById('curriculumItemModal');
                var modal = bootstrap.Modal.getInstance(uploadModal);
                modal.hide();
                var formData = new FormData(document.getElementById('childform2')); 
                fetch('http://localhost/PFA%20V0/PFA%202/Controller/controller2.php', {
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
                   // Handle the response data
                   console.log(data);
               })
               .catch(error => {
                   console.error('There was a problem with the fetch operation:', error);
               });
                
                
            });
            

            






            //hethi partie responsable 3a submission
            document.getElementById('submitich').addEventListener('click', function() {
                const inputClones = document.querySelectorAll('.container2');
                var inputClone=inputClones[inputClones.length - 1]
                
                    var section = new Section();
                    console.log(inputClone);
                    const inputElement = inputClone.querySelector('.cours-title');
                    console.log(section);
                    const filepdf = document.getElementById('curriculumItemFile');
                    var  namepdf = filepdf.files[0].name;
                    const fileInput = document.getElementById('videoFile');
                    var file =fileInput.files[0].name;
                    section.data.title = inputElement.value;
                    section.data.videoUrl=file;
                    section.data.pdfUrl=namepdf;
                    console.log(section);
                    arr.push(section);
                    console.log(arr);
                
                fetch('http://localhost/PFA%20V0/PFA%202/Controller/controller2.php', {
                    method: 'POST',
                    body: JSON.stringify(arr)
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    console.log("the data is send it");
                    return response.text();
                })
                .then(data => {
                    // Handle the response data
                    console.log(data);
                })
                .catch(error => {
                    // Handle errors
                    console.error('There was a problem with the fetch operation:', error);
                });
                window.location.reload();
            });
            
            document.getElementById("addSectionButton").addEventListener("click", function() {
                const inputClones = document.querySelectorAll('.container2');
                var inputClone=inputClones[inputClones.length - 1]
                
                    var section = new Section();
                    console.log(inputClone);
                    const inputElement = inputClone.querySelector('.cours-title');
                    console.log(section);
                    const filepdf = document.getElementById('curriculumItemFile');
                    var  namepdf = filepdf.files[0].name;
                    const fileInput = document.getElementById('videoFile');
                    var file =fileInput.files[0].name;
                    section.data.title = inputElement.value;
                    section.data.videoUrl=file;
                    section.data.pdfUrl=namepdf;
                    console.log(section);
                    arr.push(section);
                    console.log(arr);
                const originalContainer = document.querySelector('.container2');
                var clonedContainer = originalContainer.cloneNode(true);
            
                
                const inputElements = clonedContainer.querySelectorAll('input');
                inputElements.forEach(function(input) {
                    input.value = '';
                });
            
                const deleteButton = document.createElement('button');
                deleteButton.textContent = 'x';
                deleteButton.classList.add('btn', 'btn-danger');
                deleteButton.onclick = function() {
                    this.parentNode.remove();
                };
                clonedContainer.appendChild(deleteButton);
            
                const addButton = document.querySelector('.container2');
                addButton.after(clonedContainer);
                inputClone.parentNode.appendChild(clonedContainer);
                
                
                  
            });
            
           
            
        }
        

    };
    xhttp.open("GET", url, true);
    xhttp.send();
}

window.onload = function() {
    loadContent('content2.php');
};
