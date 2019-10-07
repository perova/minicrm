<?php $__env->startSection('content'); ?>

<div class="jumbotron text-center">
	<div align="right">
		<a href="<?php echo e(route('employees.index')); ?>" class="btn btn-primary">Back</a>
	</div>
	<br />
	
	<h3>First Name - <?php echo e($data->first_name); ?> </h3>
	<h3>Last Name - <?php echo e($data->last_name); ?></h3>
	<h3>Email - <?php echo e($data->email); ?></h3>
	<h3>Phone- <?php echo e($data->phone); ?></h3>
	<h3>Company - <?php echo e($data->company->name); ?></h3>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/employees/view.blade.php ENDPATH**/ ?>