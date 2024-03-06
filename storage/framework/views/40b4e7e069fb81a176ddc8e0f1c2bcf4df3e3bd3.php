

<?php $__env->startSection('content'); ?>

<link rel="stylesheet" href="<?php echo e(asset ('assets/css/auth/login.css')); ?>">

<div class="container-fluid div-content">
    <div class="row my-auto">
        <div class="col-6 d-flex div-first-content">
            <div class="m-auto">
                <img src="<?php echo e(asset ('assets/images/auth/login/login.png')); ?>" alt="">
                <div class="div-title my-3">
                    <span>Sign In & Protect</span> your trading 
                </div>
                <div class="div-description my-3">
                    Follow successful traders, share your insights and experiences, and receive advice on CommuniTrade, your dedicated channel for collaborative growth in the trading community.
                </div>
            </div>
        </div>
        <div class="col-6 d-flex div-second-content">
            <form id="loginForm" class="m-auto">
                <?php echo csrf_field(); ?>
                <div class="input-form my-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required autofocus placeholder="email">
                </div>

                <div class="input-form-2 my-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required placeholder="password">
                </div>
                <div class="input-form-btn my-3">
                    <button type="submit" class="btn btn-login">Login</button>
                </div>

                <div class="input-form-forgot-password my-3">
                    <a href="<?php echo e(route('password.request')); ?>" class="forgot-password">Forgot your password?</a>
                </div>
                
                <div class="input-form-create-account my-3">
                    <a href="<?php echo e(route('register')); ?>" class="create-account">Create my TRU account</a>
                </div>
            </form>
        </div>
        
    </div>
</div>


<script src="<?php echo e(asset ('assets/js/user/user-script.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('header.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin-IT\Desktop\tru-international\tru-international_latest\resources\views/auth/login.blade.php ENDPATH**/ ?>