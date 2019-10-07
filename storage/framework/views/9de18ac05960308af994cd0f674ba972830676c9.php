<?php $__env->startSection('content'); ?>

<div class="jumbotron text-center">
	<div align="right">
		<a href="<?php echo e(route('companies.index')); ?>" class="btn btn-primary">Back</a>
	</div>
	<br />
	<h3>Logo</h3>
	<img src="<?php echo e(URL::to('/')); ?>/images/<?php echo e($data->image); ?>" class="img-thumbnail" />
	<h3> Company Name - <?php echo e($data->name); ?> </h3>
	<h3> Company Email - <?php echo e($data->email); ?></h3>
	<h3>Comapny Website - <?php echo e($data->website); ?></h3>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/companies/view.blade.php ENDPATH**/ ?>