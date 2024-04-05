


<?php $__env->startSection('content'); ?>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="stylesheet" href="<?php echo e(asset ('assets/css/RPP/index.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset ('assets/css/maintenance/landing-section.css')); ?>">

<div class="main">
    <section id="maintenance-landing-section" class="maintenance-landing-section">
        <div class="maintenance-landing-section-container row mx-auto">
            <div class="maintenance-landing-section-first-div row">
                <div class="maintenance-landing-section-first-content d-flex col-12">
                    <div class="m-auto">
                        <div class="maintenance-landing-section-first-content-img">
                            <img src="<?php echo e(asset ('assets/images/maintenance-images/landing-image.png')); ?>" alt="" style="width: 100%"/>
                        </div>
                    </div>
                </div>
                <div class="maintenance-landing-section-second-content d-flex col-12">
                    <div class="maintenance-landing-section-second-text mx-auto">This Page is Under</div>
                    <div class="maintenance-landing-section-second-title mx-auto">cons<span>TRU</span>ction.</div>
                    <div class="maintenance-landing-section-second-sign-up-text line-1 mx-auto">Sign up for early access and launch updates</div>
                    <div class="maintenance-landing-section-second-sign-up-text line-2 mx-auto">We received your request.</div>
                    <div class="maintenance-landing-section-second-sign-up-text line-2 email-success mx-auto">You will receive emails for early access and launch updates.</div>
                    <div class="email-div mx-auto">
                        <img class="my-auto" src="<?php echo e(asset ('assets/images/maintenance-images/mail-image.png')); ?>" alt="" width="48px" height="36px">
                        
                        <input type="email" class="form-control email-input" id="email" aria-describedby="emailHelp" placeholder="johnDoe@mail.com">
                        <button type="button" class="btn btn-notify my-auto" onclick="submitEmail()">Notify me</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    const page_title = document.title;
    const page_url = window.location.href;

    function submitEmail() {
        var emailInput = document.getElementById("email");
        var emailValue = emailInput.value;

        // Disable the button to prevent double clicking
        var notifyButton = document.querySelector('.btn-notify');
        notifyButton.disabled = true;

        if (emailValue === "") {
            alert("Please provide an email.");
            // Re-enable the button if validation fails
            notifyButton.disabled = false;
        } else if (!validateEmail(emailValue)) {
            alert("Incorrect email format. Please provide a valid email.");
            // Re-enable the button if validation fails
            notifyButton.disabled = false;
        } else {
            fetch('/submit-notification', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
                },
                body: JSON.stringify({
                    email: emailValue,
                    page_title: page_title,
                    url: page_url
                })
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                console.log(data);

                if (data == 0) {
                    // Hide line-1 and email-div
                    document.querySelector('.line-1').style.display = 'none';
                    document.querySelector('.email-div').style.display = 'none';
                    
                    // Show all elements with class line-2
                    var line2Elements = document.querySelectorAll('.line-2');
                    line2Elements.forEach(element => {
                        element.style.display = 'block';
                    });
                } else {
                    // Re-enable the button if data is not 0
                    notifyButton.disabled = false;
                }
            })
            .catch(error => {
                console.error('There was a problem with the fetch operation:', error);
                alert('Failed to send this Request, Kindly try it again later.');
                // Re-enable the button if an error occurs
                notifyButton.disabled = false;
            });
        }
    }



    function validateEmail(email) {
        // Regular expression for basic email validation
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
    }
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('header.subpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin-IT\Desktop\tru-international\tru-international_latest\resources\views/pages/maintenance.blade.php ENDPATH**/ ?>