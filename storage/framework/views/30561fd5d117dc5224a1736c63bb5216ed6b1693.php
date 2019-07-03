
  <div class="schedule-box row justify-content-cente row justify-content-center" id="schedule-list">
    <form class="" style="width: 100%" action="/addSchedule" method="get">
    <div class="col-lg-6 row">
      <div class="col text-center row">
        <div class="input-group input-group-sm mb-3">
          <input type="time" name="departing-time" class="form-control col" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
       </div>
      </div>
      <i class="fas fa-plane-departure col-lg-1"></i>
      <hr class="col">
      <i class="fas fa-plane-arrival col-lg-1"></i>
      <div class="col text-center row">
        <div class="input-group input-group-sm mb-3">
          <input type="time" min="9:00" max="18:00" required name="arriving-time" class="form-control col" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
       </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="btn btn-light col text-center">
        <div class="input-group input-group-lg">
          <input type="number" name='price' class="form-control"  min="0.00" step='0.01' value='5.00' aria-label="Dollar amount (with dot and two decimal places)">
          <div class="input-group-append">
            <span class="input-group-text">$</span>
          </div>
        </div>
        <button type="submit" class="btn btn-danger col" style="margin-top: 10px;" name="button">Add</button>
        
      </div>
    </div>
    <input type="hidden" name="date" id="date" value="">
    </form>
  </div>
<?php /**PATH /home/k-linux/myapp/KMJ/resources/views/demo/add.blade.php ENDPATH**/ ?>