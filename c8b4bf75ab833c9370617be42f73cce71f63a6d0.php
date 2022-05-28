<?php
    $title = '会員情報';
?>

<?php echo $__env->make('include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('block.title', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="row">
            <div class="col">
                <?php echo $__env->make('block.informationtitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="circle">
                    </div>
                    <div class="form-group">
                        <div class="text-center searchbuttondivclass">
                            <input type="file" value="アイコン登録" id="searchbuttonid" class="btn btn-primary btn-block">
                        </div> 
                    </div> 
                    <?php echo $__env->make('block.informationinnertitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <div class="input-group">
                                        <strong class="columnname">ニックネーム</strong>
                                    </div>
                                </div>
                            </div> 
                            <div class="col">
                                <div class="form-group">
                                    <div class="input-group">
                                        <p class="columndata"><?php echo e($users->nickname); ?></p>
                                    </div>
                                </div>
                            </div> 
                        </div> 
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <div class="input-group">
                                        <strong class="columnname">年齢</strong>
                                    </div>
                                </div>
                            </div> 
                            <div class="col">
                                <div class="form-group">
                                    <div class="input-group">
                                        <p class="columndata">ああああああああ</p>
                                    </div>
                                </div>
                            </div> 
                        </div> 
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <div class="input-group">
                                        <strong class="columnname">最終ログイン</strong>
                                    </div>
                                </div>
                            </div> 
                            <div class="col">
                                <div class="form-group">
                                    <div class="input-group">
                                        <p class="columndata"><?php echo e($users->last_display_login_time); ?></p>
                                    </div>
                                </div>
                            </div> 
                        </div> 
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <div class="input-group">
                                        <strong class="columnname">本サイト訪問回数</strong>
                                    </div>
                                </div>
                            </div> 
                            <div class="col">
                                <div class="form-group">
                                    <div class="input-group">
                                        <p class="columndata"><?php echo e($users->login_number_of_times); ?>回</p>
                                    </div>
                                </div>
                            </div> 
                        </div> 
                    <?php echo $__env->make('block.informationinnerendtitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('block.informationendtitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="col">
                <?php echo $__env->make('block.informationtitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <u><strong class="text-muted">現在のポイント</strong></u>
                    <div class="form-group">
                        <div class="text-center">
                            <br>
                            <p class="points">
                                <img src="<?php echo e(asset('assets/img/icon/information/point.png')); ?>" alt="ポイントの画像" class="pointimg" width="60pt" height="60pt">
                                &nbsp;
                                <?php for($i = 0;$i < count($points);$i++): ?> 
                                    <img src="<?php echo e($points[$i]); ?>" alt="数値" class="pointimg" width="40pt" height="40pt">
                                <?php endfor; ?>    
                                pt
                            </p>
                        </div>
                    </div>
                    <?php echo $__env->make('block.informationinnertitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php for($i = 1;$i < 6;$i++): ?>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <strong class="columnname">ポイント獲得履歴</strong>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <p class="columndata">ああああああああ</p>
                                        </div>
                                    </div>
                                </div> 
                            </div> 
                        <?php endfor; ?>
                    <?php echo $__env->make('block.informationinnerendtitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('block.informationendtitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>

            <div class="collapse card" id="searchbuttonid">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">作品名</th>
                            <th scope="col">カテゴリー</th>
                        </tr>
                    </thead>

                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>ハイキュー</td>
                                <td>閲覧日閲覧日</td>
                            </tr>
                        </tbody>
                        
                </table>
                <nav aria-label="Page navigation example text-center">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">前へ</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">次へ</a></li>
                    </ul>
                </nav>
            </div>

    <?php echo $__env->make('block.endtitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/shiraishitoshio/Laravel/Laravel_mysite_new2/resources/views/mypage/information.blade.php ENDPATH**/ ?>