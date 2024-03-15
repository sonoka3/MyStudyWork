

<?php $__env->startSection('container'); ?>
<div class="dashboard_contents">
    <h1 class="title_page">登録画面</h1>
    <div class="dashboard_contents_inner">
        <?php if($errors->any()): ?>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p><?php echo e($error); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        <?php if(session('message')): ?>
            <p><?php echo e(session('message')); ?></p>
        <?php endif; ?>
        <div class="dashboard_back">
            <a href="<?php echo e(route('dashboard')); ?>" class="btn">管理画面に戻る</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web_service.layouts.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\wealthon-training\web-service\Laravel\resources\views/web_service/dashboard/store_result.blade.php ENDPATH**/ ?>