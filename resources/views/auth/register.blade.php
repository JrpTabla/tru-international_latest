@extends('header.auth')

@section('content')


<link rel="stylesheet" href="{{ asset ('assets/css/auth/register.css') }}">
<div class="container-fluid div-content">
    <div class="row my-auto">
        <div class="col-6 d-flex div-first-content">
            <div class="m-auto">
                <img src="{{ asset ('assets/images/auth/register/picture.png') }}" alt="">
                <div class="div-title">
                    <span>Sign Up & Protect</span> your trading 
                </div>
                <div class="div-description">
                    Follow successful traders, share your insights and experiences, and receive advice on CommuniTrade, your dedicated channel for collaborative growth in the trading community.
                </div>
            </div>
        </div>
        <div class="col-6 d-flex div-second-content">
            <form method="POST" action="/register" class="m-auto form-div">
            @csrf
                <div class="input-form">
                    <label for="first_name" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" aria-describedby="emailHelp" required autofocus placeholder="First Name">
                </div>

                <div class="input-form">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" aria-describedby="emailHelp" required autofocus placeholder="Last Name">
                </div>

                <div class="input-form">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required autofocus placeholder="email">
                </div>

                <div class="input-form">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required placeholder="password">
                </div>

                <div class="input-form row">

                    <div class="col-5">
                        <label for="date_of_birth" class="form-label">Date of birth</label>
                        <input type="date"  class="form-control" id="date_of_birth" name="date_of_birth" required>
                    </div>

                    <div class="col-7">
                        <label for="country" class="form-label">Country</label>
                        <select class="form-select" id="country" name="country">
                            <option selected>Country</option>
                            <option value="ph">Philippines</option>
                            <option value="jp">Japan</option>
                            <option value="USA">America</option>
                        </select>
                    </div>
                    
                </div>

                <div class="input-form">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="number" class="form-control" id="phone" name="phone" aria-describedby="" required autofocus>
                </div>

                <div class="terms">
                By signing up, you agree to our <a href="">Privacy Policy</a> and <a href="">Terms of Service</a>
                </div>


                <div class="input-form-btn">
                    <button class="btn btn-login">Be a TRU member</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var registerForm = document.getElementById('registerForm');
        var registerBtn = document.getElementById('registerBtn');

        registerForm.addEventListener('submit', function (event) {
            event.preventDefault(); // This prevents the default form submission

            // Additional logic if needed, like form validation

            // Now you can manually submit the form via JavaScript if needed
            // registerForm.submit();
        });
    });
</script>
@endsection