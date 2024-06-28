

<?php $__env->startSection('content'); ?>
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Applicant Details</h1>
    <div class="mb-4 font-medium text-indigo-700">
        <strong>Name:</strong> <?php echo e($applicant->name); ?>

    </div>
    <div class="mb-4 font-medium text-indigo-700">
        <strong>Email:</strong> <?php echo e($applicant->email); ?>

    </div>
    <div class="mb-4 font-medium text-indigo-700">
        <strong>Status:</strong> <?php echo e($applicant->status); ?>

    </div>
    <a href="<?php echo e(route('applicants.index')); ?>" class="bg-blue-500 text-white px-4 py-2 rounded">
        Back to Applicants
    </a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\applicant-management\resources\views/applicants/show.blade.php ENDPATH**/ ?>