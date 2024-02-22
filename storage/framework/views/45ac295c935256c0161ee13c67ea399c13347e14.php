
<div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="<?php echo e(route('logout')); ?>">
                    <?php echo csrf_field(); ?>

                    <a :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        <?php echo e(__('Log Out')); ?>

                    </a>
                </form>
            </div><?php /**PATH C:\Users\SysplexUser\Desktop\laravel\tru-international\resources\views/dashboard.blade.php ENDPATH**/ ?>