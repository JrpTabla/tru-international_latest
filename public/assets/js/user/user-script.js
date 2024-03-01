document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission
    
    // Get the form data
    const formData = new FormData(this);

    // Send an AJAX request to the server
    fetch('/login', {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
    })
    .then(response => response.json())
    .then(data => {

        /* console.log(data); */
        if (data.success) {
            // Redirect to intended page on successful login
            window.location.href = data.redirect;
        } else {
            // Handle login failure, e.g., display an error message
            alert('Login failed. Please check your credentials.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
});
