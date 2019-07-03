<?php $__env->startSection('bg-img',asset('user/img/home-bg.jpg')); ?>
<?php $__env->startSection('title','Bitfumes Blog'); ?>
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
	<div class="container">
	    <div class="row" id="app">
	        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
	            <posts 
	            v-for='value in blog'
	            :title=value.title
	            :subtitle=value.subtitle
	            :created_at=value.created_at
	            :key=value.index
	            :post-id = value.id
	            login = "<?php echo e(Auth::check()); ?>"
	            :likes = value.likes.length
	            :slug = value.slug
	            ></posts>
	            <hr>
	            <!-- Pager -->
	            <ul class="pager">
	                <li class="next">
	                	<?php echo e($posts->links()); ?>

	                </li>
	            </ul>
	        </div>
	    </div>
	</div>

	<hr>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
	<script src="<?php echo e(asset('js/app.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/k-linux/Downloads/kak/resources/views/user/blog.blade.php ENDPATH**/ ?>