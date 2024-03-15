

<?php $__env->startSection('nav'); ?>
<nav class="nav">
    <div class="nav_login">
        <form action="<?php echo e(route('logout')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <button class="nav_login_btn btn">ログアウト</button>
        </form>
    </div>
</nav>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('container'); ?>
<div class="dashboard_contents">
    <h1 class="title_page">管理画面</h1>
    <div class="dashboard_contents_inner">
        <section class="dashboard_section">
            <h2 class="title_section">新規登録</h2>
            <div class="table_wrap">
                <table class="table_lineup table">
                    <thead>
                        <tr>
                            <th>ラインナップ</th>
                            <th>サービス内容</th>
                            <th>金額（税込）</th>
                            <th><button class="btn">アップロード</button></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" maxlength="40"></td>
                            <td><textarea name="" maxlength="255"></textarea></td>
                            <td><input type="text"></td>
                            <td></td>
                            <td class="w_fit"><button class="btn">登録</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <section class="dashboard_section">
            <h2 class="title_section">データ管理</h2>
            <div class="table_wrap">
                <table class="table_lineup table">
                    <thead>
                        <tr>
                            <th>ラインナップ</th>
                            <th>サービス内容</th>
                            <th>金額（税込）</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $web_services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $web_service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="text_ac"><?php echo e($web_service->lineup); ?></td>
                            <td><?php echo e($web_service->description); ?></td>
                            <td class="text_ac"><?php echo e($web_service->price); ?></td>
                            <td><img src="<?php echo e($web_service->file_path); ?>"></td>
                            <td class="w_fit"><a href="<?php echo e(route('edit', $web_service)); ?>" class="btn">編集</button></td>
                            <td class="w_fit"><button class="btn">削除</button></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web_service.layouts.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\wealthon-training\web-service\laravel\resources\views/web_service/dashboard/dashboard.blade.php ENDPATH**/ ?>