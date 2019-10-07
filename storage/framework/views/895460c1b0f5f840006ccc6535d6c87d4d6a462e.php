<?php $__env->startSection('content'); ?>
<?php if($errors->any()): ?>
<div class="alert alert-danger">
	<ul>
		<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<li><?php echo e($error); ?></li>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</ul>
</div>
<?php endif; ?>
<div class="col-md-4 text-center">
<h2>New Company</h2>
</div>
<div align="right">
	<a href="<?php echo e(route('companies.index')); ?>" class="btn btn-primary">Back</a>
</div>

<form method="post" action="<?php echo e(route('companies.store')); ?>" enctype="multipart/form-data">

	<?php echo csrf_field(); ?>
	<div class="form-group row">
		<label class="col-md-4 text-center">Enter Name</label>
		<div class="col-md-4">
			<input type="text" name="name" class="form-control input-lg" />
		</div>
	</div>
	<br />
	
	<div class="form-group row">
		<label class="col-md-4 text-center">Enter  Company Email</label>
		<div class="col-md-4">
			<input type="text-center" name="email" class="form-control" />
		</div>
	</div>
	<br />


	<div class="form-group row">
		<label class="col-md-4 text-center">Enter Company Website</label>
		<div class="col-md-4">
			<input type="text" name="website" class="form-control input-lg" />
		</div>
	</div>
	<div class="form-group row">
		<label class="col-md-4 text-center">Select Company Logo</label>
		<div class="col-md-4">
			<input type="file" name="image" />
		</div>
	</div>
	<br />
	<div class="form-group text-center">
		<input type="submit" name="add" class="btn btn-primary input-lg" value="Add" />
	</div>

</form>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/companies/create.blade.php ENDPATH**/ ?>