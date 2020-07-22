


<?php $__env->startSection('content'); ?>
<div class ="container">
    <div class="row">
        
            <div class="col-sm-4 col-3">
                <h4 class="page-title">Skill </h4>
            </div>
            <div class="col-sm-8 col-9 text-right m-b-20">
                <a class="btn btn-success" href="<?php echo e(route('details.create')); ?>"> Create New Skill</a>
            </div>
         
        
    </div>
   
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>
        <div class="row">
            <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table">
                        <tr>
                            <th>No</th>
                            <th>Skill</th>
                            <th>Scale</th>
                            <th width="280px">Action</th>
                        </tr>
                        <?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e(++$i); ?></td>
                            <td><?php echo e($detail->abilities); ?></td>
                            <td><?php echo e($detail->rate); ?></td>
                            <td>
                                <form action="<?php echo e(route('details.destroy',$detail->id)); ?>" method="POST">
                
                                    <a class="btn btn-primary" href="<?php echo e(route('details.edit',$detail->id)); ?>">Edit</a>
                
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                    
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    </div>
            </div>
        </div>
</div>

      <?php echo $details->links(); ?>

</div>    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('details.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webpage\resources\views/details/index.blade.php ENDPATH**/ ?>