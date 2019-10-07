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
<h2>New Employee</h2>
</div>
<div align="right">
	<a href="<?php echo e(route('employees.index')); ?>" class="btn btn-primary">Back</a>
</div>

<form method="post" action="<?php echo e(route('employees.store')); ?>" enctype="multipart/form-data">

	<?php echo csrf_field(); ?>
	<div class="form-group row">
		<label class="col-md-4 text-center">Enter First Name</label>
		<div class="col-md-4">
			<input type="text" name="first_name" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<div class="form-group row">
		<label class="col-md-4 text-center">Enter Last Name</label>
		<div class="col-md-4">
			<input type="text" name="last_name" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<div class="form-group row">
		<label class="col-md-4 text-center">Enter Email</label>
		<div class="col-md-4">
			<input type="text" name="email" />
		</div>
	</div>
	<br />
	<div class="form-group row">
		<label class="col-md-4 text-center">Enter Phone</label>
		<div class="col-md-4">
			<input type="text" name="phone" />
		</div>
	</div>
	<br />
	<div class="form-group row">
		<label class="col-md-4 text-center">Select Company </label>
		<select name="company_id">
			<?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idCompany => $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<option value="<?php echo e($idCompany); ?>"><?php echo e($company); ?></option>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</select>
	</div>
	<br />
	<div class="form-group text-center">
		<input type="submit" name="add" class="btn btn-primary input-lg" value="Add" />
	</div>

</form>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/employees/create.blade.php ENDPATH**/ ?>