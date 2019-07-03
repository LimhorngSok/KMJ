<div class="row justify-content-center" id=<?php echo e(isset($type) ? $type:''); ?>>
  <?php echo $__env->make('Layout.destination.destination-box', ['destination' => 'Siem Reap','dest_thumbnail' => 'sr'.'.jpg'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('Layout.destination.destination-box', ['destination' => 'Kompong Som','dest_thumbnail' => 'kps'.'.jpeg'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('Layout.destination.destination-box', ['destination' => 'Kompot','dest_thumbnail' => 'kp'.'.jpg'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('Layout.destination.destination-box', ['destination' => 'Koh Kong','dest_thumbnail' => 'kk'.'.jpg'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('Layout.destination.destination-box', ['destination' => 'Mondulkiri','dest_thumbnail' => 'mdk'.'.jpg'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php /**PATH /home/horng/Desktop/KMJ/KMJ/resources/views/Layout/destination/bus.blade.php ENDPATH**/ ?>