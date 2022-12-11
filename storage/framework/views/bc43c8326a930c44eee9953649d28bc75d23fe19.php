
<?php $__env->startSection('container'); ?>
<div class="row">
	<div class="col-lg-6 mx-2">
		<form action="/client/<?php echo e($clients->id); ?>" method="post">
			<?php echo method_field('PUT'); ?>
			<?php echo csrf_field(); ?>
			<div class="mb-3">
				<label class="form-label">Client Name</label>
				<input type="text" class="form-control <?php $__errorArgs = ['client_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name ="client_name" id="client_name" value="<?php echo e(old('client_name',$clients->client_name)); ?>">
				<?php $__errorArgs = ['client_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
				<div class="invalid-feedback">
					Please select a valid state.
					<?php echo e($message); ?>

				</div>
				<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
			<div class="mb-3">
	  <label class="form-label">Client Address</label>
	  <textarea class="form-control" rows="3" name="client_address"><?php echo e(old('client_address',$clients->client_address)); ?></textarea>
	</div>
	<div class="mb-3">
		<button type="submit" name="submit" class="btn btn-primary">Update</button>
	</div>
		</form>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laragon\laragon\www\ProjectAnisa\resources\views/client/edit.blade.php ENDPATH**/ ?>