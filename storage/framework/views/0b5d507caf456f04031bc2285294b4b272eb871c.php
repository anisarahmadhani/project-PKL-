

<?php $__env->startSection('container'); ?>
<h1 class="h2">Create Project</h1>

<div class="row mx-2">
	<div class="col-lg-6">
		<form action="/project" method="post">
			<?php echo csrf_field(); ?>
			<div class="mb-3">
				<label class="form-label">Name</label>
				<input type="text" class="form-control" name="name" id="name" value="<?php echo e(old('name')); ?>" >
				
				<?php $__errorArgs = ['name'];
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
			<div class="mb-3 mt-3">
				<label class="form-label">Client</label>
				<select class="form-select" name="client_id" aria-label="Default select example">
					<?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value="<?php echo e($client->id); ?>"><?php echo e($client->client_name); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</select>
			</div>
			
			<div class="mb-3">
				<label class="form-label">Project Start</label>
				<input type="date" class="form-control <?php $__errorArgs = ['project_start'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="project_start" id="project_start" value="<?php echo e(old('project_start')); ?>">
				<?php $__errorArgs = ['project_start'];
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
				<label class="form-label">Project End</label>
				<input type="date" class="form-control <?php $__errorArgs = ['project_end'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="project_end" id="project_end" value="<?php echo e(old('project_end')); ?>">
				<!-- untuk memberi peringatan harus 10 angka -->
				<?php $__errorArgs = ['project_end'];
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
				<label class="form-label">Status</label></br>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="project_status" value="OPEN">
					<label class="form-check-label">OPEN</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="project_status" value="DOING">
					<label class="form-check-label">DOING</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="project_status" value="DONE">
					<label class="form-check-label">DONE</label>
				</div>
			</div>

		</select>

		<div class="mb-3">
			<button type="submit" name="submit" class="btn btn-primary">Create</button>
		</div>

	</form>
</div>
</div>


<?php $__env->stopSection(); ?>




<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laragon\laragon\www\ProjectAnisa\resources\views/project/create.blade.php ENDPATH**/ ?>