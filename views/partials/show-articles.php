<?php

use App\Models\Articles;

 foreach ( $articles as $article ): ?>

        <div class="row blog-item px-3 pb-5">
                <div class="col-md-6">
                    <img class="img-fluid mb-4 mb-md-0" src="<?php echo ($article['article_img'])? 'uploads/images/'.$article['article_img'] : $defualt_img ?>" alt="Image">
                </div>
                <div class="col-md-6">
                    <h3 class="mt-md-4 px-md-3 mb-2 py-2 bg-white font-weight-bold"> <?php echo $article['article_title'] ?></h3>
                    <div class="d-flex mb-3">
                        <small class="mr-2 text-muted"><i class="fa fa-calendar-alt"></i>  <?php echo $article['article_date'] ?></small>
                        <!-- <small class="mr-2 text-muted"><i class="fa fa-folder"></i> Web Design</small> -->
                        <small class="mr-2 text-muted"><i class="fa fa-comments"></i> 15 Comments</small>
                    </div>
                    <p>
                        <?php echo str_replace('\n','<br>', $article['article_content']) ?>
                    </p>

                    <a class="btn btn-primary px-3" href="/coments?id=<?php echo $article['article_id'] ?>">GoTo Coments.</a>
                    <?php if ($user && $user['user_type'] > 0): ?>
                        <a class="btn btn-info   px-3" href="/edit?id=<?php echo $article['article_id'] ?>">Edit</a>
                        <a class="btn btn-danger px-3" href="/delete?id=<?php echo $article['article_id'] ?>">Delete</a>
                    <?php endif ?>
                </div>
        </div>

<?php endforeach ?>