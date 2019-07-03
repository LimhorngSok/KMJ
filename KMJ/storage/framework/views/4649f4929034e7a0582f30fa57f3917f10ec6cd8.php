<?php $__env->startSection('bg-img',Storage::disk('local')->url($post->image)); ?>
<?php $__env->startSection('head'); ?>
<link rel="stylesheet" href="<?php echo e(asset('user/css/prism.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title',$post->title); ?>
<?php $__env->startSection('sub-heading',$post->subtitle); ?>

<?php $__env->startSection('main-content'); ?>
<!-- Post Content -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=455618938154843";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <small>Created at <?php echo e($post->created_at); ?></small>
                <?php $__currentLoopData = $post->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <small class="pull-right" style="margin-right: 20px">  
                    <a href="<?php echo e(route('category',$category->slug)); ?>"><?php echo e($category->name); ?></a>
                </small>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php echo htmlspecialchars_decode($post->body); ?>


                
                <h3>Tag Clouds</h3>
                <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('tag',$tag->slug)); ?>"><small class="pull-left" style="margin-right: 20px;border-radius: 5px;border: 1px solid gray;padding: 5px;">  
                                    <?php echo e($tag->name); ?>

                                </small></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="fb-comments" data-href="<?php echo e(Request::url()); ?>" data-numposts="5"></div>
        </div>
    </div>
</article>

<hr>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<script src="<?php echo e(asset('user/js/prism.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/k-linux/Downloads/kak/resources/views/user/post.blade.php ENDPATH**/ ?>