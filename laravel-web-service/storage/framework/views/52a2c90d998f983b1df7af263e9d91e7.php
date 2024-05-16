

<?php $__env->startSection('container'); ?>
<div class="login_contents">
    <h1 class="login_title title_page">ログイン画面</h1>
    <?php if(session('error')): ?>
    <?php echo e(session('error')); ?>

    <?php endif; ?>
    <form action="<?php echo e(route('login')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="login_form">
            <table class="login_form_table table">
                <tr>
                    <th>UserName</th>
                    <td><input type="text" name="name" required></td>
                </tr>
                <tr>
                    <th>PassWord</th>
                    <td><input type="password" name="password" required></td>
                </tr>
            </table>
            <div class="login_form_btn">
                <button type="submit" class="login_form_btn_submit btn">ログイン</button>
            </div>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web_service.layouts.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\wealthon-training\web-service\Laravel\resources\views/web_service/login.blade.php ENDPATH**/ ?>