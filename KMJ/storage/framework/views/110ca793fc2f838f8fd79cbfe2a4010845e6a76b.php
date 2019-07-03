<section id="schedule-content">
  <div class="container tab-content">
    <div class="tab-pane fade show active" id="tap1">
      <?php if(empty($schedules)): ?>
          <?php echo $__env->make('Layout.Schedule.none-schedule-list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php else: ?>
        <?php $__currentLoopData = $schedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php
            $price = $schedule->price;
            $departing_time = $schedule->departing_time;
            $arriving_time = $schedule->arriving_time;
            $date = $schedule->available_date;
          ?>
          <?php echo $__env->make('Layout.Schedule.airplane-schedule-list',['price' => '$ '.$price,'started_time' => $departing_time, 'ended_time' => $arriving_time], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endif; ?>
    </div>
    <div class="tab-pane fade" id="tap2">
      <?php if(empty($schedules)): ?>
          <?php echo $__env->make('Layout.Schedule.none-schedule-list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php else: ?>
        <?php $__currentLoopData = $schedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php
            $price = $schedule->price;
            $departing_time = $schedule->departing_time;
            $arriving_time = $schedule->arriving_time;
            $date = $schedule->available_date;
          ?>
          <?php echo $__env->make('Layout.Schedule.airplane-schedule-list',['price' => '$ '.$price,'started_time' => $departing_time, 'ended_time' => $arriving_time], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endif; ?>
    </div>
    <div class="tab-pane fade" id="tap3">
      <?php if(empty($schedules)): ?>
          <?php echo $__env->make('Layout.Schedule.none-schedule-list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php else: ?>
        <?php $__currentLoopData = $schedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php
            $price = $schedule->price;
            $departing_time = $schedule->departing_time;
            $arriving_time = $schedule->arriving_time;
            $date = $schedule->available_date;
          ?>
          <?php echo $__env->make('Layout.Schedule.airplane-schedule-list',['price' => '$ '.$price,'started_time' => $departing_time, 'ended_time' => $arriving_time], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endif; ?>
    </div>
    <div class="tab-pane fade" id="tap4">

    </div>
    <div class="tab-pane fade" id="tap5">

    </div>
    <div class="tab-pane fade" id="tap6">

    </div>
    <div class="tab-pane fade" id="tap7">

    </div>
    <div class="tab-pane fade" id="tap8">

    </div>
    <div class="tab-pane fade" id="tap9">

    </div>
    <div class="tab-pane fade" id="tap10">

    </div>
    <div class="tab-pane fade" id="tap11">

    </div>
    <div class="tab-pane fade" id="tap12">

    </div>
    <div class="tab-pane fade" id="tap13">

    </div>
    <div class="tab-pane fade" id="tap14">

    </div>
    <div class="tab-pane fade" id="tap15">

  </div>
</section>
<?php /**PATH /home/horng/Desktop/KMJ/KMJ/resources/views/Layout/Schedule/schedule-content.blade.php ENDPATH**/ ?>