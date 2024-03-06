@extends('header.auth')

@section('content')


<link rel="stylesheet" href="{{ asset ('assets/css/auth/register.css') }}">


<div class="container-fluid div-content">
    <div class="row my-auto">
        <div class="col-12 col-md-6 d-flex div-first-content">
            <div class="m-auto">
                <img src="{{ asset ('assets/images/auth/register/picture.png') }}" alt="">
                <div class="div-title my-3">
                    <span>Sign Up & Protect</span> your trading 
                </div>
                <div class="div-description my-3">
                    Follow successful traders, share your insights and experiences, and receive advice on CommuniTrade, your dedicated channel for collaborative growth in the trading community.
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6  d-flex div-second-content">
            <form id="registrationForm" class="m-auto form-div">
            @csrf
                <div class="input-form my-3">
                    <label for="first_name" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" aria-describedby="emailHelp" required autofocus placeholder="First Name">
                </div>

                <div class="input-form my-3">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" aria-describedby="emailHelp" required autofocus placeholder="Last Name">
                </div>

                <div class="input-form my-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control email-input" id="email" name="email" aria-describedby="emailHelp" required autofocus placeholder="email">
                </div>

                <div class="input-form my-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required placeholder="password">
                </div>

                <div class="input-form row my-3">

                    <div class="col-5">
                        <label for="date_of_birth" class="form-label">Date of birth</label>
                        <input type="date"  class="form-control" id="date_of_birth" name="date_of_birth" required>
                    </div>

                    <div class="col-7">
                        <label for="country" class="form-label">Country</label>
                        <div class="d-flex gap-2">
                            <img id="flag-img" src="" alt="" height="24" class="my-auto">
                            <select class="form-select form-control" id="country" name="country" required>
                                <option value="" selected>Select Country</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="input-form my-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="number" class="form-control" id="phone" name="phone" aria-describedby="" required autofocus>
                </div>

                <div class="terms my-3">
                By signing up, you agree to our <a href="">Privacy Policy</a> and <a href="">Terms of Service</a>
                </div>


                <div class="input-form-btn my-3">
                    <button type="submit" class="btn btn-login">Be a TRU member</button>
                </div>
            </form>
        </div>
        <div class="div-description-2 my-3 mx-auto">
            Follow successful traders, share your insights and experiences, and receive advice on CommuniTrade, your dedicated channel for collaborative growth in the trading community.
        </div>
    </div>
</div>

<script src="{{ asset ('assets/js/country.js') }}"></script>

<script>

    document.getElementById('registrationForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

        // Get the date of birth input value
        const dobInput = document.getElementById('date_of_birth').value;
        // Calculate the age
        const today = new Date();
        const birthDate = new Date(dobInput);
        let age = today.getFullYear() - birthDate.getFullYear();
        const monthDiff = today.getMonth() - birthDate.getMonth();
        if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
            age--;
        }

        // Check if age is less than 18
        if (age < 18) {
            // Display error message and apply red border
            alert('Registration Failed. Age Must be 18 Years Old Above.');
            document.getElementById('date_of_birth').classList.add('error-border'); // Apply CSS class for red border
            document.getElementById('date_of_birth').focus(); // Focus on the date of birth input
            return; // Stop further execution
        }
        
        // Get the form data
        const formData = new FormData(this);

        // Send an AJAX request to the server
        fetch('/register', {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        })
        .then(response => response.json())
        .then(data => {


            document.getElementById('date_of_birth').classList.remove('error-border'); // Apply CSS class for red border
            document.getElementById('email').classList.remove('error-border'); // Apply CSS class for red border
            document.getElementById('phone').classList.remove('error-border'); // Apply CSS class for red border

            console.log(data);
            if (data == 0) {

                // Clear the flag-img src
                document.getElementById('flag-img').src = '';
                // Clear all form inputs
                document.getElementById('registrationForm').reset();
                // Redirect to intended page on successful login
                alert("Successfully Registered");
            } else if(data == 1) {
                // Handle login failure, e.g., display an error message
                alert('Registration Failed. Email Address Already Exist.');
                document.getElementById('email').classList.add('error-border'); // Apply CSS class for red border
                document.getElementById('email').focus(); // Focus on the email input

            } else if(data == 2) {
                // Handle registration failure due to email already existing
                alert('Registration Failed. Phone Number Already Exists.');
                document.getElementById('phone').classList.add('error-border'); // Apply CSS class for red border
                document.getElementById('phone').focus(); // Focus on the email input
            } else {
                alert('Registration Failed. Please Re-try Later.')
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });


</script>
@endsection