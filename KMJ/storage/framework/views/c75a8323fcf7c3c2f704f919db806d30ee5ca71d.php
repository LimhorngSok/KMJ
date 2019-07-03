<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo e(asset('admin/dist/img/user2-160x160.jpg')); ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo e(Auth::user()->name); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
         <a href="#">
           <i class="fa fa-comments"></i> <span>Blog</span>
           <span class="pull-right-container">
             <i class="fa fa-angle-left pull-right"></i>
           </span>
         </a>
         <ul class="treeview-menu">
           <li class=""><a href="<?php echo e(route('post.index')); ?>"><i class="fa fa-circle-o"></i> Posts</a></li>
           <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('posts.category',Auth::user())): ?>
           <li class=""><a href="<?php echo e(route('category.index')); ?>"><i class="fa fa-circle-o"></i> Categories</a></li>
           <?php endif; ?>
           <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('posts.tag',Auth::user())): ?>
           <li class=""><a href="<?php echo e(route('tag.index')); ?>"><i class="fa fa-circle-o"></i> Tags</a></li>
           <?php endif; ?>

         </ul>
       </li>
       <li class="treeview">
        <a href="#">
          <i class="fa fa-users"></i> <span>Account</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class=""><a href="<?php echo e(route('user.index')); ?>"><i class="fa fa-circle-o"></i>Admins</a></li>
          <li class=""><a href="<?php echo e(route('user.index')); ?>"><i class="fa fa-circle-o"></i>Users</a></li>
        </ul>
      </li>
       <li class="treeview">
        <a href="#">
          <i class="fa fa-gears"></i> <span>Settings</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class=""><a href="<?php echo e(route('role.index')); ?>"><i class="fa fa-circle-o"></i> Roles</a></li>
          <li class=""><a href="<?php echo e(route('permission.index')); ?>"><i class="fa fa-circle-o"></i> Permissions</a></li>
        </ul>
      </li>





      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
<?php /**PATH /home/k-linux/myapp/kak/resources/views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>