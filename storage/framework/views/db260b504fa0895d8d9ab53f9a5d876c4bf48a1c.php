<section id="header" class="sticky-top">
  <div class="container">
    <div class="row align-center">
      <div class="col-lg-12">
        <nav class="navbar">
          <a href="/" class="navbar-brand">KMJ</a>

            <ul class="nav justify-content-center">
              <li class="nav-link"><a href="/" class="text-decoration-none text-primary">Home</a></li>
              <li class="nav-link"><a href="/#about-us" class="text-decoration-none">About Us</a></li>
              <li class="nav-link"><a href="/#contact-us" class="text-decoration-none">Contact Us</a></li>
              <li class="nav-link"><a href="/Blog" class="text-decoration-none">Blog</a></li>
              <li class="nav-link"><a href="#FAQ" class="text-decoration-none">FAQ</a></li>
              <li class="nav-link"><a href="/InProcess" class="text-decoration-none">In Process</a></li>
            </ul>
            <div class="justify-content-center row">
              <?php if(Route::has('login')): ?>
                
                
                    <?php if(auth()->guard()->check()): ?>
                      <div class="dropdown">
                        <button class="btn btn-outline-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right: 10px" ><?php echo e(Auth::user()->name); ?></button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="/dashboard">Dashboard</a>
                          <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><?php echo e(__('Logout')); ?></a>
                          <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                              <?php echo csrf_field(); ?>
                          </form>
                          <a class="dropdown-item" href="#">Settings</a>
                        </div>
                      </div>
                    <?php else: ?>
                        <button class="btn btn-outline-warning" style="margin-right: 10px" onclick=location.href="<?php echo e(route('login')); ?>">Login</button>
                
                
                        <?php if(Route::has('register')): ?>
                            <button class="btn btn-outline-warning" style="margin-right: 10px" onclick=location.href="<?php echo e(route('register')); ?>">Register</button>
                        <?php endif; ?>
                    <?php endif; ?>
                
            <?php endif; ?>
              <button type="button" id="button" name="book" onclick="location.href='#service'" class="btn btn-warning justify-content-end">Book Now</button>
            </div>
        </nav>
      </div>
    </div>
  </div>
</section>
<?php /**PATH /home/k-linux/myapp/KMJ/resources/views/Layout/header.blade.php ENDPATH**/ ?>