<?php $__env->startSection('title','Schedule'); ?>
<?php echo $__env->make('Layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<section id="destination">
	<div class="container">
		<div class="row justify-content-between">
			<h1 class="navbar-brand">Select Your Destination</h1>
			<div class="input-group input-group-sizing-sm ">
			  <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
			  <div class="input-group-append">
			    <span class="btn btn-warning fas fa-search"></span>
			  </div>
			</div>
		</div>

		<hr>
    <div class="row justify-content-center">
      <?php if(isset($type)): ?>
          <?php echo $__env->make("Layout.destination.$type", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>
      
  </div>
</section>
<?php echo $__env->make('Layout.contact-us', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('Layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('Layout.common', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/k-linux/myapp/KMJ/resources/views/destination.blade.php ENDPATH**/ ?>