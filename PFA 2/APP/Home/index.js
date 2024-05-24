let title ;
document.addEventListener("DOMContentLoaded", async function() {
    var bookmarks = document.querySelectorAll('.fa-bookmark');
    

    bookmarks.forEach(function(bookmark) {
        bookmark.addEventListener('click', async function() {
            title = this.closest('.card6').querySelector('.card-body h2').textContent;
            console.log(title);

            try {
                const response = await fetch('http://localhost/PFA%20V0/PFA%202/Controller/controller3.php', {
                    method: 'POST',
                    body: JSON.stringify(title)
                });

                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }

                
                const data = await response.text();
                
                console.log(data);
            } catch (error) {
              
                console.error('There was a problem with the fetch operation:', error);
            }
        });
    });
});
// Use a loop to attach event listeners to each button
document.querySelectorAll('.btn').forEach(function(button) {
    
    button.addEventListener('click', async function(event) {
        // Prevent the default behavior of the anchor tag
        event.preventDefault();
        
        // Extract the title from the card
        title = this.closest('.card6').querySelector('.card-title').textContent;
        console.log(title);

        function saveInputInURL(title) {

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





