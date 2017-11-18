<?php include ROOT . '/views/layouts/header.php'; ?>
<div class="row" id="article">
    <?php /** @var $newsList */
foreach ($newsList as $newsItem):?>
    <div class="col-sm-6 col-md-12">
        <div class="thumbnail blog">
            <h3><?php echo $newsItem['user_name'];?></h3>
            <!-- <img src="/template/img/news/<?php echo $newsItem['id'] ;?>.jpg"> -->
            <p><?php echo $newsItem['comment'];?></p>
            <!-- /*<div class="content">
                <div class="post">
                    <?php
                        echo ('<p>Likes: '.$newsItem['likes'].'</p>');
                        // $rowCount = $newsItem['if_like'];
                        // echo $rowCount.'++'.'</br>';
                        if ($newsItem['if_like'] == 1) { ?>

                            <span><a href="" class="unlike btn btn-primary" role="button" id="<?php echo $newsItem['id']; ?>">Unlike</a></span>
                    <?php } else { ?>

                        <span><a href="" class="like btn btn-primary" role="button" id="<?php echo $newsItem['id']; ?>">Like</a></span>
                    <?php } ?>
                </div>
            </div>*/ -->
            <p align="center"><strong>Date: <?php echo $newsItem['created_at']; ?></strong></p>
            <!-- <p align="center"><a href="/blog/<?php echo $newsItem['id'];?>" class="btn btn-primary" role="button">Читати</a></p> -->
        </div>
    </div>
<?php endforeach; ?>
</div>
<?php include ROOT . '/views/layouts/footer.php'; ?>

<script src="/template/js/ajax.js"></script>