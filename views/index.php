<?php include ROOT . '/views/layouts/header.php'; ?>
</header>
  <div class="jumbotron">
      <h1>GUEST BOOK</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa consequatur voluptate delectus eveniet quo. Tempore!</p>
  </div>
  <div id="comments-form">
        <h3>Please add your comment</h3>
        <form method="POST">
            <div>
                <?php if (!isset($_SESSION['user_id'])) { ?>
                    <div class="form-group">
                        <label for="usr">Username</label>
                        <input type="text" class="form-control" id="usr" name="unknownUser">
                    </div>
                <?php } ?>
                <div class="form-group">
                    <label for="pwd">Comment</label>
                    <textarea type="password" class="form-control" id="pwd" id="minmessage" name="comment"></textarea>
                </div>
            </div>
            <div>
                <button class="btn btn-default" id="submit" type="submit" name="submit" value="Save">Submit</button>
            </div>
        </form>
    </div>
    <div>
    <?php /** @var $comments */
    foreach ($comments as $comment):?>
      <div class="col-lg-12 six">
        <form method="GET">
        <div class="thumbnail">
          <h4><?php echo mb_strimwidth($comment['user_name'], 0, 37, "...");?></h4>
          <!-- <div class="center"><img src="/template/img/news/<?php echo $comment['id'];?>.jpg"></div> -->
          <p id="comment" onclick="$(this).hide(); $('.comment_edit<?= $comment['id']; ?>').show();"><?= 'Comment: ' . $comment['comment'];?></p>
          <input type="text" class="comment_edit<?= $comment['id']; ?>" value="<?= $comment['comment'];?>" name="comment-edit" style="display: none;">
          <input type="text" name="comment-id" value="<?= $comment['id']; ?>" style="display: none;">
          <p align="center"><strong>Date: <?php echo $comment['created_at'];?></strong></p>
          <input class="btn btn-default" id="submit" type="submit" name="submit" value="EDIT">
        </div>
        </form>
      </div>
    <?php endforeach; ?>
  </div>
  <div class="paginate">
    <ul class="pagination justify-content-center">
    <?php if ($count_pages > 1) { ?>
        <?php if ($page == 1) { ?>
            <li class="page-item disabled">
                <a class="page-link" tabindex="">Prev</a>
            </li>
        <?php } else { ?>
            <?php if ($prev == 1) { ?>
                <li class="page-item">
                    <a class="page-link" href="" tabindex="">Prev</a>
                </li>
            <?php } else { ?>
                <li class="page-item">
                    <a class="page-link" href="/index/?page=<?php echo $prev; ?>" tabindex="">Prev</a>
                </li>
            <?php } ?>
        <?php } ?>
        <?php for ($i = 1; $i <= $count_pages; $i++) { ?>
            <?php if ($i == 1) { ?>
                <li class="page-item"><a class="page-link" href="/"><?php echo $i; ?></a></li>
            <?php } else { ?>
                <li class="page-item"><a class="page-link" href="/index/?page=<?php echo $i; ?>"><?php echo $i ?></a></li>
            <?php } ?>
        <?php } ?>
        <?php if ($page == $count_pages) { ?>
            <li class="page-item disabled">
                <a class="page-link">Next</a>
            </li>
        <?php } ?>
        <?php if ($page != $count_pages) { ?>
            <li class="page-item">
              <a class="page-link" href="/index/?page=<?php echo $next; ?>">Next</a>
            </li>
        <?php } ?>
    <?php } ?>
    </ul>
  </div>

<?php include ROOT . '/views/layouts/footer.php'; ?>