

<?php $__env->startSection('content'); ?>
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Applicants</h1>
    <a href="<?php echo e(route('applicants.create')); ?>" class="bg-blue-500 text-white px-4 py-2 rounded">Create New Applicant</a>
    <table class="min-w-full mt-4 font-medium text-indigo-700">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $applicants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $applicant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($applicant->name); ?></td>
                <td><?php echo e($applicant->email); ?></td>
                <td><?php echo e($applicant->status); ?></td>
                <td>
                    <a href="<?php echo e(route('applicants.show', $applicant->id)); ?>" class="bg-green-500 text-white px-2 py-1 rounded">
                        View
                    </a>
                    <a href="<?php echo e(route('applicants.edit', $applicant->id)); ?>" class="bg-yellow-500 text-white px-2 py-1 rounded">
                        Edit
                    </a>
                    <form action="<?php echo e(route('applicants.destroy', $applicant->id)); ?>" method="POST" class="inline">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\applicant-management\resources\views/applicants/index.blade.php ENDPATH**/ ?>