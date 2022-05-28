<?php
    $title = '統計情報';
?>

<?php echo $__env->make('include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('block.title', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="row">
            <div class="col">
                <?php
                    $title = 'あなたがよく閲覧するジャンル';
                ?>
                <?php echo $__env->make('block.statisticstitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('block.statisticsinnertitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php for($i = 1;$i <= 3;$i++): ?>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <strong class="columnrankname"><?php echo e($i); ?>位</strong>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <strong class="columnrank">ジャンル名</strong>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        <?php endfor; ?>
                    <?php echo $__env->make('block.statisticsinnerendtitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('block.statisticsendtitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="col">
                <?php
                    $title = 'あなたのランキングによく出てくる作品';
                ?>
                <?php echo $__env->make('block.statisticstitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('block.statisticsinnertitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php for($i = 1;$i <= 3;$i++): ?>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <strong class="columnrankname"><?php echo e($i); ?>位</strong>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <strong class="columnrank">ジャンル名</strong>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        <?php endfor; ?>
                    <?php echo $__env->make('block.statisticsinnerendtitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('block.statisticsendtitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>    
        <div class="row">
            <div class="col">
                <?php
                    $title = 'ログイン時間の遷移';
                ?>
                <?php echo $__env->make('block.statisticstitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('block.statisticsinnertitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        aaa
                    <?php echo $__env->make('block.statisticsinnerendtitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('block.statisticsendtitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="col">
                <?php
                    $title = 'アドバイス';
                    $img_url = asset('assets/img/icon/mypage/statistics/happy.png');
                ?>
                <?php echo $__env->make('block.statisticstitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('block.statisticsadvicetitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        aaa
                    <?php echo $__env->make('block.statisticsadviceendtitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('block.statisticsendtitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>    
        <div class="form-group">
            <div class="text-left">
                <a class="btn btn-primary" href="/mypage" role="button">戻る</a>
            </div>
        </div> 

    <?php echo $__env->make('block.endtitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php /**PATH /Users/shiraishitoshio/Laravel/Laravel_mysite_new2/resources/views/mypage/statistics.blade.php ENDPATH**/ ?>