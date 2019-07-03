<section id="seat-selection">
  <div class="container">
    <?php echo $__env->make('Layout.seat.seat-instruction', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <hr>
    <?php echo $__env->make('Layout.seat.airplane', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('Layout.seat.seat-selection', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div>
</section>
<?php /**PATH /home/k-linux/myapp/kak/resources/views/seat-selection.blade.php ENDPATH**/ ?>