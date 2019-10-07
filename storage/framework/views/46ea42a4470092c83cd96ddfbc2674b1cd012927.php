<?php $__env->startSection('content'); ?>

<div align="right">
	<a href="<?php echo e(route('employees.create')); ?>" class="btn btn-success btn-sm">Add</a>
</div>
<br />
<?php if($message = Session::get('success')): ?>
<div class="alert alert-success">
	<p><?php echo e($message); ?></p>
</div>
<?php endif; ?>


<table class="table table-bordered table-striped">
	<tr>
		
		<th width="20%">First Name</th>
		<th width="20%">Last Name</th>
		<th width="20%">Email</th>
		<th width="20%">Phone</th>
		<th width="20%">Company</th>
		<th width="20%">Action</th>
	</tr>
	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			
			<td><?php echo e($row->first_name); ?></td>
			<td><?php echo e($row->last_name); ?></td>
			<td><?php echo e($row->email); ?></td>
			<td><?php echo e($row->phone); ?></td>
			<td><?php echo e($row->company->name); ?></td>
			<td>
				
				<form action="<?php echo e(route('employees.destroy', $row->id)); ?>" method="post">
					<a href="<?php echo e(route('employees.show', $row->id)); ?>" class="btn btn-primary">Show</a>
					<a href="<?php echo e(route('employees.edit', $row->id)); ?>" class="btn btn-warning">Edit</a>
					<?php echo csrf_field(); ?>
					<?php echo method_field('DELETE'); ?>
					<button type="submit" class="btn btn-danger">Delete</button>
				</form>
			</td>
		</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php echo $data->links(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/employees/index.blade.php ENDPATH**/ ?>