<section id="contact-us">
  <div class="text-center">
    <h2 class="navbar-brand">Contact</h2>
  </div>
  <hr class="col-lg-3">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <h4>Contact Information</h4>
        <p>We are happy to see you contact us, and we will respond as soon as possible in regard!</p>
        <div class="row">
          <div class="col-2">
            <i class="fas fa-phone-square fa-3x"></i>
          </div>
          <div class="col">
            <h6>Phone Number</h6>
            <p>+85515380440</p>
          </div>
        </div>
        <div class="row">
          <div class="col-2">
            <i class="fas fa-envelope-open fa-3x"></i>
          </div>
          <div class="col">
            <h6>Email</h6>
            <p>Limhorngsok@gmail.com</p>
          </div>
        </div>
        <div class="row">
          <div class="col-2">
            <i class="fas fa-compass fa-3x"></i>
          </div>
          <div class="col">
            <h6>Location</h6>
            <p>Paragon University, Toul Kork, Phnom Penh</p>
          </div>
        </div>
      </div>


      <div class="col-lg-6">
         <?php echo $__env->make('includes.forms_errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo e(Form::open(['method'=>'POST','action'=>'ContactUsController@store','files'=>true])); ?>

  <div class="form-row">
  <div class="col">
  <?php echo e(Form::text('full_name',null,['class'=>'form-control','placeholder'=>'Full Name'])); ?>

  </div>
  <div class="col">
  <?php echo e(Form::email('email',null,['class'=>'form-control','placeholder'=>'Email'])); ?>

  </div>
  </div>
  <div class="form-group">
      <?php echo e(Form::textarea('message',null,['class'=>'form-control','placeholder'=>'Message'])); ?>

  </div>


  <div class="form-group">
      <?php echo e(Form::submit('Send',['class'=>'btn btn-warning'])); ?>

  </div>
  <?php echo e(Form::close()); ?>

  </div>

      </div>
    </div>
  </div>
</section>
<?php /**PATH /home/k-linux/myapp/kak/resources/views/Layout/contact-us.blade.php ENDPATH**/ ?>