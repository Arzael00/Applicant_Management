

<?php $__env->startSection('content'); ?>
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4"><?php echo e(isset($applicant) ? 'Edit' : 'Create'); ?> Applicant</h1>
    <form action="<?php echo e(isset($applicant) ? route('applicants.update', $applicant->id) : route('applicants.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php if(isset($applicant)): ?>
        <?php echo method_field('PUT'); ?>
        <?php endif; ?>
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" id="name" value="<?php echo e(old('name', $applicant->name ?? '')); ?>" class="mt-1 block w-full border font-medium text-indigo-700 border-black-300 rounded-md shadow-sm">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" value="<?php echo e(old('email', $applicant->email ?? '')); ?>" class="mt-1 block w-full border font-medium text-indigo-700 border-black-300 rounded-md shadow-sm">
        </div>
        <div class="mb-4">
            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
            <select name="status" id="status" class="mt-1 block w-full border font-medium text-indigo-700 border-black-300 rounded-md shadow-sm">
                <option value="unviewed" <?php echo e((old('status', $applicant->status ?? '') == 'unviewed') ? 'selected' : ''); ?>>Unviewed</option>
                <option value="interviewed" <?php echo e((old('status', $applicant->status ?? '') == 'interviewed') ? 'selected' : ''); ?>>Interviewed</option>
                <option value="hired" <?php echo e((old('status', $applicant->status ?? '') == 'hired') ? 'selected' : ''); ?>>Hired</option>
                <option value="onboarding" <?php echo e((old('status', $applicant->status ?? '') == 'onboarding') ? 'selected' : ''); ?>>Onboarding</option>
                <option value="resign" <?php echo e((old('status', $applicant->status ?? '') == 'resign') ? 'selected' : ''); ?>>Resign</option>
            </select>
        </div>
        <div class="mt-4">
        <button id="redirect-button" class="bg-indigo-500 text-white px-4 py-2 rounded">Save</button>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    document.getElementById('redirect-button').addEventListener('click', function() {
        window.location.href = '<?php echo e(route('applicants.index')); ?>';
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\applicant-management\resources\views/applicants/create.blade.php ENDPATH**/ ?>