<?php $__env->startSection('head'); ?>
<link rel="stylesheet" href="<?php echo e(asset('user/css/prism.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
<!-- Post Content -->
<div class="col-lg-8">

  <div class="col blog">
    <a href=""><img  class="img-fluid" src="<?php echo e(Storage::disk('local')->url($post->image)); ?>" alt=""></a>
    <a href="" class="date"><?php echo e(date('F d, Y', strtotime($post->created_at))); ?></a>
    <div class="blog-detail">
      <div id="fb-root"></div>
      <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=455618938154843";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>
      <article class="d-flex justify-content-center flex-column ">

        <div class="col-lg-12 col-lg-offset-2 col-md-10 col-md-offset-1">
            <?php $__currentLoopData = $post->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <h6 class="pull-right" style="margin-right: 20px"><b>Category :
                <a href="<?php echo e(route('category',$category->slug)); ?>"><?php echo e($category->name); ?></a></b>
            </h6>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <h5><?php echo e($post->title); ?></h3>
            <h6><?php echo e($post->subtitle); ?></h6>
            <?php echo htmlspecialchars_decode($post->body); ?>

            
            <p><b>#Tag : </b>
            <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('tag',$tag->slug)); ?>"><small class="pull-left" style="margin-right: 20px;border-radius: 5px;border: 1px solid gray;padding: 5px;">
                                <?php echo e($tag->name); ?>

                            </small></a></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <div class="fb-comments"data-href="<?php echo e(Request::url()); ?>" data-numposts="5"></div>
        </div>
      </article>
    </div>
  </div>

</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<script src="<?php echo e(asset('user/js/prism.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<div class="col-lg-8">




</div>

<?php echo $__env->make('user/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/k-linux/myapp/kak/resources/views/user/post.blade.php ENDPATH**/ ?>