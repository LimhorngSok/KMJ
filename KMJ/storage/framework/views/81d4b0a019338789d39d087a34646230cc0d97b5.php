<?php $__env->startSection('bg-img',asset('user/img/contact-bg.jpg')); ?>
<?php $__env->startSection('head'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('title','Login Here'); ?>
<?php $__env->startSection('sub-heading',''); ?>

<?php $__env->startSection('main-content'); ?>
<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
           <form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('login')); ?>">
               <?php echo e(csrf_field()); ?>


               <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                   <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                   <div class="col-md-6">
                       <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required autofocus>

                       <?php if($errors->has('email')): ?>
                           <span class="help-block">
                               <strong><?php echo e($errors->first('email')); ?></strong>
                           </span>
                       <?php endif; ?>
                   </div>
               </div>

               <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                   <label for="password" class="col-md-4 control-label">Password</label>

                   <div class="col-md-6">
                       <input id="password" type="password" class="form-control" name="password" required>

                       <?php if($errors->has('password')): ?>
                           <span class="help-block">
                               <strong><?php echo e($errors->first('password')); ?></strong>
                           </span>
                       <?php endif; ?>
                   </div>
               </div>

               <div class="form-group">
                   <div class="col-md-6 col-md-offset-4">
                       <div class="checkbox">
                           <label>
                               <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Remember Me
                           </label>
                       </div>
                   </div>
               </div>

               <div class="form-group">
                   <div class="col-md-8 col-md-offset-4">
                       <button type="submit" class="btn btn-primary">
                           Login
                       </button>


                       <a href='<?php echo e(route('register')); ?>' class="btn btn-primary">
                           Register
                       </a>

                       <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                           Forgot Your Password?
                       </a>
                   </div>
               </div>
           </form>
        </div>
    </div>
</article>

<hr>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/k-linux/Downloads/kak/resources/views/auth/login.blade.php ENDPATH**/ ?>