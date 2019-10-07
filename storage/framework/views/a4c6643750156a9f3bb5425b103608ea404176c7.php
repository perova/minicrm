<?php $__env->startSection('content'); ?>

<div align="right">
	<a href="<?php echo e(route('companies.create')); ?>" class="btn btn-success btn-sm">Add</a>
</div>
<br />
<?php if($message = Session::get('success')): ?>
<div class="alert alert-success">
	<p><?php echo e($message); ?></p>
</div>
<?php endif; ?>


<table class="table table-bordered table-striped">
	<tr>
		<th width="10%">Image</th>
		<th width="35%">Name</th>
		<th width="35%">Email</th>
		<th width="30%">Website</th>
	</tr>
	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><img src="<?php echo e(URL::to('/')); ?>/images/<?php echo e($row->image); ?>" class="img-thumbnail" width="75" /></td>
			<td><?php echo e($row->name); ?></td>
			<td><?php echo e($row->email); ?></td>
			<td><?php echo e($row->website); ?></td>
			<td>
				
				<form action="<?php echo e(route('companies.destroy', $row->id)); ?>" method="post">
					<a href="<?php echo e(route('companies.show', $row->id)); ?>" class="btn btn-primary">Show</a>
					<a href="<?php echo e(route('companies.edit', $row->id)); ?>" class="btn btn-warning">Edit</a>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/companies/index.blade.php ENDPATH**/ ?>