

<?php $__env->startSection('container'); ?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Project</h1>
      </div>

<?php if(session()->has('pesan')): ?>
	<div class="alert alert-success" role="alert">
		<?php echo e(session('pesan')); ?>

	</div>
<?php endif; ?>

	<a href="/project/create" class="btn btn-dark mb-3 mx-2"><i class="fa fa-plus-circle align-text-bottom mx"></i> New Data</a>

	<table class="table table-boredered mx-2">	
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Client</th>
			<th>Project Start</th>
			<th>Project End</th>
			<th>Project Status</th>
			<th>Aksi</th>
		</tr>
		<?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

		<tr>
			<td><?php echo e($loop->iteration); ?> </td>
			<td><?php echo e($project->name); ?> </td>
			<td><?php echo e($project->client->client_name ?? 'data not found'); ?> </td>
			<td><?php echo e($project->project_start); ?> </td>
			<td><?php echo e($project->project_end); ?> </td>
			<td><?php echo e($project->project_status); ?> </td>


			<td>
				<a href="/project/<?php echo e($project->id); ?>/edit" class="btn btn-warning btn-sm"><i
                                    class="fa fa-pencil-square-o align-text-bottom"></i>Edit</a>
				<form action="/project/<?php echo e($project->id); ?>" method="post" class="d-inline">
					<?php echo method_field('DELETE'); ?>
					<?php echo csrf_field(); ?>
					<button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Yakin akan menghapus data ?')"><i
                                    class="fa fa-trash-o align-text-bottom"></i>Delete</button>
				</form>

			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>

<?php echo e($projects->links('pagination::bootstrap-5')); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laragon\laragon\www\ProjectAnisa\resources\views/project/index.blade.php ENDPATH**/ ?>