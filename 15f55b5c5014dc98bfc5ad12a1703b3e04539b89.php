<?php
    //$title = '「'.$workname.'」作品詳細';
    $title = '作品詳細';
    $bigUrl = "http://127.0.0.1/";
    $img = $bigUrl .= $workdata['img'];

    /**
     * get genre from url
     */
    $url = url()->current();
    $genre = explode('/',$url);
    //$genre = $genre[4];
?>

<?php echo $__env->make('include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('block.title', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="row">
            <div class="col">
                <?php
                    $title = '作品情報';
                ?>
                <?php echo $__env->make('block.workindetailtitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="row">
                        <div class="d-flex text-center">
                            <div class="thumbnailpic">
                                <img src="<?php echo e($img); ?>" width="200" height="150">
                                <div class="worktitle">
                                    <?php echo e($workdata['title']); ?>

                                </div>
                            </div>
                            <div class="explain-favoritebtn">
                                <div class="explain">
                                    <?php echo e($workdata['explaining']); ?>

                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col table-category">
                            <table border="1" width="200" height="60">
                                <tr>
                                    <td>かっこいい</td>
                                    <td>美しい</td>
                                </tr>
                                <tr>
                                    <td>悲哀</td>
                                    <td>心苦しい</td>
                                </tr>
                            </table>
                        </div>
                        <br>
                        <div class="col eachbtn">
                            <div class="form-group">
                                <div class="text-center">
                                    <button type="submit" class="<?php echo e($favoriteclass); ?>" id="favoritebutton"><?php echo e($favoritetext); ?></button>
                                </div> 
                            </div> 
                            <div class="form-group">
                                <div class="text-center">
                                    <a href="/genrepost"><button type="submit" class="btn btn-primary btn-block">ジャンル投票</button></a>
                                </div> 
                            </div> 
                        </div>
                    </div>
                <?php echo $__env->make('block.workindetailendtitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="col">
                <?php
                    $title = 'ログイン回数';
                ?>
                <?php echo $__env->make('block.workindetailtitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="card">
                        <div class="card-body">
                            <canvas id="goodtimescanvas"></canvas>
                        </div>
                    </div>
                    <br>
                    <?php
                        $amazon = asset('assets/img/icon/workindetail/amazonprime.png');
                        $yahoo = asset('assets/img/icon/workindetail/yahoo.png');
                    ?>
                    <div class="row">
                        <div class="col icon-otherpage">
                            <a href="#"><img src="<?php echo e($amazon); ?>" width="75" height="50" alt="amazon prime"></a>
                            <span class="icontitle">Amazon Prime</span>
                        </div>
                        <div class="col icon-otherpage">
                            <a href="#"><img src="<?php echo e($yahoo); ?>" width="75" height="50" alt="yahoo calender"></a>
                            <span class="icontitle">Yahoo Calender</span>
                        </div>
                    </div>
                <?php echo $__env->make('block.workindetailendtitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <?php
                    $title = 'レビュー';
                ?>
                <?php echo $__env->make('block.workindetailtitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php
                        $rankingtitleleft = '';
                        $rankingtitleright = '';
                        $rankingtitle = 'レビュー投稿する';
                    ?>
                    <?php echo $__env->make('block.workindetail_reviewtitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('block.workindetail_reviewendtitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <?php if(count($workdata['posts']) != 0): ?>
                        <?php $__currentLoopData = $workdata['posts']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <?php echo e($post->loginid); ?>

                                        </div>
                                        <div class="col">
                                            レビュータイトル
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <br>
                                    <div class="row">
                                        <div class="col">
                                            <?php echo e($post->poststar); ?>

                                        </div>
                                        <div class="col">
                                            <?php echo e($post->postbody); ?>

                                        </div>
                                        <div class="col">
                                            いいね
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?> 
                        <div class="nopost">
                            レビューはありません。
                        </div>
                    <?php endif; ?>
                <?php echo $__env->make('block.workindetailendtitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    
    <?php echo $__env->make('block.endtitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<script>
    $('#favoritebutton').click(function() {
        var chgbutton = document.getElementById('favoritebutton');
        var getregistersrc = location.pathname;
        var getregistertitle = document.getElementsByClassName('worktitle');

        if (chgbutton.className == 'btn btn-primary btn-block') {
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: "/workindetail/favorite/add",
                type: "post",
                data: {
                    url: getregistersrc,
                    title: getregistertitle[0].innerText
                },
                dataType: "json",

            }).done(function(response) {
                chgbutton.className = 'btn btn-secondary btn-block';
                chgbutton.innerText = 'お気に入りに登録済み';

            }).fail(function(failresponse) {
            })
        } else {
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: "/workindetail/favorite/delete",
                type: "post",
                data: {
                    url: getregistersrc,
                    title: getregistertitle[0].innerText
                },
                dataType: "json",

            }).done(function(response) {
                chgbutton.className = 'btn btn-primary btn-block';
                chgbutton.innerText = 'お気に入りに登録';
            }).fail(function(failresponse) {
            })
        }
    })
</script>

<script>
    var goodtimescanvas = document.getElementById('goodtimescanvas').getContext('2d');
    var myChart = new Chart(goodtimescanvas, {
        type: 'bar',
        data: {
            labels: ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10'],
            datasets: [{
                label: 'ログイン回数',
                data: [12, 19, 3, 17, 6, 3, 7, 8, 1, 2, 3],
                backgroundColor: "rgba(23,15,151,0.4)"
            }]
        }
    });
</script><?php /**PATH /Users/shiraishitoshio/Laravel/Laravel_mysite_new2/resources/views/work/workindetail.blade.php ENDPATH**/ ?>