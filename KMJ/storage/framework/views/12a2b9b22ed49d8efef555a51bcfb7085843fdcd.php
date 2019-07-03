<div class="schedule-box row justify-content-cente row justify-content-center" id="schedule-list">
  <div class="col-lg-6 row">
    <div class="col-lg-3 text-center">
      <strong><?php echo e(isset($started_time) ? $started_time: '8:00 AM'); ?></strong>
    </div>
    <i class="fas fa-bus col-lg-1"></i>
    <hr class="col-lg-1">
    <i class="fas fa-compass col-lg-1"></i>
    <div class="col-lg-3 text-center">
      <strong><?php echo e(isset($ended_time) ? $ended_time: '12:00 PM'); ?></strong>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="btn btn-light col text-center">
      <div class="btn btn-dark" id="price">
        
        <?php echo e(isset($price) ? $price: '$ 60.00'); ?>

      </div>
      <div class="">
        3 seats left
      </div>
    </div>
  </div>
</div>
<?php /**PATH /home/horng/Desktop/KMJ/KMJ/resources/views/Layout/Schedule/bus-schedule-list.blade.php ENDPATH**/ ?>