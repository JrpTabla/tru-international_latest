<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($title); ?></title>

    <link rel="stylesheet" href="<?php echo e(asset ('assets/css/bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset ('assets/css/auth/auth.css')); ?>">

    <meta name="robots" content="noindex,follow" />
</head>
<body>

    <div class="w-100 d-flex p-3">
        <button type="button" class="btn ms-auto btn-Goback" onclick="goBack()">Go Back</button>
    </div>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.auth-validation-errors','data' => ['class' => 'mb-4','errors' => $errors]]); ?>
<?php $component->withName('auth-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mb-4','errors' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>


    <?php echo $__env->yieldContent('content'); ?>
    
    

    <script>
    function goBack() {
        window.location.href = "/";
    }
</script>   


</body>
</html><?php /**PATH C:\Users\Admin-IT\Desktop\tru-international\tru-international_latest\resources\views/header/auth.blade.php ENDPATH**/ ?>