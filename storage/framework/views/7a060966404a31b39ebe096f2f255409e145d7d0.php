<?php
  $loc = $type.'/schedule';
?>
<div class="col-lg-3 text-center justify-content-center" onclick="location.href='<?php echo e($loc); ?>'")}}">
  <img src="<?php echo e(asset('img/'.$dest_thumbnail)); ?>" class="img-destination" alt="...">
  <h3><?php echo e(isset($destination) ? $destination:""); ?></h3>
</div>
<?php /**PATH /home/k-linux/myapp/KMJ/resources/views/Layout/destination/destination-box.blade.php ENDPATH**/ ?>