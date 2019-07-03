<?php echo $__env->make('Layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('Layout.common', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<hr>
<main class="py-4">
    <?php echo $__env->yieldContent('content'); ?>
</main>
<?php /**PATH /home/k-linux/myapp/kak/resources/views/layouts/app.blade.php ENDPATH**/ ?>