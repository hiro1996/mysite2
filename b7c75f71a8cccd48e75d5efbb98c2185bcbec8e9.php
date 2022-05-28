<?php
    $title = 'マイページ';
?>

<?php echo $__env->make('include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('block.title', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="row" id="mypage1">
            <div class="col">
                <?php
                    $title = 'ユーザー情報変更';
                    $img_url = asset('assets/img/icon/mypage/home/account.png');
                ?>
                <a href="#" id="moveuserinfo">
                <?php echo $__env->make('block.mypagetitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="explanation text-center">
                        ニックネーム・パスワードの<br>変更はこちら
                    </div>
                <?php echo $__env->make('block.mypageendtitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </a>
            </div>
            <div class="col">
                <?php
                    $title = '個人属性変更';
                    $img_url = asset('assets/img/icon/mypage/home/attribute.png');
                ?>
                <a href="/attribute">
                <?php echo $__env->make('block.mypagetitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="explanation text-center">
                        あなたへのおすすめの作品の<br>設定はこちら
                    </div>
                <?php echo $__env->make('block.mypageendtitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </a>
            </div>
            <div class="col">
                <?php
                    $title = '会員情報';
                    $img_url = asset('assets/img/icon/mypage/home/userinfo.png');
                ?>
                <a href="/info">
                <?php echo $__env->make('block.mypagetitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="explanation text-center">
                        現在のあなたの<br>会員情報はこちら
                    </div>
                <?php echo $__env->make('block.mypageendtitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </a>
            </div>
        </div>
        <div class="row" id="mypage2">
            <div class="col">
                <?php
                    $title = '統計情報';
                    $img_url = asset('assets/img/icon/mypage/home/statistics.png');
                ?>
                <a href="/stat">
                <?php echo $__env->make('block.mypagetitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="explanation text-center">
                        あなたの閲覧作品の<br>傾向はこちら
                    </div>
                <?php echo $__env->make('block.mypageendtitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </a>
            </div>
            <div class="col">
                <?php
                    $title = '閲覧履歴';
                    $img_url = asset('assets/img/icon/mypage/home/viewhistory.png');
                ?>
                <a href="/work_history">
                <?php echo $__env->make('block.mypagetitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="explanation text-center">
                        閲覧した作品の<br>履歴一覧はこちら
                    </div>
                <?php echo $__env->make('block.mypageendtitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </a>
            </div>
            <div class="col">
                <?php
                    $title = '詳細設定';
                    $img_url = asset('assets/img/icon/mypage/home/indetail.png');
                ?>
                <a href="/setting">
                <?php echo $__env->make('block.mypagetitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="explanation text-center">
                        ランキングなどの<br>各設定はこちら
                    </div>
                <?php echo $__env->make('block.mypageendtitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </a>
            </div>
        </div>   

        <div class="row" id="userinfo">
            <div class="col">
                <?php
                    $title = 'ニックネーム変更';
                    $img_url = asset('assets/img/icon/mypage/home/nickname.png');
                ?>
                <a href="/nickname_change">
                <?php echo $__env->make('block.mypagetitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="explanation text-center">
                        ニックネームの変更はこちら
                    </div>
                <?php echo $__env->make('block.mypageendtitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </a>
            </div>
            <div class="col">
                <?php
                    $title = 'パスワード変更';
                    $img_url = asset('assets/img/icon/mypage/home/password.png');
                ?>
                <a href="/passwd_change">
                <?php echo $__env->make('block.mypagetitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="explanation text-center">
                        パスワードの変更はこちら
                    </div>
                <?php echo $__env->make('block.mypageendtitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </a>
            </div>
        </div>    
        <div class="form-group" id="backmypage">
            <div class="text-left">
                <a class="btn btn-primary" href="/mypage" role="button">戻る</a>
            </div>
        </div> 

    <?php echo $__env->make('block.endtitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<script>
    $(function() {
        $('#userinfo').hide();
        $('#backmypage').hide();

        $('#moveuserinfo').click(function() {
            $('#userinfo').show();
            $('#backmypage').show();
            $('#mypage1').hide();
            $('#mypage2').hide();
        })
    })
</script><?php /**PATH /Users/shiraishitoshio/Laravel/Laravel_mysite_new2/resources/views/mypage/mypage.blade.php ENDPATH**/ ?>