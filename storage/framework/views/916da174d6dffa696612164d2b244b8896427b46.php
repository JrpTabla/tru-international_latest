<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maintenance Page Notification</title>
</head>
<body>

    <p>Good Day!</p>

    <p>We've received interest from a user in the page currently under development or maintenance:</p>

    <p>Email: <?php echo e($formData['email']); ?></p>
    <p>URL: <?php echo e($formData['url']); ?></p>
    <p>Page Title: <?php echo e($formData['page_title']); ?></p>

    <hr>

    <div>
        <img src="<?php echo e(asset ('assets/images/logo.png')); ?>" alt="TRU Logo">
    </div>

</body>
</html>
<?php /**PATH C:\Users\Admin-IT\Desktop\tru-international\tru-international_latest\resources\views/emails/maintenance_page.blade.php ENDPATH**/ ?>