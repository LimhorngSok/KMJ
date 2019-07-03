<?php $__env->startSection('title','Blog - KMJ'); ?>
<?php echo $__env->make('Layout.common', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('Layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<section id="blog">
  <div class="intro text-center">
    <h3 class="align-middle">Blog - Tips, Events, and Recommendation</h3>
  </div>
  <div class="container">
    <div class="row">
      <?php echo $__env->make('Layout.Blog.list-blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('Layout.Blog.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
  </div>
</section>
<?php echo $__env->make('Layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/k-linux/Downloads/kak/resources/views/Blog.blade.php ENDPATH**/ ?>