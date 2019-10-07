<?php $__env->startSection('content'); ?>
<div class="col-md-4 text-center">
<h2>Edit Company</h2>
</div>
<div align="right">
	<a href="<?php echo e(route('companies.index')); ?>" class="btn btn-primary">Back</a>
</div>
<br />

<form method="post" action="<?php echo e(route('companies.update', $data->id)); ?>" enctype="multipart/form-data">

	<?php echo csrf_field(); ?>
	<?php echo method_field('PATCH'); ?>
	<div class="form-group row">
		<label class="col-md-4 text-center">Edit Company Name</label>
		<div class="col-md-4">
			<input type="text" name="name" value="<?php echo e($data->name); ?>" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<div class="form-group row">
		<label class="col-md-4 text-center">Edit Company Email</label>
		<div class="col-md-4">
			<input type="text" name="email" value="<?php echo e($data->email); ?>" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<div class="form-group row">
		<label class="col-md-4 text-center">Edit Comapany Website</label>
		<div class="col-md-4">
			<input type="text" name="website" value="<?php echo e($data->website); ?>" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<div class="form-group row">
		<label class="col-md-4 text-center">Edit Company Logo</label>
		<div class="col-md-4">
			<input type="file" name="image" />
			<img src="<?php echo e(URL::to('/')); ?>/images/<?php echo e($data->image); ?>" class="img-thumbnail" width="100" />
			<input type="hidden" name="hidden_image" value="<?php echo e($data->image); ?>" />
		</div>
	</div>
	<br />
	<div class="form-group text-center">
		<input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
	</div>
</form>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/companies/edit.blade.php ENDPATH**/ ?>