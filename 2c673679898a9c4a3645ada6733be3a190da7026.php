
<?php
    $title = 'ご意見投稿';
?>

<?php echo $__env->make('include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('block.title', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <form action="/opinion/conf" method="POST">
            <?php echo csrf_field(); ?>
            <strong class="text-muted">ニックネーム</strong>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                    <input class="form-control" placeholder="ニックネーム" type="text" name="name" value="<?php echo e($nickname); ?>" readonly>
                </div> 
            </div> 
            <strong class="text-muted">ご意見タイトル</strong>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                    <input class="form-control" placeholder="ご意見タイトル" type="text" name="opiniontitle">
                </div> 
            </div> 
            <?php if($errors->has('opiniontitle')): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->get('opiniontitle'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <strong class="text-muted">ご意見ジャンル</strong>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input class="form-control" placeholder="ご意見ジャンル" type="text" name="opiniongenre">
                </div> 
            </div> 
            <?php if($errors->has('opiniongenre')): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->get('opiniongenre'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>

            <script>
                $('#opinionbody').maxlength({
                    alwaysShow: true
                });
            </script>

            <strong class="text-muted">ご意見</strong>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <textarea class="form-control" id="opnionbody" name="opinionbody" rows="8" placeholder="本サイトにおけるご意見を250文字以内で入力"></textarea>
                </div> 
            </div> 
            <?php if($errors->has('opinionbody')): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->get('opinionbody'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <div class="form-group">
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block">確認</button>
                </div> 
            </div> 
            <div class="form-group">
                <div class="text-center">
                    <a class="btn btn-primary" href="/top" role="button">戻る</a>
                </div>
            </div>
        </form>
    </div>
</body>

<?php echo $__env->make('include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /Users/shiraishitoshio/Laravel/Laravel_mysite_new2/resources/views/auth/opinion.blade.php ENDPATH**/ ?>