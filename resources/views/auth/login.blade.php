@extends('header.auth')

@section('content')

<link rel="stylesheet" href="{{ asset ('assets/css/auth/login.css') }}">

<div class="container-fluid div-content">
    <div class="row my-auto">
        <div class="col-6 d-flex div-first-content">
            <div class="m-auto">
                <img src="{{ asset ('assets/images/auth/login/login.png') }}" alt="">
                <div class="div-title">
                    <span>Sign In & Protect</span> your trading 
                </div>
                <div class="div-description">
                    Follow successful traders, share your insights and experiences, and receive advice on CommuniTrade, your dedicated channel for collaborative growth in the trading community.
                </div>
            </div>
        </div>
        <div class="col-6 d-flex div-second-content">
            <form id="loginForm" class="m-auto">
                <div class="input-form">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required autofocus placeholder="email">
                </div>

                <div class="input-form-2">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required placeholder="password">
                </div>
                <div class="input-form-btn">
                    <button type="submit" class="btn btn-login">Login</button>
                </div>

                <div class="input-form-forgot-password">
                    <a href="{{ route('password.request')}}" class="forgot-password">Forgot your password?</a>
                </div>
                
                <div class="input-form-create-account">
                    <a href="{{ route('register')}}" class="create-account">Create my TRU account</a>
                </div>
            </form>
        </div>
    </div>
</div>


<script>

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

    
</script>

@endsection