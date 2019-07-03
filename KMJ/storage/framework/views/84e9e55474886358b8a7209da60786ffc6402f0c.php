<?php $__env->startSection('headSection'); ?>
<link rel="stylesheet" href="<?php echo e(asset('admin/plugins/datatables/dataTables.bootstrap.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Blank page
      <small>it all starts here</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Examples</a></li>
      <li class="active">Blank page</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Add new Post</h3>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('posts.create', Auth::user())): ?>
          <a class='col-lg-offset-5 btn btn-success' href="<?php echo e(route('post.create')); ?>">Add New</a>
        <?php endif; ?>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Post list</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>S.No</th>
                          <th>Title</th>
                          <th>Sub Title</th>
                          <th>Slug</th>
                          <th>Creatd At</th>
                          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('posts.update',Auth::user())): ?>
                          <th>Edit</th>
                          <?php endif; ?>
                           <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('posts.delete', Auth::user())): ?>
                          <th>Delete</th>
                          <?php endif; ?>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                            <td><?php echo e($loop->index + 1); ?></td>
                            <td><?php echo e($post->title); ?></td>
                            <td><?php echo e($post->subtitle); ?></td>
                            <td><?php echo e($post->slug); ?></td>
                            <td><?php echo e($post->created_at); ?></td>

                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('posts.update',Auth::user())): ?>
                              <td><a href="<?php echo e(route('post.edit',$post->id)); ?>"><span class="glyphicon glyphicon-edit"></span></a></td>
                            <?php endif; ?>

                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('posts.delete', Auth::user())): ?>
                            <td>
                              <form id="delete-form-<?php echo e($post->id); ?>" method="post" action="<?php echo e(route('post.destroy',$post->id)); ?>" style="display: none">
                                <?php echo e(csrf_field()); ?>

                                <?php echo e(method_field('DELETE')); ?>

                              </form>
                              <a href="" onclick="
                              if(confirm('Are you sure, You Want to delete this?'))
                                  {
                                    event.preventDefault();
                                    document.getElementById('delete-form-<?php echo e($post->id); ?>').submit();
                                  }
                                  else{
                                    event.preventDefault();
                                  }" ><span class="glyphicon glyphicon-trash"></span></a>
                            </td>
                          <?php endif; ?>
                          </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        <tfoot>
                        <tr>
                          <th>S.No</th>
                          <th>Title</th>
                          <th>Sub Title</th>
                          <th>Slug</th>
                          <th>Creatd At</th>
                          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('posts.update',Auth::user())): ?>
                          <th>Edit</th>
                          <?php endif; ?>
                           <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('posts.delete', Auth::user())): ?>
                          <th>Delete</th>
                          <?php endif; ?>
                        </tr>
                        </tfoot>
                      </table>
                    </div>
                    <!-- /.box-body -->
                  </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        Footer
      </div>
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footerSection'); ?>
<script src="<?php echo e(asset('admin/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/plugins/datatables/dataTables.bootstrap.min.js')); ?>"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/horng/Desktop/KMJ/KMJ/resources/views/admin/post/show.blade.php ENDPATH**/ ?>