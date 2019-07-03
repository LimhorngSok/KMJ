<?php $__env->startSection('title','KMJ-Blog'); ?>
<?php $__env->startSection('sub-heading','Learn Together and Grow Together'); ?>
<?php $__env->startSection('head'); ?>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
	<style>
		.fa-thumbs-up:hover{
			color:#f41115;

		}
	</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
	<!-- Main Content -->

	<div class="col-lg-8">
		<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="col blog">
	    <a href="<?php echo e($post->slug); ?>"><img class="img-fluid" src="<?php echo e(Storage::disk('local')->url($post->image)); ?>" alt=""></a>
	    <a href="<?php echo e($post->slug); ?>" class="date"><?php echo e(date('F d, Y', strtotime($post->created_at))); ?></a>
	    <div class="blog-detail">
	      <a href="<?php echo e($post->slug); ?>" class="d-inline-block"><h5><?php echo e($post->title); ?></h5></a>
				<p><b><?php echo e($post->subtitle); ?></b></p>
	      <hr class="col-lg-3" align=left>
	      <p><?php echo substr(strip_tags($post->body), 0, 150); ?></p>
	      <div class="row">

	        <p class="text-secondary"><i class="fas fa-calendar-alt"></i>
						<?php $__currentLoopData = $post->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<a href="<?php echo e(route('category',$category->slug)); ?>"><?php echo e($category->name); ?> </a>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</p>
	        <p class="text-secondary">|</p>
	        <p class="text-secondary"><i class="fas fa-heart"></i>133 Likes</p>
	      </div>
	    </div>
	  </div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<ul class="pager">
					<?php echo e($posts->links()); ?>

		</ul>
	</div>

	

	<div class="col-lg-4">
	  <div class="">
	    <h5>Search</h5>
	    <div class="form-group row">
	      <input type="text" class="form-control col" id="exampleDropdownFormEmail2" placeholder="Search">
	      <button type="button" name="button" class="btn btn-warning col-2"><i class="fas fa-search"></i></button>
	    </div>
	  </div>
	  <div class="Category">
	    <h5>Category</h5>
	    <ul class="list-group list-group-flush">
				<a href="<?php echo e(route('category','Events')); ?>"  class="list-group-item text-primary" >Events</a>
				<a href="<?php echo e(route('category','Tips')); ?>"  class="list-group-item text-primary" >Tips</a>
				<a href="<?php echo e(route('category','Recommendation')); ?>"  class="list-group-item text-primary" >Recommendation</a>
				<a href="<?php echo e(route('category','Story')); ?>"  class="list-group-item text-primary" >Story</a>
	    </ul>
	  </div>
	  <div class="subscribe">
	    <h5>Subscribe</h5>
	    <form>
	      <div class="form-group">
	        <label for="exampleDropdownFormEmail2">Email address</label>
	        <input type="text" class="form-control" id="exampleDropdownFormEmail2" placeholder="Full name">
	      </div>
	      <div class="form-group">
	        <label for="exampleDropdownFormPassword2">Email</label>
	        <input type="email" class="form-control" id="exampleDropdownFormPassword2" placeholder="email@example.com">
	      </div>
	      <button type="submit" class="btn btn-warning">Subscribe</button>
	    </form>
	  </div>
	</div>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
	<script src="<?php echo e(asset('js/app.js')); ?>"></script>
<?php $__env->stopSection(); ?>

	    

<?php echo $__env->make('user/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/k-linux/myapp/KMJ/resources/views/user/blog.blade.php ENDPATH**/ ?>