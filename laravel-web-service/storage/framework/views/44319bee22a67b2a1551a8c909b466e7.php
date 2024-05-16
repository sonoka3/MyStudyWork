

<?php $__env->startSection('container'); ?>
<div class="dashboard_contents">
    <h1 class="title_page">編集画面</h1>
    <div class="dashboard_contents_inner">
        <form action="<?php echo e(route('edit', $web_service)); ?>" method="post" enctype="multipart/form-data">
            <?php echo method_field('patch'); ?>
            <?php echo csrf_field(); ?>
            <div class="table_wrap">
                <table class="table_lineup table">
                    <thead>
                        <tr>
                            <th>ラインナップ</th>
                            <th>サービス内容</th>
                            <th>金額（税込）</th>
                            <th><button type="button" class="js_file_trigger btn">アップロード</button><input type="file" name="image" class="js_file" value="<?php echo e(Storage::url($web_service->file_path)); ?>"></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" name="lineup" maxlength="40" value="<?php echo e($web_service->lineup); ?>" required></td>
                            <td><textarea name="description" maxlength="255" required><?php echo e($web_service->description); ?></textarea></td>
                            <td class="nowrap">
                                ¥ <input type="text" name="price" class="w_6em" value="<?php echo e($web_service->price); ?>" required>
                                <select name="price_mark">
                                    <option value="">選択</option>
                                    <option value="-" <?php echo e($web_service->price_mark == '-' ? 'selected' : ''); ?>>-</option>
                                    <option value="～" <?php echo e($web_service->price_mark == '～' ? 'selected' : ''); ?>>～</option>
                                </select>
                            </td>
                            <td class="text_ac"><img src="<?php echo e(Storage::url($web_service->file_path)); ?>" id="image"></td>
                            <td class="w_fit"><button class="btn">更新</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>
        <div class="dashboard_back">
            <a href="<?php echo e(route('dashboard')); ?>" class="btn">管理画面に戻る</a>
        </div>
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
      const file = e.target.files[0];
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
<?php echo $__env->make('web_service.layouts.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\wealthon-training\web-service\Laravel\resources\views/web_service/dashboard/edit.blade.php ENDPATH**/ ?>