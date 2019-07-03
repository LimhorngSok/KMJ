<div class="row justify-content-center" id=<?php echo e(isset($type) ? $type:''); ?>>
  <?php echo $__env->make('Layout.destination.destination-box', ['destination' => 'Siem Reap','dest_thumbnail' => 'sr'.'.jpg'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('Layout.destination.destination-box', ['destination' => 'Bankok','dest_thumbnail' => 'bk'.'.jpg'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('Layout.destination.destination-box', ['destination' => 'Sangapore','dest_thumbnail' => 'sp'.'.jpg'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('Layout.destination.destination-box', ['destination' => 'Dubai','dest_thumbnail' => 'db'.'.jpg'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('Layout.destination.destination-box', ['destination' => 'Malaysia','dest_thumbnail' => 'ml'.'.jpg'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('Layout.destination.destination-box', ['destination' => 'Vietnam','dest_thumbnail' => 'vn'.'.jpg'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php /**PATH /home/k-linux/myapp/KMJ/resources/views/Layout/destination/airplane.blade.php ENDPATH**/ ?>