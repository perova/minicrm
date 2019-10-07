<?php $__env->startSection('content'); ?>
<div class="col-md-4 text-center">
<h2>Edit Employee Details</h2>
</div>
<div align="right">
	<a href="<?php echo e(route('employees.index')); ?>" class="btn btn-primary">Back</a>
</div>
<br />

<form method="post" action="<?php echo e(route('employees.update', $data->id)); ?>">

	<?php echo csrf_field(); ?>
	<?php echo method_field('PATCH'); ?>
	<div class="form-group row">
		<label class="col-md-4 text-center">Enter First Name</label>
		<div class="col-md-4">
			<input type="text" name="first_name" value="<?php echo e($data->first_name); ?>" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-row">
		<label class="col-md-4 text-center">Enter Last Name</label>
		<div class="col-md-4">
			<input type="text" name="last_name" value="<?php echo e($data->last_name); ?>" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group row">
		<label class="col-md-4 text-center">Enter Email</label>
		<div class="col-md-4">
			<input type="text" name="email" value="<?php echo e($data->email); ?>" class="form-control input-lg" />
		</div>
	</div>
	
	<br /><br /><br />
	<div class="form-group row">
		<label class="col-md-4 text-center">Enter Phone</label>
		<div class="col-md-4">
			<input type="text" name="phone" value="<?php echo e($data->phone); ?>" class="form-control input-lg" />
		</div>
	</div>
	<br /><br /><br />
	<div class="form-group row">
		<label class="col-md-4 text-center">Enter Company</label>
		<div class="col-md-4">
			
			<select name="company_id" class="form-control">
				<?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<option value="<?php echo e($company->id); ?>"><?php echo e($company->name); ?></option>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</select>
			
		
		</div>
	</div>
	<div class="form-group text-center">
		<input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
	</div>
</form>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/employees/edit.blade.php ENDPATH**/ ?>