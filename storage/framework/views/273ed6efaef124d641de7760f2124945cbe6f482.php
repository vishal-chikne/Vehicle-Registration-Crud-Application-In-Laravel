<h1>list</h1>

<table border="1">
    <tr>
        <td>id</td>
        <td>type</td>
        <td>manufacture</td>
        <td>purchase</td>
        <td>created_at</td>
        <td>updated_at</td>
    </tr>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($post['id']); ?></td>
        <td><?php echo e($post['type']); ?></td>
        <td><?php echo e($post['manufacture']); ?></td>
        <td><?php echo e($post['purchase']); ?></td>
        <td><?php echo e($post['created_at']); ?></td>
        <td><?php echo e($post['updated_at']); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table><?php /**PATH C:\xampp\htdocs\vehicle1\resources\views/postview.blade.php ENDPATH**/ ?>