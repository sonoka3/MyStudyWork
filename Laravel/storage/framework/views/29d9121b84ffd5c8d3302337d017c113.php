

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
            <form action="<?php echo e(route('dashboard')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="table_wrap">
                    <table class="table_lineup table">
                        <thead>
                            <tr>
                                <th>ラインナップ</th>
                                <th>サービス内容</th>
                                <th>金額（税込）</th>
                                <th><button type="button" class="js_file_trigger btn">アップロード</button><input type="file" name="image" class="js_file"></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="text" name="lineup" maxlength="40" required></td>
                                <td><textarea name="description" maxlength="255" required></textarea></td>
                                <td class="nowrap">
                                    ¥ <input type="text" name="price" class="w_6em" required>
                                    <select name="price_mark">
                                        <option value="">選択</option>
                                        <option value="-">-</option>
                                        <option value="～">～</option>
                                    </select>
                                </td>
                                <td class="text_ac"><img id="image"></td>
                                <td class="w_fit"><button type="submit" class="btn">登録</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </form>
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
                            <td class="text_ac">¥<?php echo e(number_format($web_service->price)); ?> <?php echo e($web_service->price_mark); ?></td>
                            <td class="text_ac"><img src="<?php echo e(Storage::url($web_service->file_path)); ?>" alt=""></td>
                            <td class="w_fit"><a href="<?php echo e(route('edit', $web_service)); ?>" class="btn">編集</button></td>
                            <td class="w_fit">
                                <form action="<?php echo e(route('delete', $web_service)); ?>" method="post">
                                    <?php echo method_field('delete'); ?>
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" onclick="return confirm('本当に削除しますか？')" class="btn">削除</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script>
    document.querySelector('.js_file_trigger').addEventListener('click', function() {
        document.querySelector('.js_file').click();
    });

    const input_file = document.querySelector('.js_file');
    input_file.addEventListener("change", function (e) {
      const file = e.target.files[0];//複数ファイルはfiles配列をループで回す
      const reader = new FileReader();
      const image = document.getElementById("image");
      reader.addEventListener("load", function () {
        image.src = reader.result;
      }, false);

      if (file) {
        reader.readAsDataURL(file);
      }
    })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web_service.layouts.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\wealthon-training\web-service\Laravel\resources\views/web_service/dashboard/dashboard.blade.php ENDPATH**/ ?>