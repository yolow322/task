<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
</head>
<body>
<div class="container" style="width:600px;">
    <?php if(!empty($newArray)): ?>
        <table class="table table-bordered text-center">
            <thead>
            <tr class="text-center">
                <th>Ключ массива</th>
                <th>Название города</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $newArray; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th><?php echo e($key); ?></th>
                    <th><?php echo e($value); ?></th>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="text-center">В массиве нет ключей кратных 3<p>
    <?php endif; ?>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="/public/js/main.js"></script>
</html><?php /**PATH E:\jesserd\server\Apache24\htdocs\test-task\resources\views/third_task.blade.php ENDPATH**/ ?>