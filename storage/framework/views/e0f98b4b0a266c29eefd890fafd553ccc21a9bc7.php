

<?php $__env->startSection('container'); ?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Client</h1>
      </div>

<?php if(session()->has('pesan')): ?>
	<div class="alert alert-success" role="alert">
		<?php echo e(session('pesan')); ?>

	</div>
<?php endif; ?>

	<a href="/client/create" class="btn btn-dark mb-3 mx-2"><i class="fa fa-plus-circle align-text-bottom mx"></i> New Data</a>

	<table class="table table-boredered mx-2">	
		<tr>
			<th>No</th>
			<th>Client Name</th>
			<th>Client Address</th>
			<th>Aksi</th>
		</tr>
		<?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

		<tr>
			<td><?php echo e($loop->iteration); ?> </td>
			<td><?php echo e($client->client_name); ?> </td>
			<td><?php echo e($client->client_address); ?> </td>

			<td>
				<a href="/client/<?php echo e($client->id); ?>/edit" class="btn btn-warning btn-sm"><i
                                    class="fa fa-pencil-square-o align-text-bottom"></i>Edit</a>
				<form action="/client/<?php echo e($client->id); ?>" method="post" class="d-inline">
					<?php echo method_field('DELETE'); ?>
					<?php echo csrf_field(); ?>
					<button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Yakin akan menghapus data ?')"><i
                                    class="fa fa-trash-o align-text-bottom"></i>Delete</button>
				</form>

			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>

<?php echo e($clients->links('pagination::bootstrap-5')); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laragon\laragon\www\ProjectAnisa\resources\views/client/index.blade.php ENDPATH**/ ?>