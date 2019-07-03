<section id="after-schedule-selected" class="fixed-bottom">
  <div class="container-fluid">
    <div class="row bg-danger justify-content-center">
      <button data-toggle="tooltip" data-placement="right" title="Cancel" type="button" class="close" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="col row justify-content-center text-white">
        <p class="align-middle">Total:</p>
        <h4 id="selected-price"><strong>$ 70.00</strong></h4>
        <i class="fas fa-shopping-cart"></i>
      </div>
      <div class="col justify-content-center">
      <?php if(auth()->guard()->check()): ?>
        <button type="button" name="button" class="btn btn-dark" onclick="location.href='/InProcess'">Continue</button>
        <?php else: ?>
        <button type="button" name="button" class="btn btn-dark" onclick="location.href='/login?ScdId='">Login</button>
      <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<?php /**PATH /home/horng/Desktop/KMJ/KMJ/resources/views/Layout/Schedule/after-selected-schedule.blade.php ENDPATH**/ ?>