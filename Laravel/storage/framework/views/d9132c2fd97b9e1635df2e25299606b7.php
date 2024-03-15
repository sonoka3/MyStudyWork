

<?php $__env->startSection('container'); ?>
<section id="contact" class="top_contact">
    <div class="top_contact_inner">
        <h2 class="top_contact_title title_page">お問合せ確認</h2>
        <form action="<?php echo e(route('send')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <table class="top_contact_table">
                <tr>
                    <th>氏名（必須）</th>
                    <td><?php echo e($data['name']); ?></td>
                </tr>
                <tr>
                    <th>メールアドレス（必須）</th>
                    <td><?php echo e($data['email']); ?></td>
                </tr>
                <tr>
                    <th>アドレス再入力（必須）</th>
                    <td><?php echo e($data['email_chk']); ?></td>
                </tr>
                <tr>
                    <th>お問合せ分類（必須）</th>
                    <td><?php echo e($data['category']); ?></td>
                </tr>
                <tr>
                    <th>お問合せ内容</th>
                    <td><?php echo e($data['msg']); ?></td>
                </tr>
            </table>
            <div class="top_contact_btn">
                <button type="submit" class="top_contact_btn_submit btn">送信</button><br>
                <button type="submit" name="back" class="top_contact_btn_back">戻る</button>
            </div>
        </form>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web_service.layouts.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\wealthon-training\web-service\Laravel\resources\views/web_service/contact/confirm.blade.php ENDPATH**/ ?>