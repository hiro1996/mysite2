<?php
    $title = 'トップページ';
?>

<?php echo $__env->make('include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="p-3 mb-2 bg-secondary text-white">
        <div class="container">
            <h3 class="my-3">新着情報</h3>
            <div class="carousel slide" id="sample" data-ride="carousel">
            
            </div>
        </div>
    </div>

    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#config">Modal Open</button>

<div id="indicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#indicators" data-slide-to="0" class="active"></li>
        <li data-target="#indicators" data-slide-to="1"></li>
    </ol>

    

    <div class="carousel-inner">
        <div class="modal fade" id="config" tabindex="-1" role="dialog" aria-labelledby="config" aria-hidden="true" data-backdrop="static">
            <div class="carousel-item active">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <?php for($i = 1;$i <= count($contentstop["attributes"]["q_explain"]);$i++): ?>
                            <div class="modal-class" id='<?php echo e($contentstop["attributes"]["modalshow_id_name"][$i]); ?>'>
                                <div class="header">
                                    <?php echo $__env->make('block.modaltitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <?php echo $__env->make('block.modalendtitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                                <div class="modal-body">
                                    <?php echo $__env->make('modal.rankingconfig', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <?php
        $title = 'XXXXサイトとは';
        $rankingtitleleft = '';
        $rankingtitleright = '';
    ?>

    <section class="whatissite">
        <div class="form-group">
            <div class="text-center">
            お家で何を見よう？自分にとってのおすすめの映画、おすすめの漫画、おすすめのアニメって何だろう？そんな疑問はありませんか？<br>
            本サイトは自分がどんなアニメ、漫画、映画を見たいかのおすすめを教えてくれるサイトです。<br>
            さらに、見た作品について「ここが面白い！」という感想があれば、「レビュ-投稿する」でレビュー投稿して、<br>
            その作品の面白さを他のユーザーに端的に知らせてあげよう！ネタバレはやめてね！<br>
            今週の全ユーザーおすすめランキングには、レビュー投稿された作品の面白度合いをポイント化してランキングを表示するよ！<br>
            あなたのおすすめランキングには、自分が気になるタグを設定しておくと、それに応じたおすすめランキングを表示するよ！<br>
            </div>
        </div>
    </section>
        <div class="form-group">
            <div class="text-center">
                <a href="/post" class="btn btn-secondary">レビュー投稿する</a>
            </div>
        </div>
        <div class="form-group">
            <div class="text-center">
                <a href="/opinion" class="btn btn-secondary">ご意見投稿する</a>
            </div>
        </div>

    <?php
        $rankingtitleleft = '';
        $rankingtitleright = '';
    ?>
    
    <section class="allusersection" id="allusersection">
        <div class="contentstop-container">
            <article class="card-body">
                <h2 class="card-title text-center mb-4 mt-1">
                    <div class="contentstoptitle" id="contentstoptitle"><?php echo e($contentstop['table_title']); ?></div>
                </h2>
                <?php if(!empty($contentstop['button_name'])): ?>
                    <div class="d-flex justify-content-around">
                        <span><?php echo e($rankingtitleleft); ?></span>
                        <span><?php echo e($rankingtitleright); ?></span>
                        <button type="button" class="btn btn-primary" id="rankingbutton"><?php echo e($contentstop['button_name']); ?></button>
                    </div>
                <?php endif; ?>
                <br>
                <div class="card alluser" id="alluser">
                    <div id="filmtable" class="tab-pane active">
                        <ul class="contenttopworklist-ul">
                            <?php for($i = 1;$i <= 6;$i++): ?>
                                <li class="contenttopworklist-li">
                                    <a href="/work_indetail/<?php echo e($contentstop['workfilm_url'][$i]); ?>" target="_blank">
                                        <img src="<?php echo e($contentstop['workfilm_img'][$i]); ?>" alt="<?php echo e($contentstop['workfilm_img'][$i]); ?>" width="200" height="150">
                                        <div class="worktitlename">
                                            <?php echo e($contentstop['workfilm_title'][$i]); ?>

                                        </div>
                                    </a>
                                </li>
                            <?php endfor; ?>
                        </ul>
                    </div>
                </div>


            <div class="card myuser" id="myuser">
                <?php $film = "映画"; ?>
                <?php $comic = "漫画"; ?>
                <?php $anime = "アニメ"; ?>
                <?php if(empty(session('loginid'))): ?> <!--ログインしていない人-->
                    <div class="form-group">
                        <div class="text-center">
                            ログインすると見られるようになります。
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            <a href="/login" class="btn btn-primary">ログイン</a>
                        </div>
                    </div> 
                <?php else: ?> <!--ログインしている人-->
                    <ul class="nav nav-tabs">
                        <?php if(isset($film)): ?>
                            <li class="nav-item">
                                <a href="#recommendfilmtable" class="nav-link" data-toggle="tab">映画</a>
                            </li>
                        <?php endif; ?>
                        <?php if(isset($comic)): ?>
                            <li class="nav-item">
                                <a href="#recommendcomictable" class="nav-link" data-toggle="tab">漫画</a>
                            </li>
                        <?php endif; ?>
                        <?php if(isset($anime)): ?>
                            <li class="nav-item">
                                <a href="#recommendanimetable" class="nav-link" data-toggle="tab">アニメ</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                    <div class="tab-content">
                    <?php if(isset($film)): ?>
                        <div id="recommendfilmtable" class="tab-pane active">
                            <table class="table table-sm">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="align-middle">Rank</th>
                                        <th class="align-middle">作品画像</th>
                                        <th class="align-middle">作品名</th>
                                        <th class="align-middle">前回の順位</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    <?php endif; ?>
                    <?php if(isset($comic)): ?>
                        <div id="recommendcomictable" class="tab-pane">
                            <table class="table table-sm">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="align-middle">Rank</th>
                                        <th class="align-middle">作品画像</th>
                                        <th class="align-middle">作品名</th>
                                        <th class="align-middle">前回の順位</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    <?php endif; ?>
                    <?php if(isset($anime)): ?>
                        <div id="recommendanimetable" class="tab-pane">
                            <table class="table table-sm">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="align-middle">Rank</th>
                                        <th class="align-middle">作品画像</th>
                                        <th class="align-middle">作品名</th>
                                        <th class="align-middle">前回の順位</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    <?php endif; ?>    
                </div>
            <?php endif; ?>
        </div>

        </article>
        </div>
    </section>


<?php echo $__env->make('include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /Users/shiraishitoshio/Laravel/Laravel_mysite_new2/resources/views/contentstop.blade.php ENDPATH**/ ?>