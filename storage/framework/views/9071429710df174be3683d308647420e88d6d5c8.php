

<?php $__env->startSection('container'); ?>
<h1 class="h2">Create Project</h1>

<div class="row mx-2">
	<div class="col-lg-6">
		<form action="/client" method="post">
			<?php echo csrf_field(); ?>
			<div class="mb-3">
				<label class="form-label">Client Name</label>
				<input type="text" class="form-control" name="client_name" id="client_name" value="<?php echo e(old('name')); ?>" >
				
				<?php $__errorArgs = ['client_adress'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
				<div class="invalid-feedback">
					<?php echo e($message); ?>

				</div>
				<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
			</div>
			<div class="mb-3">
	  <label class="form-label">Client Address</label>
	  <textarea class="form-control" rows="3" name="client_address"><?php echo e(old('client_address')); ?></textarea>
	</div>

		<div class="mb-3">
			<button type="submit" name="submit" class="btn btn-primary">Create</button>
		</div>

	</form>
</div>
</div>


<?php $__env->stopSection(); ?>




<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laragon\laragon\www\ProjectAnisa\resources\views/client/create.blade.php ENDPATH**/ ?>