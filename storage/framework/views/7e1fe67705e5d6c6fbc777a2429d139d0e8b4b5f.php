

<?php $__env->startSection('content'); ?>

<link rel="stylesheet" href="<?php echo e(asset ('assets/css/user/account_settings.css')); ?>">


<div class="main">
        <div class="Page-header">
            <div class="Page-title">Account Settings</div>

            <div class="Page-Nav row mt-auto">

                <div class="col-4">
                        <div class="Page-link Page-Profile" onclick="togglePage('Profile')">Profile</div>
                </div>

                <div class="col-4">
                        <div class="Page-link Page-Verification" onclick="togglePage('Verification')">Verification</div>
                </div>
                <div class="col-4">
                        <div class="Page-link Page-Security" onclick="togglePage('Security')">Security</div>
                </div>
            </div>
        </div>

        <div class="Page-Body m-auto">
                <div class="Page-Profile-body">
                    <div class="row">
                        
                    </div>
                </div>  

                <div class="Page-Verification-body">
                    <div class="row">
                        <div class="Page-Membership-email-div col-12">
                            <div class="fw-bold">YOUR ACCOUNT HAS NOT BEEN VERIFIED YET.</div>
                            <div>Verify your account now to have full access to the TRU membership benefits you are qualified in.</div>
                        </div>
                        <div class="col-4">
                            <div class="d-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M21 42C23.7578 42 26.4885 41.4568 29.0364 40.4015C31.5842 39.3461 33.8992 37.7993 35.8492 35.8492C37.7993 33.8992 39.3461 31.5842 40.4015 29.0364C41.4568 26.4885 42 23.7578 42 21C42 18.2422 41.4568 15.5115 40.4015 12.9636C39.3461 10.4158 37.7993 8.10079 35.8492 6.15076C33.8992 4.20073 31.5842 2.65388 29.0364 1.59853C26.4885 0.543181 23.7578 -4.10938e-08 21 0C15.4305 8.29927e-08 10.089 2.21249 6.15076 6.15076C2.21249 10.089 0 15.4305 0 21C0 26.5695 2.21249 31.911 6.15076 35.8492C10.089 39.7875 15.4305 42 21 42ZM20.4587 29.4933L32.1253 15.4933L28.5413 12.5067L18.508 24.5443L13.3163 19.3503L10.017 22.6497L17.017 29.6497L18.823 31.4557L20.4587 29.4933Z" fill="#E7AA2E"/>
                                </svg>
                                <div class="unverifed-text">Unverifed</div>
                            </div>
                        </div>
                        <div class="col-4">

                        </div>
                        <div class="col-4">

                        </div>
                    </div>
                
                </div>
                <div class="Page-Security-body">
                Affiliate Body Content
                </div>
        </div>
</div>

<script>
    function togglePage(pageName) {
        // Toggle active class for Page-link
        const pageLinks = document.querySelectorAll('.Page-link');
        pageLinks.forEach(link => {
            link.classList.remove('active-page-link');
        });
        document.querySelector('.Page-' + pageName).classList.add('active-page-link');

        // Toggle display for Page-body
        const pageBodies = document.querySelectorAll('.Page-Body > div');
        pageBodies.forEach(body => {
            body.style.display = 'none';
        });
        document.querySelector('.Page-' + pageName + '-body').style.display = 'block';
    }

    // Default to Membership page
    window.onload = function() {
        togglePage('Profile');
    };




function get_user_info_dashboard() {
    // Send an AJAX request to the server
    fetch('/get_user_info', {
        method: 'GET',
        headers: {
            'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
        }
    })
    .then(response => {
        // Check if the response is successful
        if (response.ok) {
            return response.json(); // Extract the response body as JSON
        }
        throw new Error('Network response was not ok.');
    })
    .then(data => {


        // Check if email is verified
        if (data.emailVerifiedAt == 0) {


            // If email is not verified, show the email verification message
            document.querySelector('.Page-Membership-email-div').classList.add('show-email-div');
        } else {
            console.log("Verified!")
        }

    })

    .catch(error => {
        console.error('Error:', error);
    });
}

get_user_info_dashboard();


</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('header.user_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin-IT\Desktop\tru-international\tru-international_latest\resources\views/pages/user/account_settings.blade.php ENDPATH**/ ?>