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
      @auth
        <button type="button" name="button" class="btn btn-dark" onclick="location.href='/InProcess'">Continue</button>
        @else
        <button type="button" name="button" class="btn btn-dark" onclick="location.href='/login?ScdId='">Login</button>
      @endauth
      </div>
    </div>
  </div>
</section>
