<?php include ROOT . '/views/layouts/header.php'; ?>
<div class="row" id="article">
    <?php /** @var $comments */
foreach ($comments as $comment):?>
    <div class="col-sm-6 col-md-12">
        <div class="thumbnail blog">
            <h3><?php echo 'User: ' . $comment['user_name'];?></h3>
            <p><?php echo 'Comment: ' . $comment['comment'];?></p>
            <input type="text" class="comment_edit<?= $comment['id']; ?>" value="<?= $comment['comment'];?>" name="comment-edit" style="display: none;">
            <input type="text" name="comment-id" value="<?= $comment['id']; ?>" style="display: none;">
            <p align="center"><strong>Date: <?php echo $comment['created_at'];?></strong></p>
            <input class="btn btn-default" id="submit" type="submit" name="submit" value="EDIT">
        </div>
    </div>
<?php endforeach; ?>
</div>
<?php include ROOT . '/views/layouts/footer.php'; ?>

<script src="/template/js/ajax.js"></script>