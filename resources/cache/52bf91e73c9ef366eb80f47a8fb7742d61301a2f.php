<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
</head>
<body>
<div class="container d-flex justify-content-center text-center" style="width:600px;">
    <?php if(isset($products)): ?>
        <table class="text-center">
            <tbody class="text-center">
                <tr>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td><?php echo e($product['name']); ?></td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
                <tr>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td><?php echo e($product['price2']); ?></td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
            </tbody>
        </table>
    <?php else: ?>
        <p class="text-center">Ни один товар не подходит к данной выборке</p>
    <?php endif; ?>
</div>
</body>
</html>
<?php /**PATH E:\jesserd\server\Apache24\htdocs\test-task\resources\views/fourth_task.blade.php ENDPATH**/ ?>